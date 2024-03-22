<?php

namespace App\Livewire\Pages\Office;

use Livewire\Component;
use App\Models\OfficeMap;

class Item extends Component
{
    public $cari;
    
    public function render()
    {
        $datas = [];
        if ($this->cari) {
            $datas = OfficeMap::where('name', 'like', "%{$this->cari}%")
                        ->orWhere('building', 'like', "%{$this->cari}%")
                        ->orWhere('floor', 'like', "%{$this->cari}%")
                        ->get();
        }
    
        return view('livewire.pages.office.item', [
            'datas' => $datas
        ]);
    }
}
