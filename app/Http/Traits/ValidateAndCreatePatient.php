<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Validator;
use App\User;

trait ValidateAndCreatePatient
{
    protected function validator(array $data)
    {
        return Validator::make($data, User::$rules);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::createPatient($data);
    }
}
