<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UserForm extends Form
{
    public ?User $user;

    public $name;
    public $email;
    public $password;
    public $school;
    public $nis;
    public $phone;
    public $photo;

    public function setUser(User $user){
        $this->user = $user;

        $this->name = $user->name;
        $this->email = $user->email;
        $this->school = $user->school;
        $this->nis = $user->nis;
        $this->phone = $user->phone;
    }

    public function store(){
        $valid = $this->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'school' => 'required',
            'nis' => 'required',
            'phone' => 'required',
        ]);

        if ($this->photo) {
            $filename = $this->photo->hashName('user');
            $this->photo->store();
            $valid['photo'] = $filename;
        }

        User::create($valid);

        $this->reset();
    }

    public function update(){
        $valid = $this->validate([
            'user' => 'required',
            'name' => 'required',
            'email' => 'required',
            'school' => 'required',
            'nis' => 'required',
            'phone' => 'required',
        ]);

        if ($this->photo) {
            $filename = $this->photo->hashName('user');
            Storage::put('user', $this->photo);
            $valid['photo'] = $filename;
        }

        if ($this->password) {
            $valid['password'] = Hash::make($this->password);
        }

        // dd($valid);

        $this->user->update($valid);

        $this->reset();
    }
}
