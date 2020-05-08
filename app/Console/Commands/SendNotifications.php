<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;

use App\Appointment;

class SendNotifications extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fcm:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Enviar menajes vía FCM';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Buscando citar médicas Confirmadas en las próximas 24 hrs.');
        //01-December -> 02-December (NO: 03-December)

        //hora actual
        //2018-12-01 15:03:18
        $now = Carbon::now();

        //scheduled_date 2018-12-02
        //scheduled_time 15:00:00 hActual -3m <= scheduled_time < hActual +3m

        $appointmentsTomorrow = $this->getAppointments24Hours($now);

        foreach ($appointmentsTomorrow as $appointment) {
            $appointment->patient->sendFCM('No olvides tu cita para mañana a esta hora!!');
            $this->info('Mensaje FCM enviado 24hrs antes al paciente (ID): '.$$appointment->patient_id);
        }

        $appointmentsNextHour = $this->getAppointmentsNextHour($now);

        foreach ($appointmentsNextHour as $appointment) {
            $appointment->patient->sendFCM('Tienes una cita en 1hora. Te esperamos!');
            $this->info('Mensaje FCM enviado 1hr antes al paciente (ID): '.$$appointment->patient_id);
        }
    }

    private function getAppointments24Hours($now)
    {
        return  Appointment::where('status','Confirmada')
            ->where('scheduled_date', $now->addDay()->toDateString())
            ->where('scheduled_time', '>=', $now->copy()->subMinutes(3)->toTimeString())
            ->where('scheduled_time', '<', $now->copy()->addMinutes(2)->toTimeString())
            ->get(['id','scheduled_date','scheduled_time','patient_id'])->toArray();
    }

    private function getAppointmentsNextHour($now)
    {
        return  Appointment::where('status','Confirmada')
            ->where('scheduled_date', $now->addHour()->toDateString())
            ->where('scheduled_time', '>=', $now->copy()->subMinutes(3)->toTimeString())
            ->where('scheduled_time', '<', $now->copy()->addMinutes(2)->toTimeString())
            ->get(['id','scheduled_date','scheduled_time','patient_id'])->toArray();
    }
}
