<?php

namespace App\Livewire\Forms;

use App\Models\OfficeLocation;
use Livewire\Attributes\Validate;
use Livewire\Form;

class OfficeLocationForm extends Form
{
    public $name = "";
    public $building = "";
    public $floor = "";
    public $latitude = "";
    public $longitude = "";
    public $desc = "";

    public ?OfficeLocation $officeLocation;

    public function setOfficeLocation(OfficeLocation $officeLocation)
    {
        $this->officeLocation = $officeLocation;

        $this->name = $officeLocation->name;
        $this->building = $officeLocation->building;
        $this->floor = $officeLocation->floor;
        $this->latitude = $officeLocation->latitude;
        $this->longitude = $officeLocation->longitude;
        $this->desc = $officeLocation->desc;
    }

    public function store()
    {
        $valid = $this->validate([
            'name' => 'required',
            'building' => 'required',
            'floor' => 'required',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'desc' => 'nullable',
        ]);

        OfficeLocation::create($valid);
        $this->reset();
    }

    public function update()
    {
        $valid = $this->validate([
            'name' => 'required',
            'building' => 'required',
            'floor' => 'required',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'desc' => 'nullable',
        ]);

        $this->officeLocation->update($valid);
        $this->reset();
    }
}