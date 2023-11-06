<?php

namespace App\Http\Controllers;

use App\Models\PKL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PKLController extends Controller
{
    function index()
    {
        $pklList = PKL::all();

        return view('pkl.index', ['pklList' => $pklList]);
    }

    function list(Request $request)
    {
        $pkl = DB::select(
            "SELECT status_pkl, nilai, status, file FROM pkl
            WHERE status_pkl LIKE '%$request->s%' 
            OR nilai LIKE '%$request->int%'
            OR status LIKE '%$request->s%'
            OR file LIKE '%$request->s%'",
        );

        return view('entryPKL.list', ['pkl' => $pkl]);
    }

    function show()
    {
        $pkl = DB::select(
            "SELECT semester, sks_diambil, status FROM pkl"
        );
        return view('entryPKL.show', ['pkl' => $pkl]);
    }
    

    function buatPKL(){
        return view('mahasiswa.buat.pkl');
    }

    function doBuatPKL(Request $request)
    {
        $request->validate([
            'semester' => 'required|numeric',
            'sks' => 'required|numeric',
            'scan_pkl' => 'required|file|mimes:pdf|max:2048',
        ]);
    
        $pkl = new PKL;
        $pkl->status_pkl = $request->status_pkl;
        // $pkl->nilai = $request->sks;
        // $pkl->status = 1;
        $pkl->file = $request->file('scan_pkl')->store('pkl', 'public');
        $pkl->mahasiswa_id = Auth::user()->id;
        $pkl->save();
    
        return redirect('/buat/pkl')->with('success', 'PKL telah berhasil dibuat.');
    }
}
