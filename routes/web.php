<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HardwareController;
use App\Http\Controllers\SoftwareController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\TransaksihwController;
use App\Http\Controllers\TransaksiswController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LokasiController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function(){
    return view('auth.login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/hardware', [HardwareController::class, 'index'])->name('hardware.index');
    Route::get('/hardware/cari', [HardwareController::class, 'search'])->name('hardware.search');
    Route::get('/hardware/tambah', [HardwareController::class, 'create'])->name('hardware.create');
    Route::post('/hardware/simpan', [HardwareController::class, 'store'])->name('hardware.store');
    Route::get('/hardware/edit/{id}', [HardwareController::class, 'edit'])->name('hardware.edit');
    Route::put('/hardware/update/{id}', [HardwareController::class, 'update'])->name('hardware.update');
    Route::get('/hardware/hapus/{id}', [HardwareController::class, 'destroy'])->name('hardware.destroy');

    Route::get('/software', [SoftwareController::class, 'index'])->name('software.index');
    Route::get('/software/cari', [SoftwareController::class, 'search'])->name('software.search');
    Route::get('/software/tambah', [SoftwareController::class, 'create'])->name('software.create');
    Route::post('/software/simpan', [SoftwareController::class, 'store'])->name('software.store');
    Route::get('/software/edit/{id}', [SoftwareController::class, 'edit'])->name('software.edit');
    Route::put('/software/update/{id}', [SoftwareController::class, 'update'])->name('software.update');
    Route::get('/software/hapus/{id}', [SoftwareController::class, 'destroy'])->name('software.destroy');

    Route::get('/vendor', [VendorController::class, 'index'])->name('vendor.index');
    Route::get('/vendor/tambah', [VendorController::class, 'create'])->name('vendor.create');
    Route::post('/vendor/simpan', [VendorController::class, 'store'])->name('vendor.store');
    Route::get('/vendor/edit/{id}', [VendorController::class, 'edit'])->name('vendor.edit');
    Route::put('/vendor/update/{id}', [VendorController::class, 'update'])->name('vendor.update');
    Route::get('/vendor/hapus/{id}', [VendorController::class, 'destroy'])->name('vendor.destroy');

    Route::get('/transaksihardware', [TransaksihwController::class, 'index'])->name('transaksi_hardware.index');
    Route::get('/transaksihardware/tambah', [TransaksihwController::class, 'create'])->name('transaksi_hardware.create');
    Route::post('/transaksihardware/simpan', [TransaksihwController::class, 'store'])->name('transaksi_hardware.store');
    Route::get('/transaksihardware/edit/{id}', [TransaksihwController::class, 'edit'])->name('transaksi_hardware.edit');
    Route::put('/transaksihardware/update/{id}', [TransaksihwController::class, 'update'])->name('transaksi_hardware.update');
    Route::get('/transaksihardware/detail/{id}', [TransaksihwController::class, 'show'])->name('transaksi_hardware.show');
    Route::get('/transaksihardware/hapus/{id}', [TransaksihwController::class, 'destroy'])->name('transaksi_hardware.destroy');
    Route::get('/transaksihardware/cetak', [TransaksihwController::class, 'print'])->name('transaksi_hardware.print');

    Route::get('/transaksisoftware', [TransaksiswController::class, 'index'])->name('transaksi_software.index');
    Route::get('/transaksisoftware/tambah', [TransaksiswController::class, 'create'])->name('transaksi_software.create');
    Route::post('/transaksisoftware/simpan', [TransaksiswController::class, 'store'])->name('transaksi_software.store');
    Route::get('/transaksisoftware/edit/{id}', [TransaksiswController::class, 'edit'])->name('transaksi_software.edit');
    Route::put('/transaksisoftware/update/{id}', [TransaksiswController::class, 'update'])->name('transaksi_software.update');
    Route::get('/transaksisoftware/hapus/{id}', [TransaksiswController::class, 'destroy'])->name('transaksi_software.destroy');
    Route::get('/transaksisoftware/detail/{id}', [TransaksiswController::class, 'show'])->name('transaksi_software.show');
    Route::get('/transaksisoftware/cetak', [TransaksiswController::class, 'print'])->name('transaksi_software.print');

    Route::get('/penempatan', [LokasiController::class, 'index'])->name('lokasis.index');
    Route::get('/penempatan/cari', [LokasiController::class, 'search'])->name('lokasis.search');
    Route::get('/penempatan/tambah', [LokasiController::class, 'create'])->name('lokasis.create');
    Route::post('/penempatan/simpan', [LokasiController::class, 'store'])->name('lokasis.store');
    Route::get('/penempatan/edit/{id}', [LokasiController::class, 'edit'])->name('lokasis.edit');
    Route::put('/penempatan/update/{id}', [LokasiController::class, 'update'])->name('lokasis.update');
    Route::get('/penempatan/hapus/{id}', [LokasiController::class, 'destroy'])->name('lokasis.destroy');
    Route::get('/penempatan/cetak', [LokasiController::class, 'print'])->name('lokasis.print');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
