<?php

namespace App\Livewire\Pages\Attendance;

use App\Models\Attendance;
use Livewire\Component;

class Index extends Component
{
    public $no = 1;

    public function approveAttendance(Attendance $attendance)
    {
        $newStatus = $attendance->approved;
        $attendance->update([
            'approved' => !$newStatus
        ]);
    }

    public function render()
    {
        return view('livewire.pages.attendance.index', [
            'datas' => Attendance::orderBy('date')->get()
        ]);
    }
}
