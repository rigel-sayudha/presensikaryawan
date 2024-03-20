<?php

namespace App\Livewire\Pages\Office;

use App\Models\OfficeMap;
use Livewire\Component;

class Index extends Component
{
    public $no = 1;
    public $search;

    public function render()
    {
        return view('livewire.pages.office.index', [
            'datas' => OfficeMap::get()
        ]);
    }
}
