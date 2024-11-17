<?php

 

use App\Livewire\ChuyenKhoan;
use App\Livewire\ForgotPassword;
use App\Livewire\Home;
use App\Livewire\LandingPage;
use App\Livewire\Login;
use App\Livewire\Profile;
use App\Livewire\Register;
use Illuminate\Support\Facades\Route;

// Định nghĩa các route

Route::get('/landing-page', LandingPage::class)->name('landingpage');
Route::get('/', Home::class)->name('home');
Route::get('/login', Login::class)->name('login');
Route::get('/register', action: Register::class)->name('register');
Route::get('/forgot-password', action: ForgotPassword::class)->name('forgot-password');
Route::get('/profile', Profile::class)->name('profile');
Route::get('/chuyen-khoan', ChuyenKhoan::class)->name('chuyen-khoan');
