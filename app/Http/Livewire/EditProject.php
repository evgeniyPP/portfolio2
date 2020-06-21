<?php

namespace App\Http\Livewire;

use App\Project;
use Livewire\Component;

class EditProject extends Component
{
    public $projects;
    public $selectedName;
    public $selected;

    public $name;
    public $stack;
    public $description;
    public $github_link;
    public $preview_link;
    public $image_url;
    public $order;

    public function mount()
    {
        $this->projects = Project::all();
        $this->selectedName = $this->projects[0]->name;
        $this->selected = $this->projects[0];
        $this->name = $this->selectedName;
        $this->stack = $this->selected->stack;
        $this->description = $this->selected->description;
        $this->github_link = $this->selected->github_link;
        $this->preview_link = $this->selected->preview_link;
        $this->image_url = $this->selected->image_url;
        $this->order = $this->selected->order;
    }

    public function updatedSelectedName()
    {
        $this->selected = $this->projects->where('name', $this->selectedName)->first();
        $this->name = $this->selectedName;
        $this->stack = $this->selected->stack;
        $this->description = $this->selected->description;
        $this->github_link = $this->selected->github_link;
        $this->preview_link = $this->selected->preview_link;
        $this->image_url = $this->selected->image_url;
        $this->order = $this->selected->order;
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
            'stack' => 'required|string|max:255',
            'github_link' => 'required|url|max:255',
            'preview_link' => 'required|url|max:255',
            'image_url' => 'required|string|max:255',
            'description' => 'required|string|min:5',
            'order' => 'required|numeric|min:1|max:12',
        ]);
        $this->selected->update($data);
        $this->redirect(route('admin.edit'));
    }


    public function render()
    {
        return view('admin.edit.forms.project');
    }
}
