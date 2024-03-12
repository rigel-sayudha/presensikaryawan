<?php

namespace App\Livewire\Pages\Attendance;

use App\Models\Attendance;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.pages.attendance.index', [
            'datas' => Attendance::get()
        ]);
    }
}
