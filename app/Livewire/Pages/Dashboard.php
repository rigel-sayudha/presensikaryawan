<?php

namespace App\Livewire\Pages;

use App\Models\Attendance;
use Livewire\Component;

class Dashboard extends Component
{
    public $no = 1;

    protected $listeners = ['reload' => '$refresh'];

    public function render()
    {
        return view('livewire.pages.dashboard');
    }
}
