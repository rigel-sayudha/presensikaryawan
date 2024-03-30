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

    protected $casts = [
        'date' => 'date',
        'in' => 'datetime',
        'out' => 'datetime',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getRangeTimeAttribute(){
        return implode(' - ', [
            date('H:i', strtotime($this->in)),
            $this->out ? date('H:i', strtotime($this->out)) : "--:--",
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

    public function getInOutDateTimeAttribute(){
        return [
            implode(" ", [
                $this->date->format("Y-m-d"),
                $this->in->format("H:i:s"),
            ]),
            implode(" ", [
                $this->out ? $this->date->format("Y-m-d") : date("Y-m-d"),
                $this->out ? $this->out->format("H:i:s") : date("H:i:s"),
            ]),
        ];
    }

    public function getDurationAttribute(){
        list($in, $out) = $this->getInOutDateTimeAttribute();

        $waktuMulaiObj = Carbon::parse($in);
        $waktuSelesaiObj = Carbon::parse($out);
        $durasi = $waktuMulaiObj->diff($waktuSelesaiObj);

        $jam = $durasi->days * 24 + $durasi->h;
        $menit = $durasi->i;

        return "$jam jam $menit menit";
    }
}
