<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->from($address = 'fordwarder@nice-cg.com', $name = 'NiceCG')
        //             ->subject($this->data['company'].' - '.str_replace(',',"、",$this->data['checkedQna']))
        //             ->view('email_contact_form')
        //             ->with('data', $this->data);
        return $this->from($address = 'no-reply@demomailtrap.com', $name = 'Vein')
                    ->subject($this->data['company'].' - ')
                    ->view('email_contact_form')
                    ->with('data', $this->data);
                    // ->attach(public_path($this->fixFileName));
        // return $this->view('view.name');
    }
}