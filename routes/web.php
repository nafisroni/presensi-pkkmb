<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PresensiController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/registrasi', [LoginController::class, 'registrasi'])->name('registrasi');
Route::post('/simpanregistrasi', [LoginController::class, 'simpanregistrasi'])->name('simpanregistrasi');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/postLogin', [LoginController::class, 'postLogin'])->name('postLogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth', 'ceklevel:admin,mahasiswa']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

Route::group(['middleware' => ['auth', 'ceklevel:admin,mahasiswa']], function () {
    Route::post('/simpan-masuk', [PresensiController::class, 'store'])->name('simpan-masuk');
    Route::post('/ubah=presensi', [PresensiController::class, 'presensipulang'])->name('ubah-presensi');
    Route::get('/presensi-masuk', [PresensiController::class, 'index'])->name('presensi-masuk');
    Route::get('/presensi-keluar', [PresensiController::class, 'keluar'])->name('presensi-keluar');
    Route::get('filter-data', [PresensiController::class, 'halamanrekap'])->name('filter-data');
    Route::get('filter-data/{tglawal}/{tglakhir}', [PresensiController::class, 'tampildatakeseluruhan'])->name('filter-data-keseluruhan');
});
