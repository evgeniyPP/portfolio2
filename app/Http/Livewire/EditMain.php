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

    public $isAuth;

    public function mount()
    {
        $this->mains = Main::all();
        $this->selectedName = $this->mains[0]->name;
        $this->selected = $this->mains[0];
        $this->name = $this->selectedName;
        $this->text = $this->selected->text;
        $this->isAuth = auth()->check();
    }

    public function updatedSelectedName()
    {
        $this->selected = $this->mains->where('name', $this->selectedName)->first();
        $this->name = $this->selectedName;
        $this->text = $this->selected->text;
    }

    public function submit()
    {
        $data = $this->validate([
            'name' => 'required|string|min:2|max:255',
            'text' => 'required|string|min:5',
        ]);

        if (!$this->isAuth) {
            return;
        }

        $this->selected->update($data);
        $this->redirect(route('admin.edit'));
    }

    public function render()
    {
        return view('admin.edit.forms.main');
    }
}
