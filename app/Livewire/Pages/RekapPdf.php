<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\User;
use PDF;

class RekapPdf extends Component
{
    public function render()
    {
        return view('livewire.rekap-pdf');
    }

    public function rekapPdf($id)
    {
        $user = User::with('attendances')->findOrFail($id);
        $pdf = PDF::loadView('pdf.rekap', compact('user'));
        return $pdf->download('rekap-absensi-' . $user->name . '.pdf');
    }
}
