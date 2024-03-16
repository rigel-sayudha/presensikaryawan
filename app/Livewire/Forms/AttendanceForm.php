<?php

namespace App\Livewire\Forms;

use App\Models\Attendance;
use Livewire\Attributes\Validate;
use Livewire\Form;

class AttendanceForm extends Form
{
    public $date = "";
    public $user_id = "";
    public $in = "";
    public $out = null;
    public $note = "";
    public $approved = false;

    public ?Attendance $attendance;

    public function setAttendance(Attendance $attendance){
        $this->attendance = $attendance;

        $this->date = $attendance->date;
        $this->user_id = $attendance->user_id;
        $this->in = $attendance->in;
        $this->out = $attendance->out;
        $this->note = $attendance->note;
        $this->approved = $attendance->approved;
    }

    public function store(){
        $this->validate([
            'date' => 'required',
            'user_id' => 'required',
            'in' => 'required',
            'out' => '',
            'note' => '',
            'approved' => '',
        ]);

        Attendance::updateOrCreate([
            'date' => $this->date,
            'user_id' => $this->user_id,
        ], [
            'in' => $this->in,
            'out' => $this->out,
            'note' => $this->note,
            'approved' => $this->approved,
        ]);
        $this->reset();
    }
}
