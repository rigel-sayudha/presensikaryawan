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

    #[Validate('max:2048', message:"Ukuran :attribute terlalu besar")]
    public $photo;
    public $role;

    public function setUser(User $user){
        $this->user = $user;

        $this->name = $user->name;
        $this->email = $user->email;
        $this->school = $user->school;
        $this->nis = $user->nis;
        $this->phone = $user->phone;

        $this->role = $user->getRoleNames()->first();
    }

    public function store(){
        $valid = $this->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'school' => 'required',
            'nis' => 'required',
            'phone' => 'required',
            'role' => 'required',
        ]);

        if ($this->photo) {
            $filename = $this->photo->hashName('user');
            $this->photo->store();
            $valid['photo'] = $filename;
        }

        $user = User::create($valid);
        $user->assignRole($this->role);

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
            'role' => 'required',
        ]);

        if ($this->photo) {
            $this->validate([
                'photo' => 'required|max:2048'
            ]);

            $filename = $this->photo->hashName('user');
            if(Storage::put('user', $this->photo)){
                $valid['photo'] = $filename;
            }
            else{
                if($this->user->photo) Storage::delete($this->user->photo);
            }
        }

        if ($this->password) {
            $valid['password'] = Hash::make($this->password);
        }

        $this->user->update($valid);
        $this->user->syncRoles($this->role);

        $this->reset();
    }
}
