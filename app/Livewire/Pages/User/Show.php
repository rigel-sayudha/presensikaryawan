<?php

namespace App\Livewire\Pages\User;

use App\Models\User;
use Livewire\Component;

class Show extends Component
{
    public $no = 1;
    public User $user;

    protected $listeners = ['reload' => '$refresh'];

    public function mount(User $user){
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.pages.user.show');
    }
}
