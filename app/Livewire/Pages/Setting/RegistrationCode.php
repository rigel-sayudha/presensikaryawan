<?php

namespace App\Livewire\Pages\Setting;

use Illuminate\Support\Str;
use Livewire\Component;

class RegistrationCode extends Component
{
    public $kode;

    public function generateKode(){
        $this->kode = implode('', [
            Str::substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 3),
            rand(100, 999)
        ]);
    }

    public function mount(){
        $this->generateKode();
    }

    public function render()
    {
        return view('livewire.pages.setting.registration-code');
    }
}
