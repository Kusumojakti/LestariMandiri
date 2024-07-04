<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KendaraanController;
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

    // Pelanggan
    Route::resource('/pelanggan', PelangganController::class)->middleware('roles:admin');

    // kendaraan
    Route::resource('/kendaraan', KendaraanController::class)->middleware('roles:admin');


    Route::get('/orderan', function () {
        return view('orderan');
    })->middleware('roles:admin,sales');


    Route::get('/status-kirim', function () {
        return view('status_pengiriman');
    })->middleware('roles:admin,driver');

    Route::get('/laporan', function () {
        return view('laporan');
    })->middleware('roles:admin,owner');

    Route::get('/changepass', function () {
        return view('change_password');
    });
});
