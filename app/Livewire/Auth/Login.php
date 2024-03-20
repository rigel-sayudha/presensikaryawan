<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Login extends Component
{
    use LivewireAlert;

    public $email;
    public $password;

    public function login(){
        $valid = $this->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $valid['active'] = true;

        if (Auth::attempt($valid)) {
            $user = Auth::user();
            $this->flash('success', 'Berhasil login');
            $this->redirect($user->redirect_to, navigate:true);
        }
        else{
            $this->alert('error', 'Email atau password salah');
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
