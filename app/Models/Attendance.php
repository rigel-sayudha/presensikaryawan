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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getTotalHours()
    {
        if (!$this->in || !$this->out) {
            return 0;
        }

        return Carbon::parse($this->in)->diffInHours(Carbon::parse($this->out));
    }

    public function getDurationAttribute()
    {
        if ($this->in && $this->out) {
            $startTime = $this->in;
            $endTime = $this->out;
            return $endTime->diffInHours($startTime) . ' jam ' . $endTime->diffInMinutes($startTime) % 60 . ' menit';
        }
        return '0 jam 0 menit';
    }

    public function calculateLate()
    {
        if (!$this->in) {
            return 0;
        }

        $expectedStart = Carbon::parse($this->date->format('Y-m-d') . ' 08:00:00');
        $actualStart = Carbon::parse($this->in);

        return $actualStart->greaterThan($expectedStart) ? $actualStart->diffInMinutes($expectedStart) : 0;
    }

    public function calculateOvertime()
    {
        if (!$this->out) {
            return 0;
        }

        $expectedEnd = Carbon::parse($this->date->format('Y-m-d') . ' 16:00:00');
        $actualEnd = Carbon::parse($this->out);

        return $actualEnd->greaterThan($expectedEnd) ? $actualEnd->diffInMinutes($expectedEnd) : 0;
    }

    public function calculateOvertimeBonus()
    {
        return floor($this->calculateOvertime() / 60) * 50000;
    }

    public function calculateLatePenalty()
    {
        $lateMinutes = $this->calculateLate();
        $lateHours = ceil($lateMinutes / 60); 
        return $lateHours * 5000;
    }

    function calculateDistance($lat1, $lon1, $lat2, $lon2)
    {
        $earthRadius = 6371000; 

        $latDelta = deg2rad($lat2 - $lat1);
        $lonDelta = deg2rad($lon2 - $lon1);

        $a = sin($latDelta / 2) * sin($latDelta / 2) +
            cos(deg2rad($lat1)) * cos(deg2rad($lat2)) *
            sin($lonDelta / 2) * sin($lonDelta / 2);

        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

        return $earthRadius * $c;
    }

}
