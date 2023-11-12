<?php

namespace App\Http\Controllers;

use App\Models\Skripsi;
use App\Models\IRS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkripsiController extends Controller
{  
    function riwayatSkripsi(){
        $skripsiList = Skripsi::where('mahasiswa_id', Auth::user()->id)->get();
        return view('mahasiswa.riwayat.skripsi', [
            'skripsiList' => $skripsiList,
        ]);
    }

    function buatSkripsi(){
        return view('mahasiswa.buat.skripsi');
    }

    function doBuatSkripsi(Request $request)
    {
        $request->validate([
            'status_skripsi' => 'required|string',
            'scan_skripsi' => 'required|file|mimes:pdf|max:2048',
        ]);

        if ($request->status_pkl == "Lulus") {
            $request->validate([
                'nilai' => 'required|numeric',
            ]);
        }
    
        $skripsi = new Skripsi;
        $skripsi->status_skripsi = $request->status_skripsi;
        $skripsi->status = 1;
        $skripsi->file = $request->file('scan_skripsi')->store('skripsi', 'public');
        $skripsi->mahasiswa_id = Auth::user()->id;

        if ($request->status_pkl == "Lulus") {
            $skripsi->nilai = $request->nilai;
            $skripsi->tanggal_lulus_sidang = date('Y-m-d');
            $skripsi->lama_studi = IRS::where('status', '2')->latest('created_at')->first()->semester;
        }

        $skripsi->save();
    
        return redirect('/buat/skripsi')->with('success', 'Skripsi telah berhasil dibuat.');
    }    
}
