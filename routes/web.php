<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EditAkunController;
use App\Http\Controllers\DaftarMahasiswaController;
use App\Http\Controllers\DaftarDosenController;
use App\Http\Controllers\BuatAkunDosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\IRSController;
use App\Http\Controllers\KHSController;
use App\Http\Controllers\PKLController;
use App\Http\Controllers\SkripsiController;
use App\Http\Controllers\VerifikasiController;
use App\Models\PKL;

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

//-------------------------------- SEMUA AKUN --------------------------------//

Route::get('/', [DashboardController::class, 'index'])->middleware('auth', 'all');

Route::get('login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'authenticate']);

Route::get('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth', 'all');

Route::get('edit-akun', [EditAkunController::class, 'index'])->middleware('auth', 'all');
Route::post('edit-akun', [EditAkunController::class, 'update'])->middleware('auth', 'all');

//-------------------------------- OPERATOR --------------------------------//

//LIST AKUN
Route::get('daftar/mahasiswa', [MahasiswaController::class, 'list'])->middleware('auth','operator');
Route::get('daftar/dosen', [DaftarDosenController::class,'index'])->middleware('auth','operator');

//BUAT AKUN MAHASISWA
Route::get('buat/mahasiswa', [MahasiswaController::class,'create'])->middleware('auth','operator');
Route::post('buat/mahasiswa', [MahasiswaController::class,'doCreate'])->middleware('auth','operator');

//BUAT AKUN DOSEN
Route::get('buat/dosen', [DosenController::class,'create'])->middleware('auth','operator');
Route::post('buat/dosen', [DosenController::class,'doCreate'])->middleware('auth','operator');

//LIST MAHASISWA
// Route::get('daftar/mahasiswa', [DaftarMahasiswaController::class,'list'])->middleware('auth','operator');

//-------------------------------- MAHASISWA --------------------------------//

//LOGIN PERTAMA
Route::get('first-time-login', [MahasiswaController::class, 'updateFirst'])->middleware('auth','mahasiswa_firsttime');
Route::post('first-time-login', [MahasiswaController::class, 'doUpdateFirst'])->middleware('auth','mahasiswa_firsttime');

//IRS
Route::get('riwayat/irs',[IRSController::class,'riwayatIRS'])->middleware('auth','mahasiswa');
Route::get('buat/irs', [IRSController::class, 'buatIRS'])->middleware('auth','mahasiswa');
Route::post('buat/irs', [IRSController::class, 'doBuatIRS'])->middleware('auth','mahasiswa');

//KHS
Route::get('riwayat/khs',[KHSController::class,'riwayatKHS'])->middleware('auth','mahasiswa');
Route::get('buat/khs', [KHSController::class, 'buatKHS'])->middleware('auth','mahasiswa');
Route::post('buat/khs', [KHSController::class, 'doBuatKHS'])->middleware('auth','mahasiswa');

//PKL
Route::get('riwayat/pkl',[PKLController::class,'riwayatPKL'])->middleware('auth','mahasiswa');
Route::get('buat/pkl', [PKLController::class, 'buatPKL'])->middleware('auth','mahasiswa');
Route::post('buat/pkl', [PKLController::class, 'doBuatPKL'])->middleware('auth','mahasiswa');

//SKRIPSI
Route::get('riwayat/skripsi',[SkripsiController::class,'riwayatSkripsi'])->middleware('auth','mahasiswa');
Route::get('buat/skripsi', [SkripsiController::class, 'buatSkripsi'])->middleware('auth','mahasiswa');
Route::post('buat/skripsi', [SkripsiController::class, 'doBuatSkripsi'])->middleware('auth','mahasiswa');

//EDIT PROFILE
Route::get('/edit-profile/{id}', [DaftarMahasiswaController::class, 'index']);
Route::get('/edit-profile/{id}', [DaftarMahasiswaController::class, 'editProfile'])->name('edit-profile');
Route::post('/update-profile/{id}', [DaftarMahasiswaController::class, 'updateProfile'])->name('update-profile');

//-------------------------------- DOSEN --------------------------------//

//VERIFIKASI IRS
Route::get('verifikasi/irs', [VerifikasiController::class, 'listIRS'])->middleware('auth','dosen');
Route::get('verifikasi/irs/setujui/{id}', [VerifikasiController::class, 'doSetujuiIRS'])->middleware('auth','dosen');
Route::get('verifikasi/irs/tolak/{id}', [VerifikasiController::class, 'doTolakIRS'])->middleware('auth','dosen');

//VERIFIKASI KHS
Route::get('verifikasi/khs', [VerifikasiController::class, 'listKHS'])->middleware('auth','dosen');
Route::get('verifikasi/khs/setujui/{id}', [VerifikasiController::class, 'doSetujuiKHS'])->middleware('auth','dosen');
Route::get('verifikasi/khs/tolak/{id}', [VerifikasiController::class, 'doTolakKHS'])->middleware('auth','dosen');

//VERIFIKASI PKL
Route::get('verifikasi/pkl', [VerifikasiController::class, 'listPKL'])->middleware('auth','dosen');
Route::get('verifikasi/pkl/setujui/{id}', [VerifikasiController::class, 'doSetujuiPKL'])->middleware('auth','dosen');
Route::get('verifikasi/pkl/tolak/{id}', [VerifikasiController::class, 'doTolakPKL'])->middleware('auth','dosen');

//VERIFIKASI Skripsi
Route::get('verifikasi/skripsi', [VerifikasiController::class, 'listSkripsi'])->middleware('auth','dosen');
Route::get('verifikasi/skripsi/setujui/{id}', [VerifikasiController::class, 'doSetujuiSkripsi'])->middleware('auth','dosen');
Route::get('verifikasi/skripsi/tolak/{id}', [VerifikasiController::class, 'doTolakSkripsi'])->middleware('auth','dosen');

//PROGRESS MAHASISWA
Route::get('progress/mahasiswa', [DosenController::class, 'progressMahasiswa'])->middleware('auth','dosen');
Route::get('detail/mahasiswa', [DosenController::class, 'detailMahasiswa'])->middleware('auth','dosen');

//REKAP MAHASISWA
Route::get('/rekap/pkl', [DosenController::class, 'rekapPKL'])->middleware('auth','dosen');
Route::get('/rekap/skripsi', [DosenController::class, 'rekapSkripsi'])->middleware('auth','dosen');