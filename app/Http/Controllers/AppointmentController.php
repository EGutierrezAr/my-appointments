<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Specialty;
use App\Appointment;
use App\User;
use App\CancelledAppointment;
use App\Interfaces\ScheduleServiceInterface;
use App\Http\Requests\StoreAppointment;

use Carbon\Carbon;
use Validator;

use App\Exports\AppointmentExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;

class AppointmentController extends Controller
{
    public function index()
    {
        $role = auth()->user()->role;

        //admin

        if ($role == 'admin'){
            $pendingAppointments = Appointment::where('status','Reservada')
                ->paginate(10);
            $confirmedAppointments = Appointment::where('status','Confirmada')
                ->paginate(10);
            $oldAppointments = Appointment::whereIn('status',['Atendida','Cancelada'])
                ->paginate(10);
        } elseif ($role == 'doctor'){
            $pendingAppointments = Appointment::where('status','Reservada')
                ->where('doctor_id',auth()->id())
                ->paginate(10);
            $confirmedAppointments = Appointment::where('status','Confirmada')
                ->where('doctor_id',auth()->id())
                ->paginate(10);
            $oldAppointments = Appointment::whereIn('status',['Atendida','Cancelada'])
                ->where('doctor_id',auth()->id())
                ->paginate(10);
        } elseif ($role == 'patient'){
            //patient
            $pendingAppointments = Appointment::where('status','Reservada')
                ->where('patient_id',auth()->id())
                ->paginate(10);
            $confirmedAppointments = Appointment::where('status','Confirmada')
                ->where('patient_id',auth()->id())
                ->paginate(10);
            $oldAppointments = Appointment::whereIn('status',['Atendida','Cancelada'])
                ->where('patient_id',auth()->id())
                ->paginate(10);
        }

        return view('appointments.index', compact('pendingAppointments','confirmedAppointments','oldAppointments',        'role'));
    }

    public function show(Appointment $appointment)
    {
        $role = auth()->user()->role;
        return view('appointments.show', compact('appointment','role'));
    }

    public function create(ScheduleServiceInterface $scheduleService)
    {
    	$specialties = Specialty::all();

        $specialtyId = old('specialty_id');
        if ($specialtyId){
            $specialty = Specialty::find($specialtyId);
            $doctors = $specialty->users;
        } else {
            $doctors = collect();
        }

        
        $date = old('scheduled_date');
        $doctorId =old('doctor_id');
        if($date && $doctorId) {
            $intervals = $scheduleService->getAvailableIntervals($date, $doctorId);
        }else{
             $intervals = null;
        }

    	return view('appointments.create',compact('specialties','doctors', 'intervals'));
    }

    /*- Antes del FORM REQUEST
    public function store(Request $request, ScheduleServiceInterface $scheduleService)
    {
        //Validations in the server
        $rules = [
            'description' => 'required',
            'specialty_id' => 'exists:specialties,id',
            'doctor_id' => 'exists:users,id',
            'scheduled_time' => 'required'
        ];
        $messages = [
            'scheduled_time.required' => 'Por favor seleccione una hora válida para su cita.'
        ];

        //$this->validate($request, $rules, $messages);
        $validator = Validator::make($request->all(), $rules, $messages);

        $validator ->after(function($validator) use ($request, $scheduleService) {
            $date = $request->input('scheduled_date');
            $doctorId = $request->input('doctor_id');
            $scheduled_time = $request->input('scheduled_time');
            
            if (!$date && $doctorId && $scheduled_time) {
                $start = new Carbon($scheduled_time);
             }else{ return }

            $start = new Carbon($scheduled_time);

            if(!$scheduleService->isAvailableInterval($date, $doctorId, $start)) {
                $validator->errors()
                    ->add('available_time','La hora seleccionada ya se encuentra reservada por otro pasciente.');
            }
        });        

        if ($validator->fails()){
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        
        $data = $request->only([
            'description' ,
            'specialty_id' ,
            'doctor_id' ,
            'scheduled_date' ,
            'scheduled_time' ,
            'type' 
        ]);
        $data['patient_id'] = auth()->id(); //Si queremos q un DR o un Adm genere citas, revisar cual es el rol para asignar ese ID donde corresponda

        //right time format
        $carbonTime = Carbon::createFromFormat('g:i A', $data['scheduled_time']);
        $data['scheduled_time'] = $carbonTime->format('H:i:s'); 
        //dd($data->toArray());
        appointment::create($data);

        $notification = 'La cita se ha registrado correctamente!';
        return back()->with(compact('notification'));
        //return redirect ('/');
    }-*/
    
    public function store(StoreAppointment $request)
    {
    	
        //dd($data->toArray());
    	$created = Appointment::createForPatient($request,auth()->id());

        if ($created)
    	   $notification = 'La cita se ha registrado correctamente!';
        else
           $notification = 'Ocurrio un error al registrar la cita médica.';
    	return back()->with(compact('notification'));
    	//return redirect ('/');
    }


    public function showCancelForm(Appointment $appointment)
    {
        if ($appointment->status == 'Confirmada'){
            $role = auth()->user()->role;
            return view('appointments.cancel', compact('appointment','role'));
        } 

        return redirect('/appointments');
    }

    public function postCancel(Appointment $appointment, Request $request)
    {
        if ($request->has('justification')) {
            $cancellation = new CancelledAppointment();
            $cancellation ->justification = $request->input('justification');
            $cancellation->cancelled_by = auth()->id();
            // $cancellation->appointment_id = 
            // $cancellation->save();

            $appointment->cancellation()->save($cancellation);

        }

        $appointment->status = 'Cancelada';
        $saved = $appointment->save();

        if ($saved)
            $appointment->patient->sendFCM('Su cita ha sido cancelada!');

        $notification = 'La cita se ha cancelado correctamente.';
        return redirect('/appointments')->with(compact('notification'));
    }

    public function postConfirm(Appointment $appointment)
    {
        $appointment->status = 'Confirmada';
        info('This is some useful information.');
        $saved = $appointment->save();


        $userName=User::find($appointment->patient_id)->name;
        $doctorName=User::find($appointment->doctor_id)->name;
        $subject = 'Su cita ha sido confirmada!';        
        Mail::to('eeggaa@gmail.com')->send(new MessageReceived($subject,$userName,$doctorName,$appointment));
        
        if ($saved)
            $appointment->patient->sendFCM('Su cita ha sido confirmada!');
    
        $notification = 'La cita se ha confirmado correctamente.';
        return redirect('/appointments')->with(compact('notification'));
    }

    public function export() 
    {
        return Excel::download(new AppointmentExport, 'appointment.xlsx');
    }
}
