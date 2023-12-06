<?php

namespace App\Http\Controllers;

use App\Models\KHS;
use App\Models\Skripsi;
use App\Models\IRS;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkripsiController extends Controller
{  
    function riwayatSkripsi(){
        $loggedInAccount = Mahasiswa::where('id', Auth::user()->id);
        $ipk = KHS::where('mahasiswa_id', Auth::user()->id)->where('status', 2)->latest('created_at')->take(1)->value('ipk');
        $sksk = KHS::where('mahasiswa_id', Auth::user()->id)->where('status', 2)->latest('created_at')->take(1)->value('sks_total');
        $skripsiList = Skripsi::where('mahasiswa_id', Auth::user()->id)->get();
        return view('mahasiswa.riwayat.skripsi', [
            "title" => "Riwayat Skripsi",
            "loggedInAccount" => $loggedInAccount,
            "ipk" => $ipk,
            "sksk" => $sksk,
            'skripsiList' => $skripsiList,
        ]);
    }

    function buatSkripsi(){
        $loggedInAccount = Mahasiswa::where('id', Auth::user()->id);
        $semester = IRS::where('mahasiswa_id', Auth::user()->id)->where('status', 2)->latest('created_at')->take(1)->value('semester');
        return view('mahasiswa.buat.skripsi', [
            'title' => 'Buat Skripsi',
            'loggedInAccount' => $loggedInAccount,
            'semester' => $semester,
        ]);
    }

    function doBuatSkripsi(Request $request)
    {
        $request->validate([
            'semester' => 'required|numeric|min:7',
            'nilai' => 'required|numeric',
            'scan_skripsi' => 'required|file|mimes:pdf|max:2048',
        ]);
    
        // Mendapatkan total SKS dari KHS (sks_total)
        $totalSksKHS = KHS::where('mahasiswa_id', Auth::user()->id)
            ->where('status', 2)
            ->latest('created_at')
            ->take(1)
            ->value('sks_total');
    
        // Menambahkan total SKS Skripsi yang diajukan
        $totalSksSkripsi = $request->nilai; // Misalnya, nilai dijadikan jumlah SKS Skripsi
    
        // Menghitung total SKS keseluruhan
        $totalSks = $totalSksKHS + $totalSksSkripsi;
    
        // Memeriksa apakah total SKS sudah mencapai 120
        if ($totalSks < 120) {
            return redirect()->back()->with('error', 'Total SKS harus mencapai 120 sebelum mengajukan Skripsi.');
        }
    
        $skripsi = new Skripsi;
        $skripsi->semester = $request->semester;
        $skripsi->nilai = $request->nilai;
        $skripsi->status_skripsi = "Lulus";
        $skripsi->tanggal_lulus_sidang = date('Y-m-d');
        $skripsi->lama_studi = IRS::where('status', '2')->latest('created_at')->first()->semester;
        $skripsi->status = 1;
        $skripsi->file = $request->file('scan_skripsi')->store('skripsi', 'public');
        $skripsi->mahasiswa_id = Auth::user()->id;
    
        $skripsi->save();
    
        return redirect('/riwayat/skripsi')->with('success', 'Skripsi telah berhasil dibuat.');
    }
     
}
