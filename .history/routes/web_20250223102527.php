<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KelasPelatihanController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\SparepartController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\PengemudiController;
use App\Http\Controllers\SuratKendaraanController;
use App\Models\sparepart;

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
Route::post('/kendaraan/tambah', [KendaraanController::class, 'store'])->name('kendaraan.store');
Route::get('/kendaraan/{kendaraan}/edit', [KendaraanController::class, 'edit'])->name('kendaraan.edit');
Route::put('/kendaraan/{kendaraan}', [KendaraanController::class, 'update'])->name('kendaraan.update');
Route::delete('/kendaraan/{kendaraan}', [KendaraanController::class, 'destroy'])->name('kendaraan.destroy');


Route::get('/surat_kendaraan', [SuratKendaraanController::class, 'index'])->name('surat_kendaraan.index');
Route::get('/surat_kendaraan/tambah', [SuratKendaraanController::class, 'create'])->name('surat_kendaraan.create');
Route::post('/surat_kendaraan/tambah', [SuratKendaraanController::class, 'store'])->name('surat_kendaraan.store');

Route::get('/pelatihan', [KelasPelatihanController::class, 'index'])->name('pelatihan.index');
Route::get('/pelatihan/tambah', [KelasPelatihanController::class, 'create'])->name('pelatihan.create');
Route::post('/pelatihan/tambah', [KelasPelatihanController::class, 'store'])->name('pelatihan.store');
Route::post('/pelatihan/edit/{id}', [KelasPelatihanController::class, 'eduiit'])->name('pelatihan.store');



Route::get('/jadwal', function () {
    return view('operasional/jadwal');
})->name('jadwal');

Route::get('/sparepart', [SparepartController::class, 'index'])->name('sparepart.index');
Route::get('/sparepart_kurang', [SparepartController::class, 'index_kurang'])->name('sparepart.index.kurang');
Route::get('/sparepart/tambah', [SparepartController::class, 'create'])->name('sparepart.create');
Route::post('/sparepart/tambah', [SparepartController::class, 'store'])->name('sparepart.store');
Route::get('/sparepart/{sparepart}/edit', [SparepartController::class, 'edit'])->name('sparepart.edit');
Route::put('/sparepart/{sparepart}', [SparepartController::class, 'update'])->name('sparepart.update');
Route::delete('/sparepart/{sparepart}', [SparepartController::class, 'destroy'])->name('sparepart.destroy');


Route::get('/maintenance', [MaintenanceController::class, 'index'])->name('maintenance.index');
Route::post('/maintenance/status/{id}', [MaintenanceController::class, 'status'])->name('maintenance.status');
Route::get('/maintenance/tambah', [MaintenanceController::class, 'create'])->name('maintenance.create');
Route::post('/maintenance/tambah', [MaintenanceController::class, 'store'])->name('maintenance.store');
Route::get('/maintenance/{maintenance}/edit', [MaintenanceController::class, 'edit'])->name('maintenance.edit');
Route::put('/maintenance/{maintenance}', [MaintenanceController::class, 'update'])->name('maintenance.update');
Route::delete('/maintenance/{maintenance}', [MaintenanceController::class, 'destroy'])->name('maintenance.destroy');

Route::get('/pengemudi', [PengemudiController::class, 'index'])->name('pengemudi.index');
Route::get('/pengemudi/tambah', [PengemudiController::class, 'create'])->name('pengemudi.create');
Route::post('/pengemudi/tambah', [PengemudiController::class, 'store'])->name('pengemudi.store');
Route::get('/pengemudi/{pengemudi}/edit', [PengemudiController::class, 'edit'])->name('pengemudi.edit');
Route::put('/pengemudi/{pengemudi}', [PengemudiController::class, 'update'])->name('pengemudi.update');
Route::delete('/pengemudi/{pengemudi}', [PengemudiController::class, 'destroy'])->name('pengemudi.destroy');


