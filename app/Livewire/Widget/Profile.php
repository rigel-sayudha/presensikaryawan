<?php

namespace App\Livewire\Widget;

use Livewire\Component;

class Profile extends Component
{
    public function render()
    {
        return view('livewire.widget.profile', [
            'user' => auth()->user()
        ]);
    }
}
