<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TransportasiController;
use App\Http\Controllers\RuteController;
use App\Http\Controllers\PemesananController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/pengaturan', [UserController::class, 'create'])->name('pengaturan');
    Route::post('/edit/name', [UserController::class, 'name'])->name('edit.name');
    Route::post('/edit/password', [UserController::class, 'password'])->name('edit.password');
    Route::get('/transaksi/{kode}', [LaporanController::class, 'show'])->name('transaksi.show');

    Route::middleware(['petugas'])->group(function () {
        Route::get('/pembayaran/{id}', [LaporanController::class, 'pembayaran'])->name('pembayaran');
        Route::get('/petugas', [LaporanController::class, 'petugas'])->name('petugas');
        Route::post('/petugas', [LaporanController::class, 'kode'])->name('petugas.kode');

        Route::middleware(['admin'])->group(function () {
            Route::get('/home', [HomeController::class, 'index'])->name('home');
            Route::resource('/category', CategoryController::class);
            Route::resource('/transportasi', TransportasiController::class);
            Route::resource('/rute', RuteController::class);
            Route::resource('/user', UserController::class);
            Route::get('/transaksi', [LaporanController::class, 'index'])->name('transaksi');
        });
    });

    Route::middleware(['penumpang'])->group(function () {
        Route::get('/pesan/{kursi}/{data}', [PemesananController::class, 'pesan'])->name('pesan');
        Route::get('/cari/kursi/{data}', [PemesananController::class, 'edit'])->name('cari.kursi');
        Route::resource('/', PemesananController::class);
        Route::get('/history', [LaporanController::class, 'history'])->name('history');
        Route::get('/{id}/{data}', [PemesananController::class, 'show'])->name('show');
    });
});