<?php

namespace App\Http\Controllers;

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
        $loggedInAccountName = Operator::where('id', Auth::user()->id)->value('nama');
        $mahasiswaList = Mahasiswa::all();
        $irsList = IRS::where('status', 2)->latest('created_at')->get();
        $statusList = StatusMahasiswa::all();
        $jalurMasukList = JalurMasuk::all();
        return view('operator.daftar.mahasiswa', [
            'title' => 'Daftar Mahasiswa',
            'loggedInAccountName' => $loggedInAccountName,
            'mahasiswaList' => $mahasiswaList,
            'irsList' => $irsList,
            'statusList' => $statusList,
            'jalurMasukList' => $jalurMasukList
        ]);
    }
}
