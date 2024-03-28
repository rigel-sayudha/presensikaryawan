<?php

namespace App\Livewire\Forms;

use App\Models\OfficeMap;
use Livewire\Attributes\Validate;
use Livewire\Form;

class OfficeMapForm extends Form
{
    public $name = "";
    public $building = "";
    public $floor = "";
    public $desc = "";
    public $photo = "";

    public ?OfficeMap $officeMap;

    public function setOfficeMap(OfficeMap $officeMap){
        $this->officeMap = $officeMap;

        $this->name = $officeMap->name;
        $this->building = $officeMap->building;
        $this->floor = $officeMap->floor;
        $this->desc = $officeMap->desc;
        $this->photo = $officeMap->photo;
    }

    public function store(){
        $valid = $this->validate([
            'name' =>'required',
            'building' =>'required',
            'floor' =>'required',
            'desc' =>'required',
            'photo' =>'',
        ]);

        OfficeMap::create($valid);
        $this->reset();
    }

    public function update(){
        $valid = $this->validate([
            'name' =>'required',
            'building' =>'required',
            'floor' =>'required',
            'desc' =>'required',
            'photo' =>'',
        ]);

        $this->officeMap->update($valid);
        $this->reset();
    }
}
