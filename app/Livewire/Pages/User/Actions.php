<?php

namespace App\Livewire\Pages\User;

use App\Livewire\Forms\UserForm;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\On;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Actions extends Component
{
    public $show = false;
    public $mode = "create";
    public UserForm $form;

    #[On('createUser')]
    public function createUser(){
        $this->show = true;
        $this->mode = "create";
    }

    #[On('updateUser')]
    public function updateUser(User $user){
        $this->show = true;
        $this->form->setUser($user);
        $this->mode = "update";
    }

    #[On('deleteUser')]
    public function deleteUser(User $user){
        $user->delete();
        $this->dispatch('reload');
    }

    #[On('resetPassword')]
    public function resetPassword(User $user){
        $user->update([
            'password' => Hash::make('password')
        ]);
        $this->dispatch('reload');
    }

    public function simpan(){
        if (isset($this->form->user)) {
            $this->form->update();
        }
        else{
            $this->form->store();
        }

        $this->show = false;
        $this->dispatch('reload');
    }

    public function render()
    {
        return view('livewire.pages.user.actions', [
            'roles' => Role::pluck('name')
        ]);
    }
}
