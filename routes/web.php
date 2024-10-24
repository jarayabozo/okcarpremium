<?php

use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);
Route::get('/vehiculos/{body?}', \App\Livewire\Vehicles\Index::class)->name('vehicles.index');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/brands', \App\Livewire\Brands\Index::class)->name('brands.index');
    Route::get('/brands/create', \App\Livewire\Brands\Create::class)->name('brands.create');
    Route::get('/brands/show/{brand}', \App\Livewire\Brands\Show::class)->name('brands.show');
    Route::get('/brands/update/{brand}', \App\Livewire\Brands\Edit::class)->name('brands.edit');
});

