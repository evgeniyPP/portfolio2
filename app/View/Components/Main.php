<?php

namespace App\View\Components;

use App\File;
use Illuminate\View\Component;

class Main extends Component
{
    public $avatar;
    public $resume_docx;
    public $resume_pdf;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->avatar = File::where('name', 'Фотография')->first()->url();
        $this->resume_docx = File::where('name', 'Резюме DOCX')->first()->url();
        $this->resume_pdf = File::where('name', 'Резюме PDF')->first()->url();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.main');
    }
}
