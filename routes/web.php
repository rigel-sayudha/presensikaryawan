<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware('auth')->group(function(){
    Route::middleware('can:home')->get('/home', \App\Livewire\Pages\Home::class)->name('home');
    Route::middleware('can:dashboard')->get('/dashboard', \App\Livewire\Pages\Dashboard::class)->name('dashboard');
    Route::middleware('can:profile')->get('/profile', \App\Livewire\Pages\Profile::class)->name('profile');
    Route::middleware('can:documentation')->get('/dokumentasi', \App\Livewire\Pages\Dokumentasi::class)->name('dokumentasi');

    Route::middleware('can:attendance.index')->get('/attendance', \App\Livewire\Pages\Attendance\Index::class)->name('attendance.index');
    Route::middleware('can:attendance.mine')->get('/attendance/mine', \App\Livewire\Pages\Attendance\Mine::class)->name('attendance.mine');
    Route::middleware('can:user.index')->get('/user', \App\Livewire\Pages\User\Index::class)->name('user.index');
    Route::middleware('can:user')->get('/user/{user}', \App\Livewire\Pages\User\Show::class)->name('user.show');

    Route::middleware('can:setting.registration-code')->get('/setting/registration-code', \App\Livewire\Pages\Setting\RegistrationCode::class)->name('setting.registration-code');
    Route::middleware('can:role.index')->get('/role', \App\Livewire\Pages\Role\Index::class)->name('role.index');
});

Route::middleware('guest')->group(function(){
    Route::get('/login', \App\Livewire\Auth\Login::class)->name('login');
    Route::get('/register', \App\Livewire\Auth\Register::class)->name('register');
});
