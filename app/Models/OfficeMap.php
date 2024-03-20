<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class OfficeMap extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'building',
        'floor',
        'desc',
        'photo',
    ];

    public function getImageAttribute(){
        return $this->photo ? Storage::url($this->photo) : url('nouser.jpg');
    }
}
