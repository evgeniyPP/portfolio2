<?php

namespace App\View\Components;

use App\Main;
use Illuminate\View\Component;

class AboutMe extends Component
{
    public $data;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Main $main)
    {
        $this->data = $main::where('type', 'about_me')->first();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.about-me', [
            'title' => $this->data->name,
            'text' => nl2br($this->data->text)
        ]);
    }
}
