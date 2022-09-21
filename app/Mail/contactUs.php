<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class contactUs extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data=[])
    {
        //
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->phone_number = $data['phone_number'];
        $this->subject = $data['subject'];
        $this->user_message = $data['user_message'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('out_site.layout.contact_us_template')
        ->with('name',$this->name)
        ->with('email',$this->email)
        ->with('phone_number',$this->phone_number)
        ->with('subject',$this->subject)
        ->with('user_message',$this->user_message);
        ;
    }
}
