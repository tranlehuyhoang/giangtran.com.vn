<?php

use App\Livewire\Counter;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Counter::class);
Route::get('/home', Home::class);
