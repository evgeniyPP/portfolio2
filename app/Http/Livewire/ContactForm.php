<?php

namespace App\Http\Livewire;

use App\Mail\ContactLetter;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public $name = '';
    public $contact = '';
    public $text = '';

    private function clearForm()
    {
        $this->name = '';
        $this->contact = '';
        $this->text = '';
    }

    public function submit()
    {
        $data = $this->validate([
            'name' => 'required|string|min:2|max:255',
            'contact' =>
            [
                'required',
                'regex:/^.+@.+\..+$|\+?\d{11}|\d{10}|\+?\d-\d{3}-\d{3}-\d{2}-\d{2}|\+?\d \d{3} \d{3} \d{2} \d{2}$/'
            ],
            'text' => 'required|string|min:10',
        ]);
        Mail::to('aysanru@gmail.com')
            ->queue(new ContactLetter($data));
        $this->clearForm();
    }

    public function render()
    {
        return view('components.contact-form');
    }
}
