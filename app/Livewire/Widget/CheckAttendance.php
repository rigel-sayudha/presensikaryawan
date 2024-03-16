<?php

namespace App\Livewire\Widget;

use App\Livewire\Forms\AttendanceForm;
use App\Models\Attendance;
use Livewire\Component;

class CheckAttendance extends Component
{
    public $show = false;
    public $tanggal;
    public AttendanceForm $form;

    protected $listeners = ['reload' => '$refresh'];

    public function resetAbsensi(){
        $this->show = false;
    }

    public function mount(){
        $this->tanggal = date('Y-m-d');
    }

    public function checkIn(){
        $this->form->user_id = auth()->id();
        $this->form->date = now()->format('Y-m-d');
        $this->form->in = now()->format('H:i:s');

        $this->form->store();

        $this->dispatch('reload');
    }

    public function checkOut(){
        $this->validate([
            'form.note' => 'required',
        ]);

        $this->form->out = now()->format('H:i:s');
        $this->form->store();

        $this->dispatch('reload');
        $this->show = false;
    }

    public function render()
    {
        $attendance = Attendance::where('date', $this->tanggal)->where('user_id', auth()->id())->first() ?? null;

        if ($attendance) {
            $this->form->setAttendance($attendance);
        }

        return view('livewire.widget.check-attendance', [
            'attendance' => $attendance
        ]);
    }
}
