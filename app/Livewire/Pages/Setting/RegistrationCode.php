<?php

namespace App\Livewire\Pages\Setting;

use App\Models\Setting;
use Illuminate\Support\Str;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class RegistrationCode extends Component
{
    use LivewireAlert;
    public $kode;

    public function generateKode(){
        $this->kode = implode('', [
            Str::substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 3),
            rand(100, 999)
        ]);

        $this->simpan();
    }

    public function mount(){
        $this->kode = Setting::where('name', 'registration_code')->first()->value ?? "...";
    }

    public function simpan(){
        Setting::updateOrCreate([
            'name' => 'registration_code',
        ],[
            'value' => $this->kode
        ]);

        $this->alert('success', 'Kode registrasi berhasil diubah');
    }

    public function render()
    {
        return view('livewire.pages.setting.registration-code');
    }
}
