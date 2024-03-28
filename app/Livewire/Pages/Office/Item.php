<?php

namespace App\Livewire\Pages\Office;

use Livewire\Component;
use App\Models\OfficeMap;

class Item extends Component
{
    public OfficeMap $officeMap;

    public function mount(OfficeMap $officeMap){
        $this->officeMap = $officeMap;
    }

    public function render()
    {
        return view('livewire.pages.office.item');
    }
}
