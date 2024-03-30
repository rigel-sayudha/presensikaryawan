<?php

namespace App\Livewire\Pages\Attendance;

use Livewire\Component;
use App\Models\Attendance;
use RealRashid\SweetAlert\Facades\Alert;

class Mine extends Component
{
    public $no = 1;
    public $date;

    public function render()
    {
        $datas = Attendance::where('user_id', auth()->user()->id)
        ->when($this->date, function($q) {
            $q->whereDate('date', $this->date);
        })
        ->orderBy('date')
        ->get();

        return view('livewire.pages.attendance.mine', [
            'datas' => $datas
        ]);
    }
}
