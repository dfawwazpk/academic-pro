<?php

namespace App\Http\Controllers;

use App\Models\IRS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class IRSController extends Controller
{
    function index()
    {
        // Tampilkan daftar IRS
        $irsList = Irs::all();

        return view('irs.index', ['irsList' => $irsList]);
    }

    function list(Request $request)
    {
        $irs = DB::select(
            "SELECT semester, sks_diambil, status, file FROM irs
            WHERE semester LIKE '%$request->int%'
            OR sks_diambi LIKE '%$request->int%'
            OR status LIKE '%$request->s%'
            OR file LIKE '%$request->s%'",
        );

        return view('entryIRS.list', ['irs' => $irs]);
    }

    function show()
    {
        $irs = DB::select(
            "SELECT semester, sks_diambil, status FROM irs"
        );
        return view('entryIRS.show', ['irs' => $irs]);
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
    
        return redirect('/buat/irs')->with('success', 'IRS telah berhasil dibuat.');
    }
    
}
