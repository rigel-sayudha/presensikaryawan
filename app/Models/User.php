<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'school',
        'nis',
        'phone',
        'photo',
        'active',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'password' => 'hashed',
        'active' => 'boolean',
    ];

    public function getRedirectToAttribute(){
        if ($this->hasRole('siswa')) {
            return route('home');
        }
        else{
            return route('dashboard');
        }
    }

    public function getAvatarAttribute(){
        return $this->photo ? Storage::url($this->photo) : url('nouser.jpg');
    }

    public function attendances(){
        return $this->hasMany(Attendance::class);
    }
}
