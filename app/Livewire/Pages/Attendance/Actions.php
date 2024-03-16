<?php

namespace App\Livewire\Pages\Attendance;

use App\Livewire\Forms\AttendanceForm;
use App\Models\Attendance;
use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;

class Actions extends Component
{
    public ?Attendance $attendance;
    public AttendanceForm $form;

    #[On('deleteAttendance')]
    public function deleteAttendance(Attendance $attendance)
    {
        $attendance->delete();
        $this->dispatch('reload');
    }

    #[On('editAttendance')]
    public function editAttendance(Attendance $attendance)
    {
        $this->attendance = $attendance;
        $this->form->setAttendance($attendance);
    }

    public function resetAttendance(){
        $this->attendance = null;
    }

    public function simpan(){
        if (isset($this->attendance)) {
            $this->form->store();
        }
        $this->dispatch('reload');
        $this->resetAttendance();
    }

    public function render()
    {
        return view('livewire.pages.attendance.actions', [
            'users' => User::pluck('name', 'id'),
        ]);
    }
}
