<?php

use App\Livewire\About;
use App\Livewire\Buy;
use App\Livewire\Home;
use App\Livewire\Property;
use App\Livewire\Rent;
use App\Livewire\Sell;
use Illuminate\Support\Facades\Route;

// Route::get('/home', function () {
//     return view('welcome');
// });

Route::get('/', Home::class)->name('home');
// Route::get('/about', About::class)->name('about');
Route::get('/property', Property::class)->name('property');
Route::get('/buy', Buy::class)->name('buy');
Route::get('/sell', Sell::class)->name('sell');
Route::get('/rent', Rent::class)->name('rent');
