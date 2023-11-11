<?php

namespace App\Http\Controllers;

use App\Models\Skripsi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SkripsiController extends Controller
{
    function index()
    {
        $skripsiList = Skripsi::all();

        return view('skripsi.index', ['skripsiList' => $skripsiList]);
    }

    function list(Request $request)
    {
        $skripsi = DB::select(
            "SELECT status_skripsi, nilai, tanggal_lulus_sidang, lama_studi, status, file  FROM skripsi
            WHERE status_skripsi LIKE '%$request->s%'
            OR nilai LIKE '%$request->int%'
            OR tanggal_lulus_sidang LIKE '%$request->datetime%'
            OR lama_studi LIKE '%$request->int%'
            OR status LIKE '%$request->s%'
            OR file LIKE '%$request->s%'",
        );

        return view('entrySkripsi.list', ['skripsi' => $skripsi]);
    }

    function show()
    {
        $skripsi = DB::select(
            "SELECT tatus_skripsi, nilai, tanggal_lulus_sidang, lama_studi, status FROM skripsi"
        );
        return view('entrySkripsi.show', ['skripsi' => $skripsi]);
    }
    

    function buatSkripsi(){
        return view('mahasiswa.buat.skripsi');
    }

    function riwayatSKRIPSI(){
        return view('mahasiswa.riwayat.skripsi');
    }

    function doBuatSkripsi(Request $request)
    {
        $request->validate([
            'status_skripsi' => 'required|string',
            'status' => 'required|string',
            'scan_skripsi' => 'required|file|mimes:pdf|max:2048',
        ]);
    
        $skripsi = new Skripsi;
        $skripsi->status_skripsi = $request->status_skripsi;
        //$skripsi->nilai = $request->nilai;
        $skripsi->status = 1;
        $skripsi->file = $request->file('scan_skripsi')->store('skripsi', 'public');
        $skripsi->mahasiswa_id = Auth::user()->id;
        $skripsi->save();
    
        return redirect('/buat/skripsi')->with('success', 'Skripsi telah berhasil dibuat.');
    }    
}
