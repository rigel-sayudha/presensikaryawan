<?php

namespace App\Livewire\Forms;

use App\Models\Attendance;
use Livewire\Attributes\Validate;
use Livewire\Form;

class AttendanceForm extends Form
{
    public $date = "";
    public $user_id = "";
    public $in = "08:00";
    public $out = "17:00";
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
        $valid = $this->validate([
            'date' => 'required',
            'user_id' => 'required',
            'in' => 'required',
            'approved' => 'required',
        ]);

        Attendance::create($valid);
        $this->reset();
    }

    public function update(){
        $valid = $this->validate([
            'date' => 'required',
            'user_id' => 'required',
            'in' => 'required',
            'approved' => 'required',
        ]);

        if ($this->out) {
            $valid['out'] = $this->out;
        }
        if ($this->note) {
            $valid['note'] = $this->note;
        }

        $this->attendance->update($valid);
        $this->reset();
    }
}
