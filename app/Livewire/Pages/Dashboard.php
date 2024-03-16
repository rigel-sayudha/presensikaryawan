<?php

namespace App\Livewire\Pages;

use App\Models\Attendance;
use Livewire\Component;

class Dashboard extends Component
{
    public $no = 1;

    protected $listeners = ['reload' => '$refresh'];

    public function approveAttendance(Attendance $attendance)
    {
        $newStatus = $attendance->approved;
        $attendance->update([
            'approved' => !$newStatus
        ]);
    }

    public function render()
    {
        return view('livewire.pages.dashboard', [
            'datas' => Attendance::where('date', date('Y-m-d'))->where('approved', false)->get()
        ]);
    }
}
