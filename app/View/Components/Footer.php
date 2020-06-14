<?php

namespace App\View\Components;

use App\Main;
use Illuminate\View\Component;

class Footer extends Component
{
    public $footer;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->footer = Main::where('type', 'footer')->first();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.footer', [
            'footer' => $this->footer
        ]);
    }
}
