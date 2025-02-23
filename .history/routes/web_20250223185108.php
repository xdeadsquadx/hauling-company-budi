<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KelasPelatihanController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\SparepartController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\PasanganKendaraanController;
use App\Http\Controllers\PengemudiController;
use App\Http\Controllers\SuratKendaraanController;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    // Kendaraan
    Route::prefix('kendaraan')->name('kendaraan.')->group(function () {
        Route::get('/', [KendaraanController::class, 'index'])->name('index');
        Route::get('/tambah', [KendaraanController::class, 'create'])->name('create');
        Route::post('/tambah', [KendaraanController::class, 'store'])->name('store');
        Route::get('/{kendaraan}/edit', [KendaraanController::class, 'edit'])->name('edit');
        Route::put('/{kendaraan}', [KendaraanController::class, 'update'])->name('update');
        Route::delete('/{kendaraan}', [KendaraanController::class, 'destroy'])->name('destroy');
    });

    // Surat Kendaraan
    Route::prefix('surat_kendaraan')->name('surat_kendaraan.')->group(function () {
        Route::get('/', [SuratKendaraanController::class, 'index'])->name('index');
        Route::get('/tambah', [SuratKendaraanController::class, 'create'])->name('create');
        Route::post('/tambah', [SuratKendaraanController::class, 'store'])->name('store');
    });

    // Pelatihan
    Route::prefix('pelatihan')->name('pelatihan.')->group(function () {
        Route::get('/', [KelasPelatihanController::class, 'index'])->name('index');
        Route::get('/tambah', [KelasPelatihanController::class, 'create'])->name('create');
        Route::post('/tambah', [KelasPelatihanController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [KelasPelatihanController::class, 'edit'])->name('edit');
        Route::put('/kirim/{id}/{id_kelas_pengemudi}', [KelasPelatihanController::class, 'kirim'])->name('kirim');
    });

    Route::prefix('pasanganKendaraan')->name('pasanganKendaraan.')->group(function () {
        Route::get('/', [PasanganKendaraanController::class, 'index'])->name('index');
        Route::get('/tambah', [PasanganKendaraanController::class, 'create'])->name('create');
        Route::post('/tambah', [PasanganKendaraanController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [PasanganKendaraanController::class, 'edit'])->name('edit');
        Route::put('/kirim/{id}/{id_kelas_pengemudi}', [PasanganKendaraanController::class, 'kirim'])->name('kirim');
    });

    // Jadwal
    Route::get('/jadwal', function () {
        return view('operasional/jadwal');
    })->name('jadwal');

    // Sparepart
    Route::prefix('sparepart')->name('sparepart.')->group(function () {
        Route::get('/', [SparepartController::class, 'index'])->name('index');
        Route::get('/kurang', [SparepartController::class, 'index_kurang'])->name('index.kurang');
        Route::get('/tambah', [SparepartController::class, 'create'])->name('create');
        Route::post('/tambah', [SparepartController::class, 'store'])->name('store');
        Route::get('/{sparepart}/edit', [SparepartController::class, 'edit'])->name('edit');
        Route::put('/{sparepart}', [SparepartController::class, 'update'])->name('update');
        Route::delete('/{sparepart}', [SparepartController::class, 'destroy'])->name('destroy');
    });

    // Maintenance
    Route::prefix('maintenance')->name('maintenance.')->group(function () {
        Route::get('/', [MaintenanceController::class, 'index'])->name('index');
        Route::post('/status/{id}', [MaintenanceController::class, 'status'])->name('status');
        Route::get('/tambah', [MaintenanceController::class, 'create'])->name('create');
        Route::post('/tambah', [MaintenanceController::class, 'store'])->name('store');
        Route::get('/{maintenance}/edit', [MaintenanceController::class, 'edit'])->name('edit');
        Route::put('/{maintenance}', [MaintenanceController::class, 'update'])->name('update');
        Route::delete('/{maintenance}', [MaintenanceController::class, 'destroy'])->name('destroy');
    });

    // Pengemudi
    Route::prefix('pengemudi')->name('pengemudi.')->group(function () {
        Route::get('/', [PengemudiController::class, 'index'])->name('index');
        Route::get('/tambah', [PengemudiController::class, 'create'])->name('create');
        Route::post('/tambah', [PengemudiController::class, 'store'])->name('store');
        Route::get('/{pengemudi}/edit', [PengemudiController::class, 'edit'])->name('edit');
        Route::put('/{pengemudi}', [PengemudiController::class, 'update'])->name('update');
        Route::delete('/{pengemudi}', [PengemudiController::class, 'destroy'])->name('destroy');
    });
});
