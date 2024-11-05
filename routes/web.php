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
    // Route::get('/brands-vehicles', \App\Livewire\BrandsVehicles\Index::class)->name('brands-vehicles.index');
    // Route::get('/brands-vehicles/create', \App\Livewire\BrandsVehicles\Create::class)->name('brands-vehicles.create');
    // Route::get('/brands-vehicles/show/{brand}', \App\Livewire\BrandsVehicles\Show::class)->name('brands-vehicles.show');
    // Route::get('/brands-vehicles/update/{brand}', \App\Livewire\BrandsVehicles\Edit::class)->name('brands-vehicles.edit');
});

