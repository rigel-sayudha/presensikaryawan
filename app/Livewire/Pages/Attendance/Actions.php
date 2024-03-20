<?php

namespace App\Livewire\Pages\Attendance;

use App\Livewire\Forms\AttendanceForm;
use App\Models\Attendance;
use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On;
use Livewire\Component;

class Actions extends Component
{
    use LivewireAlert;
    public ?Attendance $attendance;
    public AttendanceForm $form;

    #[On('approveAttendance')]
    public function approveAttendance(Attendance $attendance)
    {
        $newStatus = $attendance->approved;
        $attendance->update([
            'approved' => !$newStatus
        ]);
        $this->dispatch('reload');
        $this->alert('success', 'Status approval berhasil diperbarui');
    }

    #[On('deleteAttendance')]
    public function deleteAttendance(Attendance $attendance)
    {
        $attendance->delete();
        $this->dispatch('reload');
        $this->alert('success', 'Absensi berhasil dihapus');
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

    public function simpan()
    {
        if (isset($this->attendance)) {
            $this->form->store();
        }
        $this->dispatch('reload');
        $this->resetAttendance();
        $this->alert('success', 'Absensi berhasil ubah');
    }

    public function render()
    {
        return view('livewire.pages.attendance.actions', [
            'users' => User::pluck('name', 'id'),
        ]);
    }
}
