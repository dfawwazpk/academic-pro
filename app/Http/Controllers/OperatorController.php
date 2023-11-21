<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\IRS;
use App\Models\JalurMasuk;
use App\Models\KHS;
use App\Models\Mahasiswa;
use App\Models\Operator;
use App\Models\StatusMahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OperatorController extends Controller
{
    function listMahasiswa(){
        $loggedInAccount = Operator::where('id', Auth::user()->id);
        $mahasiswaList = Mahasiswa::filter(request(['search', 'angkatan', 'status', 'jalur_masuk']))->get();
        $irsList = IRS::where('status', 2)->latest('created_at')->get();
        $statusList = StatusMahasiswa::all();
        $jalurMasukList = JalurMasuk::all();
        return view('operator.daftar.mahasiswa', [
            'title' => 'Daftar Mahasiswa',
            'loggedInAccount' => $loggedInAccount,
            'mahasiswaList' => $mahasiswaList,
            'irsList' => $irsList,
            'statusList' => $statusList,
            'jalurMasukList' => $jalurMasukList
        ]);
    }

    function listDosen(){
        $loggedInAccount = Operator::where('id', Auth::user()->id);
        $dosenList = Dosen::filter(request(['search']))->get();
        return view('operator.daftar.dosen', [
            'title' => 'Daftar Dosen',
            'loggedInAccount' => $loggedInAccount,
            'dosenList' => $dosenList
        ]);
    }
}
