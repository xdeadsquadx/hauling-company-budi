<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/jadwal', function () {
    return view('operasional/jadwal');
})->name('jadwal');

Route::get('/kendaraan', function () {
    return view( 'kendaraan/listKendaraan');
})->name('listKendaraan');

Route::get('/sparepart', function () {
    return view( 'kendaraan/sparepart');
})->name('sparepart');


Route::get('/maintenance', function () {
    return view( 'kendaraan/maintenance');
})->name('maintenance');


Route::get('/surat_kendaraan', function () {
    return view( 'kendaraan/suratKendaraan');
})->name('suratKendaraan');


Route::get('/pengemudi', function () {
    return view( 'pengemudi/s');
})->name('suratKendaraan');