<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'user_id',
        'in',
        'out',
        'note',
        'approved',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getRangeTimeAttribute(){
        return implode(' - ', [
            date('H:i', strtotime($this->in)),
            date('H:i', strtotime($this->out)),
        ]);
    }

    public function getStatusTextAttribute(){
        if ($this->out == null) {
            return "Absensi keluar";
        }
        else {
            return "Absensi selesai";
        }
    }

    public function getDurationAttribute(){
        $waktuMulaiObj = Carbon::parse($this->in);
        $waktuSelesaiObj = Carbon::parse($this->out);
        $durasi = $waktuMulaiObj->diff($waktuSelesaiObj);
        return $durasi->format('%H jam %I menit');
    }
}
