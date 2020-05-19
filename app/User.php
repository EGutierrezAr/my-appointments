<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

use App\Notifications\ResetPasswordNotification;


use Illuminate\Console\Command;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','cedula','address','phone','role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','pivot',
        'email_verified_at','created_at','updated_at'
    ];

    public static $rules = [
        'name' => 'required', 'string', 'max:255',
        'email' => 'required', 'string', 'email', 'max:255', 'unique:users',
        'password' => 'required', 'string', 'min:8', 'confirmed',
    ];

    public static function createPatient (array $data)
    {
        return self::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'patient'
        ]);
    }

    //$user->specialties
    public function specialties()
    {
        return $this->belongsToMany(Specialty::class)->withTimestamps();
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function scopePatients($query){
        return $query->where('role','patient');
    }

    public function scopeDoctors($query){
        return $query->where('role','doctor');
    }

    //User->asPatientAppointments ->requestedAppointmnets
    //User->asDoctorAppointments ->attendedAppointments
    public function asDoctorAppointments()
    {
        return $this->hasMany(Appointment::class, 'doctor_id');
    }

    public function attendedAppointments()
    {
        return $this->asDoctorAppointments()->where('status','Atendida');
    }
    public function cancelledAppointments()
    {
        return $this->asDoctorAppointments()->where('status','Cancelada');
    }

        public function asPatientAppointments()
    {
        return $this->hasMany(Appointment::class, 'patient_id');
    }

    public function sendFCM($message){
        $this->info('Voy 1.1');

        if (!$this->device_token)
            return;
        
        $this->info('Voy 1.2');

        return fcm()->to([
            $this->device_token
            ])->notification([
                'title' => config('app_name'),
                'body' => $message
            ])->send();

            $this->info('Voy 1.3');
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }
}
