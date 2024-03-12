<?php

namespace App\Livewire\Pages\Attendance;

use App\Models\Attendance;
use Livewire\Attributes\On;
use Livewire\Component;

class Actions extends Component
{
    #[On('deleteAttendance')]
    public function deleteAttendance(Attendance $attendance)
    {
        $attendance->delete();
        $this->dispatch('reload');
    }

    public function render()
    {
        return view('livewire.pages.attendance.actions');
    }
}
