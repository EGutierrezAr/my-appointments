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
    	User::create([
    		'name' => 'Emiliano Gutiérrez',
	        'email' => 'eeggaa19@hotmail.com',
	        'password' => bcrypt('123123'), // password
	        'cedula' => '12345678',
	        'address' => '',
	        'phone' => '',
	        'role' => 'admin'
    	]);

        factory(User::class, 50)->create();
    }
}
