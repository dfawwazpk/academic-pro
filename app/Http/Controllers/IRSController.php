<?php

namespace App\Http\Controllers;

use App\Models\IRS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class IRSController extends Controller
{
    function riwayatIRS(){
        $irsList = IRS::where('mahasiswa_id', Auth::user()->id)->get();
        return view('mahasiswa.riwayat.irs', [
            'irsList' => $irsList,
        ]);
    }

    function buatIRS(){
        return view('mahasiswa.buat.irs');
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
