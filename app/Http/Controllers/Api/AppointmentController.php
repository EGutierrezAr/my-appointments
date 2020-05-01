<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Appointment;

use App\Http\Requests\StoreAppointment;
/*-  //Esto es lo que me da 
		"id": 1,
        "description",
        "specialty_id",
        "doctor_id",
        "patient_id",
        "scheduled_date",
        "scheduled_time",
        "type",
        "created_at",
        "updated_at",
        "status",
       -*/
class AppointmentController extends Controller
{
    public function index()
    {
    	$user = Auth::guard('api')->user();
    	$appointments = $user->asPatientAppointments()
    	->with([ //las relaciones que tiene con Especialidades y Doctor
    		'specialty' => function($query){  //Funciones anonimas para obtener lo que realmente necesito de "Especialidades"
    			$query -> select('id','name');
    		},
    		'doctor' => function($query){
    			$query -> select('id','name');
    		}
    	]) 
    	->get([ //Los campos que realmente necesito de user
			"id",
	        "description",
	        "specialty_id",
	        "doctor_id",
	        "scheduled_date",
	        "scheduled_time",
	        "type",
	        "created_at",
	        "status"
    	]);

    	return $appointments;
    }

    public function store(StoreAppointment $request)
    {
    	$patientId = Auth::guard('api')->user();
    	$appointment = appointment::createForPatient($request, $patientId);
    	if ($appointment)
    		$success = true;
    	else
    		$success = false;
    	return compact('success');
    }
}
