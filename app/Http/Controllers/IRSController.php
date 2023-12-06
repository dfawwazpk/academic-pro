<?php

namespace App\Http\Controllers;

use App\Models\IRS;
use App\Models\KHS;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class IRSController extends Controller
{
    function riwayatIRS(){
        $loggedInAccount = Mahasiswa::where('id', Auth::user()->id);
        $ipk = KHS::where('mahasiswa_id', Auth::user()->id)->where('status', 2)->latest('created_at')->take(1)->value('ipk');
        $sksk = KHS::where('mahasiswa_id', Auth::user()->id)->where('status', 2)->latest('created_at')->take(1)->value('sks_total');
        $irsList = IRS::where('mahasiswa_id', Auth::user()->id)->get();
        return view('mahasiswa.riwayat.irs', [
            "title" => "Riwayat IRS",
            "loggedInAccount" => $loggedInAccount,
            "ipk" => $ipk,
            "sksk" => $sksk,
            'irsList' => $irsList
        ]);
    }

    function buatIRS(){
        $loggedInAccount = Mahasiswa::where('id', Auth::user()->id);
        $irsWaitingValidationList = IRS::where('mahasiswa_id', Auth::user()->id)->where('status', 1)->get();
        return view('mahasiswa.buat.irs', [
            "title" => "Buat IRS",
            "loggedInAccount" => $loggedInAccount,
            'irsWaitingValidationList' => $irsWaitingValidationList
        ]);
    }

    function doBuatIRS(Request $request)
    {
        $request->validate([
            'sks' => 'required|numeric',
            'scan_irs' => 'required|file|mimes:pdf|max:2048',
        ]);
    
        // Mendapatkan semester terakhir yang diisi IRS oleh pengguna
        $lastFilledSemester = IRS::where('mahasiswa_id', Auth::user()->id)->max('semester');
    
        // Mendapatkan semester terakhir yang divalidasi di KHS
        $lastValidatedSemester = KHS::where('mahasiswa_id', Auth::user()->id)
            ->where('status', 2)
            ->latest('created_at')
            ->take(1)
            ->value('semester');
    
        // Menggunakan semester terakhir yang divalidasi di KHS jika ada, atau 1 jika belum ada
        $nextSemester = $lastValidatedSemester ? $lastValidatedSemester + 1 : 1;
    
        // Memeriksa apakah semester yang diajukan sesuai dengan aturan yang diizinkan
        if ($request->filled('semester') && $request->semester != $nextSemester) {
            return redirect()->back()->with('error', 'Anda hanya dapat mengisi IRS untuk semester '.$nextSemester);
        }
    
        // Menggunakan nilai semester yang dihitung
        $semesterToFill = $request->filled('semester') ? $request->semester : $nextSemester;
    
        // ... (lanjutkan dengan logika lainnya)
    
        $irs = new IRS;
        $irs->semester = $semesterToFill;
        $irs->sks_diambil = $request->sks;
        $irs->status = 1;
        $irs->file = $request->file('scan_irs')->store('irs', 'public');
        $irs->mahasiswa_id = Auth::user()->id;
        $irs->save();
    
        return redirect('/riwayat/irs')->with('success', 'IRS telah berhasil dibuat.');
    }
    
    
}
