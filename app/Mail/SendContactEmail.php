<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendContactEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $messages = array();
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($messages = array())
    {
        //
        $this->messages = $messages;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $content = $this->messages;
        $data = [
            'firstName' => $content['firstName'],
            'lastName' => $content['lastName'],
            'email' => $content['email'],
            'message' => $content['message']
        ];
        return $this->view('emails.contact', compact('data'));
    }
}
