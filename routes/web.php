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
    Route::get('/home', \App\Livewire\Pages\Home::class)->name('home');
    Route::get('/dashboard', \App\Livewire\Pages\Dashboard::class)->name('dashboard');
    Route::get('/profile', \App\Livewire\Pages\Profile::class)->name('profile');
    Route::get('/dokumentasi', \App\Livewire\Pages\Dokumentasi::class)->name('dokumentasi');

    Route::get('/attendance', \App\Livewire\Pages\Attendance\Index::class)->name('attendance.index');
    Route::get('/attendance/mine', \App\Livewire\Pages\Attendance\Mine::class)->name('attendance.mine');

    Route::get('/user', \App\Livewire\Pages\User\Index::class)->name('user.index');

    Route::get('/setting/registration-code', \App\Livewire\Pages\Setting\RegistrationCode::class)->name('setting.registration-code');
    Route::get('/role/index', \App\Livewire\Pages\Role\Index::class)->name('role.index');
});

Route::middleware('guest')->group(function(){
    Route::get('/login', \App\Livewire\Auth\Login::class)->name('login');
    Route::get('/register', \App\Livewire\Auth\Register::class)->name('register');
});
