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
        $sksk = KHS::where('mahasiswa_id', Auth::user()->id)->where('status', 2)->latest('created_at')->take(1)->value('sks_total');
        $pklList = PKL::where('mahasiswa_id', Auth::user()->id)->get();
        $lastValidatedSemester = IRS::where('mahasiswa_id', Auth::user()->id)->where('status', 2)->latest('created_at')->take(1)->value('semester');
        $semester = $lastValidatedSemester ? $lastValidatedSemester : 1;
        return view('mahasiswa.buat.pkl', [
            'title' => 'Buat PKL',
            'loggedInAccount' => $loggedInAccount,
            'semester' => $semester,
            'sksk' => $sksk,
            'pklList' => $pklList,
        ]);
    }

    function doBuatPKL(Request $request)
    {
        $request->validate([
            'semester' => 'required|numeric|min:6',
            'nilai' => 'required|numeric',
            'scan_pkl' => 'required|file|mimes:pdf|max:2048',
        ]);
    
        // Mendapatkan total SKS dari KHS (sks_total)
        $totalSksKHS = KHS::where('mahasiswa_id', Auth::user()->id)
            ->where('status', 2)
            ->latest('created_at')
            ->take(1)
            ->value('sks_total');
    
        // Menambahkan total SKS PKL yang diajukan
        $totalSksPKL = $request->nilai; // Misalnya, nilai dijadikan jumlah SKS PKL
    
        // Menghitung total SKS keseluruhan
        $totalSks = $totalSksKHS + $totalSksPKL;
    
        // Memeriksa apakah total SKS sudah mencapai 100
        if ($totalSksKHS < 100) {
            return redirect()->back()->with('error', 'Total SKS harus mencapai 100 sebelum mengajukan PKL.');
        }
    
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
