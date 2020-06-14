<?php

namespace App\View\Components;

use App\Contact;
use Illuminate\View\Component;

class Contacts extends Component
{
    private $contacts;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->contacts = Contact::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.contacts', [
            'contacts' => $this->contacts
        ]);
    }
}
