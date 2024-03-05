<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email = "admin@absensimagang.com";
    public $password = "admin123";

    public function login(){
        $valid = $this->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($valid)) {
            $user = Auth::user();
            $this->redirect($user->redirect_to, navigate:true);
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
