<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Sendmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;
    public function __construct($data)
    {
        //
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $name = 'Global Talent Company';
        $address = env('MAIL_FROM_ADDRESS');
        $subject = 'Email Verification';

        return $this->view('mail.email')
            ->from($address, $name)
            ->replyTo($address, $name)
            ->subject($subject)
            ->with(['data' => $this->data]);
    }
}
