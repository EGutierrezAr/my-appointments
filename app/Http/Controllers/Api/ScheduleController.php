<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Interfaces\ScheduleServiceInterface;

use App\WorkDay;
use Carbon\Carbon;

class ScheduleController extends Controller
{
    public function hours(Request $request, ScheduleServiceInterface $scheduleService)
    {
        $rules =[
            'date'=>'required|date_format:"Y-m-d"',
            'doctor_id'=> 'required|exists:users,id'
        ];

        //$this->validate($request, $rules); //Se puede sobre escribir en veriones mas recientes de laravel
        $request->validate($rules);
 
        $date = $request->input('date');
        $doctorId = $request->input('doctor_id');  

        return $scheduleService->getAvailableIntervals($date, $doctorId);
    }

    private function getIntervals($start, $end){
        $start = new Carbon($start);
        $end = new Carbon($end);

        $intervals =[];
        while($start < $end){
            $interval =[];

            $interval['start'] = $start->format('g:i A');
            $start->addMinutes(30);
            $interval['end'] = $start->format('g:i A');

            $intervals []= $interval;
        }
        return $intervals;
    }
}
