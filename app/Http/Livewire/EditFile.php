<?php

namespace App\Http\Livewire;

use App\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditFile extends Component
{
    use WithFileUploads;

    public $files;
    public $selectedName;
    public $selected;

    public $name;
    public $filename;

    public $isAuth;

    public function mount()
    {
        $this->files = File::all();
        $this->selectedName = $this->files[0]->name;
        $this->selected = $this->files[0];
        $this->name = $this->selectedName;
        $this->filename = $this->selected->filename;
        $this->isAuth = auth()->check();
    }

    public function updatedSelectedName()
    {
        $this->selected = $this->files->where('name', $this->selectedName)->first();
        $this->name = $this->selectedName;
        $this->filename = $this->selected->filename;
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required|string|min:2|max:255',
            'filename' => 'required|file',
        ]);

        if (!$this->isAuth) {
            return;
        }

        $filename = $this->filename->store('/', 'public');

        $this->selected->update([
            'name' => $this->name,
            'filename' => $filename,
        ]);

        $this->redirect(route('admin.edit'));
    }

    public function render()
    {
        return view('admin.edit.forms.file');
    }
}
