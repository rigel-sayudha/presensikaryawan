<?php
// filepath: /d:/laravel/presensikaryawan/app/Http/Controllers/UserController.php
namespace App\Http\Controllers;

use App\Models\User;
use PDF;

class UserController extends Controller
{
    public function rekapPdf($id)
    {
        $user = User::with('attendances')->findOrFail($id);
        $pdf = PDF::loadView('pdf.rekap', compact('user'));
        return $pdf->download('rekap-kehadiran-' . $user->name . '.pdf');
    }
}