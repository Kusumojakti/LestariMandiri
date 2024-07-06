<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\FakturController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\cekSession;
use Illuminate\Support\Facades\Route;



// authentication
Route::get('login', [AuthController::class, 'index']);
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


// middleware 
Route::middleware(cekSession::class)->group(function () {
    Route::get('/', function () {
        return view('index');
    });

    // users atau karyawan
    Route::resource('/karyawan', UsersController::class)->middleware('roles:admin');
    Route::get('/getDriver', [UsersController::class, 'getDriver'])->middleware('roles:admin');

    // Pelanggan
    Route::resource('/pelanggan', PelangganController::class)->middleware('roles:admin');

    // kendaraan
    Route::resource('/kendaraan', KendaraanController::class)->middleware('roles:admin');

    // barang
    Route::resource('/barang', BarangController::class)->middleware('roles:admin');
    Route::get('/getAllBrg', [BarangController::class, 'getAllBrg'])->middleware('roles:admin,sales');

    // orderan
    Route::resource('/order', OrderController::class)->middleware('roles:sales,admin');
    Route::get('/addorders', [OrderController::class, 'addOrder'])->name('addorder');

    // faktur
    Route::resource('/faktur', FakturController::class)->middleware('roles:admin,driver,owner');
    Route::get('/status-kirim', [FakturController::class, 'shippedStatus'])->middleware('roles:admin,driver');
    Route::get('/getAllFaktur', [FakturController::class, 'getAllFaktur']);



    Route::get('/laporan', function () {
        return view('laporan');
    })->middleware('roles:admin,owner');

    Route::get('/changepass', function () {
        return view('change_password');
    });
});
