Here is the content for the file /my-laravel-app/my-laravel-app/app/Http/Controllers/OfficeLocationController.php:

<?php

namespace App\Http\Controllers;

use App\Models\OfficeLocation;
use Illuminate\Http\Request;

class OfficeLocationController extends Controller
{
    public function index()
    {
        $locations = OfficeLocation::all();
        return view('livewire.pages.office.index', compact('locations'));
    }

    public function create()
    {
        return view('livewire.pages.office.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'building' => 'required|string|max:255',
            'floor' => 'required|string|max:255',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        OfficeLocation::create($request->all());

        return redirect()->route('office.index')->with('success', 'Office location created successfully.');
    }

    public function edit(OfficeLocation $officeLocation)
    {
        return view('livewire.pages.office.form', compact('officeLocation'));
    }

    public function update(Request $request, OfficeLocation $officeLocation)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'building' => 'required|string|max:255',
            'floor' => 'required|string|max:255',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        $officeLocation->update($request->all());

        return redirect()->route('office.index')->with('success', 'Office location updated successfully.');
    }

    public function destroy(OfficeLocation $officeLocation)
    {
        $officeLocation->delete();
        return redirect()->route('office.index')->with('success', 'Office location deleted successfully.');
    }
}