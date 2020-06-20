<?php

namespace App\Http\Livewire;

use App\Link;
use Livewire\Component;

class EditLink extends Component
{
    public $links;
    public $selectedName;
    public $selected;

    public $link;
    public $description;
    public $logo;

    public function mount()
    {
        $this->links = Link::all();
        $this->selectedName = $this->links[0]->name;
        $this->selected = $this->links[0];
        $this->link = $this->selected->link;
        $this->description = $this->selected->description;
        $this->logo = $this->selected->logo;
    }

    public function updatedSelectedName()
    {
        $this->selected = $this->links->where('name', $this->selectedName)->first();
        $this->link = $this->selected->link;
        $this->description = $this->selected->description;
        $this->logo = $this->selected->logo;
    }

    public function render()
    {
        return view('admin.edit.forms.link');
    }
}
