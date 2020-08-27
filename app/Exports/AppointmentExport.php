<?php

namespace App\Exports;

use App\Appointment;
use Maatwebsite\Excel\Concerns\FromCollection;

class AppointmentExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Appointment::all();
    }
}
