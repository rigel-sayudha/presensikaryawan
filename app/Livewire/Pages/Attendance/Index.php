<?php

namespace App\Livewire\Pages\Attendance;

use App\Models\Attendance;
use Livewire\Component;

class Index extends Component
{
    public $no = 1;
    public $date;
    public $search;
    public $withActions = true;

    protected $listeners = ['reload' => '$refresh'];

    public function render()
    {
        return view('livewire.pages.attendance.index', [
            'datas' => Attendance::when($this->search, function($q){
                $q->whereHas('user', function($w){
                    $w->where('name', 'like', "%{$this->search}%");
                });
            })->when($this->date, fn($q) => $q->where('date', $this->date))->orderBy('date')->get()
        ]);
    }
}
