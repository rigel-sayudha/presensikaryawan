<?php

namespace App\Livewire\Auth;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $kodeRegistrasi;
    public $validKodeRegistrasi;

    public function register(){
        $valid = $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'kodeRegistrasi' => 'required|in:'.$this->validKodeRegistrasi,
        ]);
        $valid['active'] = true;
        $valid['password'] = Hash::make($this->password);
        $user = User::create($valid);
        $user->assignRole('siswa');

        if (Auth::loginUsingId($user->id)) {
            $this->redirect($user->redirect_to, navigate:true);
        }
    }

    public function mount(){
        $this->validKodeRegistrasi = Setting::where('name', 'registration_code')->first()?->value;
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
