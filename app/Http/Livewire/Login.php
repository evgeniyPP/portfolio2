<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Login extends Component
{
    public $login = '';
    public $password = '';
    public $rememberMe = false;

    public function submit()
    {
        $credentials = $this->validate([
            'login' => 'required',
            'password' => 'required',
        ]);

        if (!auth()->attempt($credentials)) {
            $this->addError('login', trans('auth.failed'));
            return;
        }

        return redirect()->intended('/admin');
    }

    public function render()
    {
        return view('login');
    }
}
