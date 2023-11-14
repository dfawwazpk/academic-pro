<?php

namespace App\Http\Controllers;

use App\Models\IRS;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class IRSController extends Controller
{
    function riwayatIRS(){
        $loggedInAccountName = Mahasiswa::where('id', Auth::user()->id)->value('nama');
        $irsList = IRS::where('mahasiswa_id', Auth::user()->id)->get();
        return view('mahasiswa.riwayat.irs', [
            "title" => "Riwayat IRS",
            "loggedInAccountName" => $loggedInAccountName,
            'irsList' => $irsList
        ]);
    }

    function buatIRS(){
        $loggedInAccountName = Mahasiswa::where('id', Auth::user()->id)->value('nama');
        return view('mahasiswa.buat.irs', [
            "title" => "Buat IRS",
            "loggedInAccountName" => $loggedInAccountName
        ]);
    }

    function doBuatIRS(Request $request)
    {
        $request->validate([
            'semester' => 'required|numeric',
            'sks' => 'required|numeric',
            'scan_irs' => 'required|file|mimes:pdf|max:2048',
        ]);
    
        $irs = new IRS;
        $irs->semester = $request->semester;
        $irs->sks_diambil = $request->sks;
        $irs->status = 1;
        $irs->file = $request->file('scan_irs')->store('irs', 'public');
        $irs->mahasiswa_id = Auth::user()->id;
        $irs->save();
    
        return redirect('/riwayat/irs')->with('success', 'IRS telah berhasil dibuat.');
    }
}
