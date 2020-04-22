<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Appointment extends Model
{
    protected $fillable = [
    	'description',
    	'specialty_id',
    	'doctor_id',
    	'patient_id',
    	'scheduled_date',
    	'scheduled_time',
    	'type'
    ];

    // N:Appointment -> especialidad:1
    public function specialty()
    {
    	return $this->belongsTo(Specialty::class);
    }

    // N:Appointment -> doctor:1
    public function doctor()
    {
    	return $this->belongsTo(User::class);
    }
    // N:Appointment -> patient:1
    public function patient()
    {
    	return $this->belongsTo(User::class);
    }

    // Appointment hasOne 1 - 1/0 belongsTo CancelledAppointmen
    // appointment->cacellation->jsutification
    public function cancellation()
    {   
        return $this->hasOne(CancelledAppointment::class);
    }

    //accesor
    //$appointment->scheduled_time_12
    public function getScheduledTime12Attribute()
    {
    	return (new Carbon($this->scheduled_time))->format('g:i: A');
    }
}
