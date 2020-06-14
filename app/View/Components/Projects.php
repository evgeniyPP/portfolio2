<?php

namespace App\View\Components;

use App\Project;
use Illuminate\View\Component;

class Projects extends Component
{
    public $projects;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->projects = Project::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.projects');
    }
}
