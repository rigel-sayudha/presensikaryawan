<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfficeMap extends Model
{
    use HasFactory;

    protected $listeners = [
        'name',
        'building',
        'floor',
        'desc',
        'photo',
    ];
}
