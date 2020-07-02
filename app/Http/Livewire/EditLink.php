<?php

namespace App\Http\Livewire;

use App\Link;
use Livewire\Component;

class EditLink extends Component
{
    public $links;
    public $selectedName;
    public $selected;

    public $name;
    public $link;
    public $description;
    public $logo;

    public $isAuth;

    public function mount()
    {
        $this->links = Link::all();
        $this->selectedName = $this->links[0]->name;
        $this->selected = $this->links[0];
        $this->name = $this->selectedName;
        $this->link = $this->selected->link;
        $this->description = $this->selected->description;
        $this->logo = $this->selected->logo;
        $this->isAuth = auth()->check();
    }

    public function updatedSelectedName()
    {
        $this->selected = $this->links->where('name', $this->selectedName)->first();
        $this->name = $this->selectedName;
        $this->link = $this->selected->link;
        $this->description = $this->selected->description;
        $this->logo = $this->selected->logo;
    }

    public function delete()
    {
        if (!$this->isAuth) {
            return;
        }

        $this->selected->delete();
        $this->redirect(route('admin.edit'));
    }

    public function submit()
    {
        $data = $this->validate([
            'name' => 'required|string|min:2|max:255',
            'link' => 'required|url|max:255',
            'logo' => 'required|string|regex:/^fa. fa-.+$/',
            'description' => 'required|string|min:5',
        ]);

        if (!$this->isAuth) {
            return;
        }

        $this->selected->update($data);
        $this->redirect(route('admin.edit'));
    }

    public function render()
    {
        return view('admin.edit.forms.link');
    }
}
