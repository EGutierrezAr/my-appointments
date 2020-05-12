<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;
use DB;
use Cache;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   //Despues hacer un repote de created_at
        // 1=Sunday 2=Monday 3=Tuesday 4=Wednesday 5=Thursday 6=Friday 7=Saturday
        //$day = 24;
        $minutes = 60 ;
        $seconds = $minutes * 60; 
        //$seconds = 10; 
        $appointmentsByDay = Cache::remember('appointments_by_day', $seconds, function () {
            $results = Appointment::select([
                        DB::raw('DAYOFWEEK(scheduled_date) as day'),
                        DB::raw('COUNT(*) as count')
                    ])
                    ->groupBy(DB::raw('DAYOFWEEK(scheduled_date)'))
                    ->where('status','Confirmada')
                    ->get(['day','count'])
                    ->mapWithKeys(function ($item) {
                        return [$item['day'] => $item['count']];
                    })->toArray();

                    $counts =[];
                    for ($i=1; $i<=7; ++$i){
                        if(array_key_exists($i, $results))
                            $counts[]= $results[$i];
                        else
                            $counts[]= 0;
                    }

                return $counts;
        });
        
        return view('home', compact('appointmentsByDay'));
    }
}
