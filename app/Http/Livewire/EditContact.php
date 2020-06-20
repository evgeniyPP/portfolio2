<?php

namespace App\Http\Livewire;

use App\Contact;
use Livewire\Component;

class EditContact extends Component
{
    public $contacts;
    public $selectedName;
    public $selected;

    public $link;
    public $text;

    public function mount()
    {
        $this->contacts = Contact::all();
        $this->selectedName = $this->contacts[0]->name;
        $this->selected = $this->contacts[0];
        $this->link = $this->selected->link;
        $this->text = $this->selected->text;
    }

    public function updatedSelectedName()
    {
        $this->selected = $this->contacts->where('name', $this->selectedName)->first();
        $this->link = $this->selected->link;
        $this->text = $this->selected->text;
    }

    public function render()
    {
        return view('admin.edit.forms.contact');
    }
}
