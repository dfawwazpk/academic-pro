<?php

namespace App\Http\Controllers;

use App\Models\IRS;
use App\Models\KHS;
use App\Models\Mahasiswa;
use App\Models\PKL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PKLController extends Controller
{
    function riwayatPKL(){
        $loggedInAccount = Mahasiswa::where('id', Auth::user()->id);
        $ipk = KHS::where('mahasiswa_id', Auth::user()->id)->where('status', 2)->latest('created_at')->take(1)->value('ipk');
        $sksk = KHS::where('mahasiswa_id', Auth::user()->id)->where('status', 2)->latest('created_at')->take(1)->value('sks_total');
        $pklList = PKL::where('mahasiswa_id', Auth::user()->id)->get();
        return view('mahasiswa.riwayat.pkl', [
            "title" => "Riwayat PKL",
            "loggedInAccount" => $loggedInAccount,
            "ipk" => $ipk,
            "sksk" => $sksk,
            'pklList' => $pklList,
        ]);
    }

    function buatPKL(){
        $loggedInAccount = Mahasiswa::where('id', Auth::user()->id);
        $semester = IRS::where('mahasiswa_id', Auth::user()->id)->where('status', 2)->latest('created_at')->take(1)->value('semester');
        return view('mahasiswa.buat.pkl', [
            'title' => 'Buat PKL',
            'loggedInAccount' => $loggedInAccount,
            'semester' => $semester,
        ]);
    }

    function doBuatPKL(Request $request)
    {
        $request->validate([
            'semester' => 'required|numeric|min:6',
            'nilai' => 'required|numeric',
            'scan_pkl' => 'required|file|mimes:pdf|max:2048',
        ]);
    
        $pkl = new PKL;
        $pkl->semester = $request->semester;
        $pkl->nilai = $request->nilai;
        $pkl->status_pkl = "Lulus";
        $pkl->status = 1;
        $pkl->file = $request->file('scan_pkl')->store('pkl', 'public');
        $pkl->mahasiswa_id = Auth::user()->id;

        $pkl->save();
    
        return redirect('/riwayat/pkl')->with('success', 'PKL telah berhasil dibuat.');
    }
}
