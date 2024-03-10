<?php

namespace App\Livewire\Pages\Attendance;

use Livewire\Component;
use App\Models\Attendance; 
use RealRashid\SweetAlert\Facades\Alert;

class Mine extends Component
{
    public $searchDate;
    public $mine;

  
    public function render()
    {
        // Melakukan pencarian data absensi untuk pengguna yang sedang login berdasarkan tanggal
        $this->mine = Attendance::where('user_id', auth()->user()->id)
                                ->get();

        return view('livewire.pages.attendance.mine', [
            'mine' => $this->mine
        ]);
    }


}
