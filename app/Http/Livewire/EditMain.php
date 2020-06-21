<?php

namespace App\Http\Livewire;

use App\Main;
use Livewire\Component;

class EditMain extends Component
{
    public $mains;
    public $selectedName;
    public $selected;

    public $name;
    public $text;

    public function mount()
    {
        $this->mains = Main::all();
        $this->selectedName = $this->mains[0]->name;
        $this->selected = $this->mains[0];
        $this->name = $this->selectedName;
        $this->text = $this->selected->text;
    }

    public function updatedSelectedName()
    {
        $this->selected = $this->mains->where('name', $this->selectedName)->first();
        $this->name = $this->selectedName;
        $this->text = $this->selected->text;
    }

    public function submit()
    {
        $this->selected->update([
            'name' => $this->name,
            'text' => $this->text,
        ]);
        $this->redirect(route('admin.edit'));
    }

    public function render()
    {
        return view('admin.edit.forms.main');
    }
}
