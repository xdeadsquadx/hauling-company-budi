<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/jadwal', function () {
    return view('operasional/jadwal');
})->name('jadwal');

Route::get('/kendaraan', function () {
    return view(view: 'kendaraan/jadwal');
})->name('jadwal');