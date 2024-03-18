<?php

namespace App\Livewire\Widget;

use Livewire\Component;

class Watch extends Component
{
    public $waktu;
    public $tanggal;

    public function mount()
    {
        $this->waktu = now()->format('Y-m-d');
        $this->tanggal = now()->format('H:i:s');
    }
    public function render()
    {
        return view('livewire.widget.watch');
    }
}
