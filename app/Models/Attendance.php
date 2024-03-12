<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
