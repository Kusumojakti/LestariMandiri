<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('loginpage');
});

Route::get('/overview', function () {
    return view('index');
});

Route::get('/orderan', function () {
    return view('orderan');
});

Route::get('/karyawan', function () {
    return view('karyawan');
});

Route::get('/pelanggan', function () {
    return view('pelanggan');
});

Route::get('/kendaraan', function () {
    return view('kendaraan');
});

Route::get('/status-kirim', function () {
    return view('status_pengiriman');
});

Route::get('/laporan', function () {
    return view('laporan');
});

Route::get('/changepass', function () {
    return view('change_password');
});

