<?php

namespace App\Livewire\Pages\Attendance;

use Livewire\Component;
use App\Models\Attendance; 
use RealRashid\SweetAlert\Facades\Alert;

class Mine extends Component
{
    public $searchDate;
    public $mine;
    public $no = 1;
    public $date;
    public $search;
  
    public function render()
    {
          $this->mine = Attendance::where('user_id', auth()->user()->id)
                        ->when($this->search, function($q) {
                            $q->whereHas('user', function($w) {
                                $w->where('name', 'like', "%{$this->search}%");
                            });
                        })
                        ->when($this->date, function($q) {
                            $q->whereDate('date', $this->date);
                        })
                        ->orderBy('date')
                        ->get();

        return view('livewire.pages.attendance.mine', [
            'mine' => $this->mine
        ]);
    }


}
