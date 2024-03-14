<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Home extends Component
{
     public function mount()
    {    
        $this->user = Auth::user();
    }
    public function render()
    {
        return view('livewire.pages.home');
    }
}
