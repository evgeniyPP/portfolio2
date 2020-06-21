<?php

namespace App\Http\Livewire;

use App\Contact;
use Livewire\Component;

class EditContact extends Component
{
    public $contacts;
    public $selectedName;
    public $selected;

    public $name;
    public $link;
    public $text;

    public function mount()
    {
        $this->contacts = Contact::all();
        $this->selectedName = $this->contacts[0]->name;
        $this->selected = $this->contacts[0];
        $this->name = $this->selectedName;
        $this->link = $this->selected->link;
        $this->text = $this->selected->text;
    }

    public function updatedSelectedName()
    {
        $this->selected = $this->contacts->where('name', $this->selectedName)->first();
        $this->name = $this->selectedName;
        $this->link = $this->selected->link;
        $this->text = $this->selected->text;
    }

    public function delete()
    {
        $this->selected->delete();
        $this->redirect(route('admin.edit'));
    }

    public function submit()
    {
        $data = $this->validate([
            'name' => 'required|string|min:2|max:255',
            'link' => 'required|string|max:255',
            'text' => 'required|string|max:255',
        ]);
        $this->selected->update($data);
        $this->redirect(route('admin.edit'));
    }

    public function render()
    {
        return view('admin.edit.forms.contact');
    }
}
