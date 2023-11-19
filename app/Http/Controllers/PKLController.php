<?php

namespace App\Http\Controllers;

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
        return view('mahasiswa.buat.pkl', [
            'title' => 'Buat PKL',
            'loggedInAccount' => $loggedInAccount
        ]);
    }

    function doBuatPKL(Request $request)
    {
        $request->validate([
            'status_pkl' => 'required|string',
            'scan_pkl' => 'required|file|mimes:pdf|max:2048',
        ]);

        if ($request->status_pkl == "Lulus") {
            $request->validate([
                'nilai' => 'required|numeric',
            ]);
        }
    
        $pkl = new PKL;
        $pkl->status_pkl = $request->status_pkl;
        $pkl->status = 1;
        $pkl->file = $request->file('scan_pkl')->store('pkl', 'public');
        $pkl->mahasiswa_id = Auth::user()->id;

        if ($request->status_pkl == "Lulus") {
            $pkl->nilai = $request->nilai;
        }

        $pkl->save();
    
        return redirect('/buat/pkl')->with('success', 'PKL telah berhasil dibuat.');
    }
}
