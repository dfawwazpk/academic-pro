<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departemen;
use App\Models\Dosen;
use App\Models\IRS;
use App\Models\JalurMasuk;
use App\Models\Mahasiswa;
use App\Models\Operator;
use App\Models\PKL;
use App\Models\Skripsi;
use App\Models\StatusMahasiswa;
use Illuminate\Support\Facades\Auth;

class DepartemenController extends Controller
{
    function listMahasiswa(){
        $loggedInAccount = Departemen::where('id', Auth::user()->id);
        $mahasiswaList = Mahasiswa::filter(request(['search', 'angkatan', 'status', 'jalur_masuk']))->get();
        $irsList = IRS::where('status', 2)->latest('created_at')->get();
        $statusList = StatusMahasiswa::all();
        $jalurMasukList = JalurMasuk::all();
        return view('departemen.daftar.mahasiswa', [
            'title' => 'Daftar Mahasiswa',
            'loggedInAccount' => $loggedInAccount,
            'mahasiswaList' => $mahasiswaList,
            'irsList' => $irsList,
            'statusList' => $statusList,
            'jalurMasukList' => $jalurMasukList
        ]);
    }
    function listDosen(){
        $loggedInAccount = Departemen::where('id', Auth::user()->id);
        $dosenList = Dosen::filter(request(['search']))->get();
        return view('departemen.daftar.dosen', [
            'title' => 'Daftar Dosen',
            'loggedInAccount' => $loggedInAccount,
            'dosenList' => $dosenList
        ]);
    }
    function rekapStatus($angkatan, $status){
        $loggedInAccount = Departemen::where('id', Auth::user()->id);
        $mahasiswaList = Mahasiswa::get();
        $statusMahasiswaList = StatusMahasiswa::get();
        if ($angkatan == '0') {
            $mahasiswaListStatus = Mahasiswa::where('angkatan', '0');
        } 
        else {
            if ($status == 'aktif') {
                $mahasiswaListStatus = Mahasiswa::where('angkatan', $angkatan)->where('status', 1);
            }
            else if ($status == 'nonaktif') {
                $mahasiswaListStatus = Mahasiswa::where('angkatan', $angkatan)->where('status', 2);
            }
            else if ($status == 'cuti') {
                $mahasiswaListStatus = Mahasiswa::where('angkatan', $angkatan)->where('status', 3);
            }
        }
        return view('departemen.rekap.status', [
            'title' => 'Rekap Mahasiswa',
            'loggedInAccount' => $loggedInAccount,
            'mahasiswaList' => $mahasiswaList,
            'mahasiswaListStatus' => $mahasiswaListStatus->get(),
            'statusMahasiswaList' => $statusMahasiswaList,
            'statusMahasiswa' => $status,
            'angkatanSelected' => $angkatan,
            'statusSelected' => $status
        ]);
    }
    function printRekapStatusAll(){
        $mahasiswaList = Mahasiswa::get();
        return view('departemen.rekap.statusAllPrint', [
            'title' => 'Print Rekap Mahasiswa',
            'mahasiswaList' => $mahasiswaList,
        ]);
    }
    function printRekapStatus($angkatan, $status){
        $mahasiswaList = Mahasiswa::get();
        $statusMahasiswaList = StatusMahasiswa::get();
        $counter = 1;
        if ($angkatan == '0') {
            $mahasiswaListStatus = Mahasiswa::where('angkatan', '0');
        } 
        else {
            if ($status == 'aktif') {
                $mahasiswaListStatus = Mahasiswa::where('angkatan', $angkatan)->where('status', 1);
            }
            else if ($status == 'nonaktif') {
                $mahasiswaListStatus = Mahasiswa::where('angkatan', $angkatan)->where('status', 2);
            }
            else if ($status == 'cuti') {
                $mahasiswaListStatus = Mahasiswa::where('angkatan', $angkatan)->where('status', 3);
            }
        }
         
        return view('departemen.rekap.statusPrint', [
            'title' => 'Print Rekap Mahasiswa',
            'mahasiswaList' => $mahasiswaList,
            'mahasiswaListStatus' => $mahasiswaListStatus->get(),
            'statusMahasiswaList' => $statusMahasiswaList,
            'statusMahasiswa' => $status, 
            'counter' => $counter,
            'angkatanSelected' => $angkatan,
            'statusSelected' => $status
        ]);
    }
    function rekapPKL($angkatan, $status){
        $loggedInAccount = Departemen::where('id', Auth::user()->id);
        $mahasiswaList = Mahasiswa::get();
        $pklList = PKL::where('status', 2)->get();
        if ($angkatan == '0') {
            $mahasiswaListAngkatan = Mahasiswa::where('angkatan', '0');
        } 
        else {
            if ($status == 'sudah') {
                $mahasiswaListAngkatan = Mahasiswa::where('angkatan', $angkatan)->whereNotNull('lulus_pkl');
            }
            else if ($status == 'belum') {
                $mahasiswaListAngkatan = Mahasiswa::where('angkatan', $angkatan)->whereNull('lulus_pkl');
            }
        }
        return view('departemen.rekap.pkl', [
            'title' => 'Rekap PKL',
            'loggedInAccount' => $loggedInAccount,
            'mahasiswaList' => $mahasiswaList,
            'mahasiswaListAngkatan' => $mahasiswaListAngkatan->get(),
            'pklList' => $pklList,
            'statusPKL' => $status,
            'angkatanSelected' => $angkatan
        ]);
    }
    function printRekapPKLAll(){
        $mahasiswaList = Mahasiswa::get();
        return view('departemen.rekap.pklAllPrint', [
            'title' => 'Print Rekap PKL',
            'mahasiswaList' => $mahasiswaList,
        ]);
    }
    function printRekapPKL($angkatan, $status){
        $mahasiswaList = Mahasiswa::get();
        $pklList = PKL::where('status', 2)->get();
        $counter = 1;
        if ($angkatan == '0') {
            $mahasiswaListAngkatan = Mahasiswa::where('angkatan', '0');
        } 
        else {
            if ($status == 'sudah') {
                $mahasiswaListAngkatan = Mahasiswa::where('angkatan', $angkatan)->whereNotNull('lulus_pkl');
            }
            else if ($status == 'belum') {
                $mahasiswaListAngkatan = Mahasiswa::where('angkatan', $angkatan)->whereNull('lulus_pkl');
            }
        }
        return view('departemen.rekap.pklPrint', [
            'title' => 'Print Rekap PKL',
            'mahasiswaList' => $mahasiswaList,
            'mahasiswaListAngkatan' => $mahasiswaListAngkatan->get(),
            'pklList' => $pklList,
            'statusPKL' => $status,
            'counter' => $counter,
            'angkatanSelected' => $angkatan
        ]);
    }
    function rekapSkripsi($angkatan, $status){
        $loggedInAccount = Departemen::where('id', Auth::user()->id);
        $mahasiswaList = Mahasiswa::get();
        $skripsiList = Skripsi::where('status', 2)->get();
        if ($angkatan == '0') {
            $mahasiswaListAngkatan = Mahasiswa::where('angkatan', '0');
        } 
        else {
            if ($status == 'sudah') {
                $mahasiswaListAngkatan = Mahasiswa::where('angkatan', $angkatan)->whereNotNull('lulus_skripsi');
            }
            else if ($status == 'belum') {
                $mahasiswaListAngkatan = Mahasiswa::where('angkatan', $angkatan)->whereNull('lulus_skripsi');
            }
        }
        return view('departemen.rekap.skripsi', [
            'title' => 'Rekap Skripsi',
            'loggedInAccount' => $loggedInAccount,
            'mahasiswaList' => $mahasiswaList,
            'mahasiswaListAngkatan' => $mahasiswaListAngkatan->get(),
            'skripsiList' => $skripsiList,
            'statusSkripsi' => $status,
            'angkatanSelected' => $angkatan
        ]);
    }
    function printRekapSkripsiAll(){
        $mahasiswaList = Mahasiswa::get();
        return view('departemen.rekap.skripsiAllPrint', [
            'title' => 'Rekap Skripsi',
            'mahasiswaList' => $mahasiswaList,
        ]);
    }
    function printRekapSkripsi($angkatan, $status){
        $mahasiswaList = Mahasiswa::get();
        $skripsiList = Skripsi::where('status', 2)->get();
        $counter = 1;

        if ($angkatan == '0') {
            $mahasiswaListAngkatan = Mahasiswa::where('angkatan', '0');
        } 
        else {
            if ($status == 'sudah') {
                $mahasiswaListAngkatan = Mahasiswa::where('angkatan', $angkatan)->whereNotNull('lulus_skripsi');
            }
            else if ($status == 'belum') {
                $mahasiswaListAngkatan = Mahasiswa::where('angkatan', $angkatan)->whereNull('lulus_skripsi');
            }
        }
        return view('departemen.rekap.skripsiPrint', [
            'title' => 'Rekap Skripsi',
            'mahasiswaList' => $mahasiswaList,
            'mahasiswaListAngkatan' => $mahasiswaListAngkatan->get(),
            'skripsiList' => $skripsiList,
            'statusSkripsi' => $status,
            'counter' => $counter,
            'angkatanSelected' => $angkatan
        ]);
    }
}
