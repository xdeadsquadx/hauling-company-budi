<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



Route::get('/', function () {
    return view('dashboard');
});

Route::get('/tambah_kendaraan', function () {
    return view('kendaraan/kendaraan');
})->name('jadwal');

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
    return view( 'pengemudi/listPengemudi');
})->name('listPengemudi');