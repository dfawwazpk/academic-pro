<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EditAkunController;
use App\Http\Controllers\DaftarMahasiswaController;
use App\Http\Controllers\DaftarDosenController;
use App\Http\Controllers\BuatAkunDosenController;
use App\Http\Controllers\BuatAkunMahasiswaController;
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
Route::get('laravel', function () {
    return view('laravel_welcome', [
        "title" => "Laravel"
    ]);
});

Route::get('/', [DashboardController::class, 'index'])->middleware('auth');

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'authenticate']);

Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'store']);

Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth');

//operator daftar
Route::get('daftar/mahasiswa', [DaftarMahasiswaController::class, 'index'])->middleware('auth:operator');
Route::get('daftar/dosen', [DaftarDosenController::class,'index'])->middleware('auth:operator');
//operator buat akun
Route::get('buat/mahasiswa', [BuatAkunMahasiswaController::class,'index'])->middleware('auth:operator');
Route::get('buat/dosen', [BuatAkunDosenController::class,'index'])->middleware('auth:operator');
Route::get('edit-akun', [EditAkunController::class, 'index'])->middleware('auth:operator,dosen,mahasiswa');
Route::post('edit-akun', [EditAkunController::class, 'update'])->middleware('auth:operator,dosen,mahasiswa');