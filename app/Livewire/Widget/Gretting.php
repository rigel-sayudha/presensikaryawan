<?php

namespace App\Livewire\Widget;

use Livewire\Component;

class Gretting extends Component
{
    public function render()
    {
        return view('livewire.widget.gretting', [
            'user' => auth()->user()
        ]);
    }
}
