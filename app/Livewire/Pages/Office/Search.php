<?php

namespace App\Livewire\Pages\Office;

use App\Models\OfficeMap;
use Livewire\Component;

class Search extends Component
{
    public $cari;
    public $datas;

    public function search(){
        $this->datas = $this->cari ? OfficeMap::when($this->cari, function($q){
                $q->where('name', 'like', "%{$this->cari}%");
            })->get() : null;
    }

    public function render()
    {
        return view('livewire.pages.office.search');
    }
}
