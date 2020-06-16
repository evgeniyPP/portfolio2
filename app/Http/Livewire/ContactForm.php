<?php

namespace App\Http\Livewire;

use App\Mail\ContactLetter;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public $name = '';
    public $contact = '';
    public $message = '';

    public function submit()
    {
        Mail::to('aysanru@gmail.com')
            ->queue(new ContactLetter($this->name, $this->contact, $this->message));
        $this->clearForm();
    }

    public function render()
    {
        return view('components.contact-form');
    }

    private function clearForm()
    {
        $this->name = '';
        $this->contact = '';
        $this->message = '';
    }
}
