<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
   	public function store()
   	{
   		request()->validate([
   			'name' => 'required',
   			'email' => 'required|email',
   			'subject' => 'required',
   			'content' => 'required|min:3'
   		]);

   		Mail::to('eeggaa@gmail.com')->send(new MessageReceived);

   		return 'Mensaje enviado';
   	}
}
