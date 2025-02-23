<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\KendaraanController;

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



Route::get('/kendaraan', [KendaraanController::class, 'index'])->name('kendaraan.index');
Route::get('/kendaraan/tambah', [KendaraanController::class, 'create'])->name('kendaraan.create');
Route::post('/kendaraan', [KendaraanController::class, 'store'])->name('kendaraan.store');
Route::get('/kendaraan/{kendaraan}/edit', [KendaraanController::class, 'edit'])->name('kendaraan.edit');
Route::put('/kendaraan/{kendaraan}', [KendaraanController::class, 'update'])->name('kendaraan.update');
Route::delete('/kendaraan/{kendaraan}', [KendaraanController::class, 'destroy'])->name('kendaraan.destroy');


Route::get('/tambah_kendaraan', function () {
    return view('kendaraan/createKendaraan');
})->name('kendaraan');

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