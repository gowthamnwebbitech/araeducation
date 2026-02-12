<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class ApplicationFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    public function __construct($details)
    {
        $this->details = $details;
    }

    public function build()
    {
        $email = $this->subject($this->details['mail_subject'])
                      ->view('emails.application_form');

        if (isset($this->details['file'])) {
            $email->attach(Storage::disk('public')->path($this->details['file']));
        }

        return $email;
    }
}

