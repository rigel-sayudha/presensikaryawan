<?php

namespace App\Livewire\Pages\Office;

use App\Models\OfficeMap;
use Livewire\Attributes\On;
use Livewire\Component;

class Show extends Component
{
    public $show = false;
    public ?OfficeMap $officeMap;

    #[On('showOfficeMap')]
    public function showOfficeMap(OfficeMap $officeMap){
        $this->show = true;
        $this->officeMap = $officeMap;
    }

    public function resetOfficeMap(){
        $this->show = false;
        $this->officeMap = null;
    }

    public function render()
    {
        return view('livewire.pages.office.show');
    }
}
