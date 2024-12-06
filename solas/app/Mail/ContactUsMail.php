<?php

namespace App\Mail;

use App\Models\Setting;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactUsMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $name, $email, $subject, $contactMessage;
    public function __construct($name, $email, $subject, $contactMessage)
    {
        $this->name = $name;
        $this->email = $email;
        $this->subject = $subject;
        $this->contactMessage = $contactMessage;
    }


    public function build()
    {
        $settings = Setting::first();

        return $this->to($settings->email, $settings->name)
            ->from($this->email, $this->name)
            ->subject($this->subject)
            ->view('emails.contact-us');
    }
}
