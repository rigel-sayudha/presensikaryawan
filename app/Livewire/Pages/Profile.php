<?php

namespace App\Livewire\Pages;

use App\Livewire\Forms\UserForm;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    public UserForm $form;
    public User $user;

    public function mount(){
        $user = User::find(Auth::id());
        $this->user = $user;
        $this->form->setUser($user);
    }

    public function simpan(){
        $this->form->update();

        $this->mount();
        $this->alert('success', 'Profile user berhasil diubah');
    }

    public function render()
    {
        return view('livewire.pages.profile');
    }
}
