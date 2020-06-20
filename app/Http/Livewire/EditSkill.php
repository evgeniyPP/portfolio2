<?php

namespace App\Http\Livewire;

use App\Skill;
use Livewire\Component;

class EditSkill extends Component
{
    public $skills;
    public $selectedName;
    public $selected;

    public $type;
    public $rank;
    public $logo;

    public function mount()
    {
        $this->skills = Skill::all();
        $this->selectedName = $this->skills[0]->name;
        $this->selected = $this->skills[0];
        $this->type = $this->selected->type;
        $this->rank = $this->selected->rank;
        $this->logo = $this->selected->logo;
    }

    public function updatedSelectedName()
    {
        $this->selected = $this->skills->where('name', $this->selectedName)->first();
        $this->type = $this->selected->type;
        $this->rank = $this->selected->rank;
        $this->logo = $this->selected->logo;
    }

    public function render()
    {
        return view('admin.edit.forms.skill');
    }
}
