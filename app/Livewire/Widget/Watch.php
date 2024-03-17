<?php

namespace App\Livewire\Widget;

use Livewire\Component;

class Watch extends Component
{
    public $currentTime;

    public function mount()
    {
        $this->currentTime = now()->toTimeString();
    }
    public function render()
    {
        return view('livewire.widget.watch');
    }
}

