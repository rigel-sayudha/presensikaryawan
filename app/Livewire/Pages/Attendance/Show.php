<?php

namespace App\Livewire\Pages\Attendance;

use App\Models\Attendance;
use Livewire\Attributes\On;
use Livewire\Component;

class Show extends Component
{
    public ?Attendance $attendance;

    #[On('showAttendance')]
    public function showAttendance(Attendance $attendance)
    {
        $this->attendance = $attendance;
    }

    public function resetShow()
    {
        $this->attendance = null;
    }

    public function render()
    {
        return view('livewire.pages.attendance.show');
    }
}
