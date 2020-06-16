<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactLetter extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $contact;
    public $text;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $contact, $text)
    {
        $this->name = $name;
        $this->contact = $contact;
        $this->text = nl2br(htmlspecialchars($text));
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.contact-letter');
    }
}
