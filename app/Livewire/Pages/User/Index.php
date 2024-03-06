<?php

namespace App\Livewire\Pages\User;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public $cari;

    public function render()
    {
        return view('livewire.pages.user.index', [
            'datas' => User::when($this->cari, function($q){
                $q->where('name', 'like', "%{$this->cari}%")
                ->orWhere('email', 'like', "%{$this->cari}%");
            })->get()
        ]);
    }
}
