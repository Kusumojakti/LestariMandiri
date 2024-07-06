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
    Route::get('/karyawan', [UsersController::class, 'searchusers'])->middleware('roles:admin');

    // Pelanggan
    Route::resource('/pelanggan', PelangganController::class)->middleware('roles:admin');
    Route::get('/pelanggan', [PelangganController::class, 'searchPelanggan'])->middleware('roles:admin');

    // kendaraan
    Route::resource('/kendaraan', KendaraanController::class)->middleware('roles:admin');
    Route::get('/search', [KendaraanController::class, 'search'])->middleware('roles:admin');

    // barang
    Route::resource('/barang', BarangController::class)->middleware('roles:admin');
    Route::get('/getAllBrg', [BarangController::class, 'getAllBrg'])->middleware('roles:admin,sales');
    Route::get('/search', [BarangController::class, 'search'])->middleware('roles:admin');

    // orderan
    Route::resource('/order', OrderController::class)->middleware('roles:sales,admin');
    Route::get('/addorders', [OrderController::class, 'addOrder'])->name('addorder')->middleware('roles:sales,admin');
    Route::get('/order', [OrderController::class, 'searchorders'])->middleware('roles:sales,admin');

    // faktur
    Route::resource('/faktur', FakturController::class)->middleware('roles:admin,driver,owner');
    Route::get('/status-kirim', [FakturController::class, 'shippedStatus'])->middleware('roles:admin,driver');
    Route::get('/getAllFaktur', [FakturController::class, 'getAllFaktur'])->middleware('roles:admin,driver,owner');
    Route::get('/search-faktur/{id}', [FakturController::class, 'searchById'])->middleware('roles:admin,driver,owner');
    Route::get('/search-pelanggan/{pelanggan_id}', [FakturController::class, 'searchByPelangganId'])->middleware('roles:admin,driver,owner');
    Route::get('/getfaktur/date/{date}', [FakturController::class, 'getByDate'])->middleware('roles:admin,driver,owner');


    Route::get('/changepass', function () {
        return view('change_password');
    });

    Route::put('/changepassword', [UsersController::class, 'forgotpassword'])->name('changepassword');
});
