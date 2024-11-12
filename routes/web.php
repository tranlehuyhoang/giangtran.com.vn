<?php

 

use App\Livewire\Home;
use App\Livewire\LandingPage;
use Illuminate\Support\Facades\Route;

// Định nghĩa các route

Route::get('/', Home::class)->name('home');
Route::get('/landing-page', LandingPage::class)->name('landingpage');
 