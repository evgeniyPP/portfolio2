<?php

namespace App\View\Components;

use App\Link;
use Illuminate\View\Component;

class Links extends Component
{
    public $links;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Link $link)
    {
        $this->links = $link::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.links', [
            'links' => $this->links
        ]);
    }
}
