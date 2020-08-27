<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;


use App\User;
use App\Appointment;

class MessageReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $userName;
    public $doctorName;
    public $appointment;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(String $subject, String $userName, String $doctorName, Appointment $appointment)
    {
        $this->subject = $subject;
        $this->userName = $userName;
        $this->doctorName = $doctorName;
        $this->appointment = $appointment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->subject)->view('emails.message-received');
    }
}
