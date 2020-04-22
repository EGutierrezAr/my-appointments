<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
    	User::create([
    		'name' => 'Emiliano Gutiérrez A',
	        'email' => 'admin@hotmail.com',
	        'password' => bcrypt('123123'), // password
	        'role' => 'admin'
    	]);

        // 2
        User::create([
            'name' => 'Emiliano Gutiérrez P',
            'email' => 'patient@hotmail.com',
            'password' => bcrypt('123123'), // password
            'role' => 'patient'
        ]);

        // 3
        User::create([
            'name' => 'Emiliano Gutiérrez D',
            'email' => 'doctor@hotmail.com',
            'password' => bcrypt('123123'), // password
            'role' => 'doctor'
        ]);

        factory(User::class, 50)->states('patient')->create();
    }
}
