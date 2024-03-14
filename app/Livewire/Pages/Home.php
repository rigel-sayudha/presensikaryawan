<?php

namespace App\Livewire\Pages;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Attendance;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\Livewire\Forms\UserForm;
use Livewire\Component;

class Home extends Component
{
    public $user; 
     public function mount()
    {    
        $this->user = Auth::user();
    }
    public function render()
    {
        return view('livewire.pages.home');
    }
}
