<?php

namespace App\Livewire\Widget;

use App\Models\Attendance;
use App\Models\User;
use Illuminate\Support\Number;
use Livewire\Component;

class CountAttendance extends Component
{
    protected $listeners = ['reload' => '$refresh'];
    public function render()
    {
        $attendanceCount = Attendance::where('date', date('Y-m-d'))->count();
        $userCount = User::where('active', true)->role('siswa')->count();

        $percentage = ($attendanceCount / $userCount) * 100;

        return view('livewire.widget.count-attendance', [
            'attendanceCount' => $attendanceCount,
            'userCount' => $userCount,
            'percentage' => $percentage,
        ]);
    }
}
