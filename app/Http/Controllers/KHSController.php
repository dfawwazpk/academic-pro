<?php

namespace App\Http\Controllers;

use App\Models\KHS;
use App\Models\IRS;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class KHSController extends Controller
{
    function riwayatKHS(){
        $loggedInAccount = Mahasiswa::where('id', Auth::user()->id);
        $ipk = KHS::where('mahasiswa_id', Auth::user()->id)->where('status', 2)->latest('created_at')->take(1)->value('ipk');
        $sksk = KHS::where('mahasiswa_id', Auth::user()->id)->where('status', 2)->latest('created_at')->take(1)->value('sks_total');
        $khsList = KHS::where('mahasiswa_id', Auth::user()->id)->get();
        return view('mahasiswa.riwayat.khs', [
            "title" => "Riwayat KHS",
            "loggedInAccount" => $loggedInAccount,
            "ipk" => $ipk,
            "sksk" => $sksk,
            'khsList' => $khsList,
        ]);
    }

    function buatKHS(){
        $loggedInAccount = Mahasiswa::where('id', Auth::user()->id);
        $khsWaitingValidationList = KHS::where('mahasiswa_id', Auth::user()->id)->where('status', 1)->get();
        return view('mahasiswa.buat.khs', [
            "title" => "Buat KHS",
            "loggedInAccount" => $loggedInAccount,
            'khsWaitingValidationList' => $khsWaitingValidationList
        ]);
    }

    function doBuatKHS(Request $request)
    {
        $request->validate([
            'sks_semester' => 'required|numeric',
            'sks_total' => 'required|numeric',
            'ips' => 'required|numeric',
            'ipk' => 'required|numeric',
            'scan_khs' => 'required|file|mimes:pdf|max:2048',
        ]);
    
        // Mendapatkan semester terakhir yang diisi KHS oleh pengguna
        $lastFilledSemester = KHS::where('mahasiswa_id', Auth::user()->id)->max('semester');
    
        // Mendapatkan semester terakhir yang divalidasi di IRS
        $lastValidatedSemester = IRS::where('mahasiswa_id', Auth::user()->id)
            ->where('status', 2)
            ->latest('created_at')
            ->take(1)
            ->value('semester');
    
        // Menggunakan semester terakhir yang divalidasi di IRS jika ada, atau 1 jika belum ada
        $nextSemester = $lastValidatedSemester ? $lastValidatedSemester : 1;
    
        // Memeriksa apakah semester yang diajukan sesuai dengan aturan yang diizinkan
        if ($request->filled('semester') && $request->semester != $nextSemester) {
            return redirect()->back()->with('error', 'Anda hanya dapat mengisi KHS untuk semester '.$nextSemester);
        }
    
        // Menggunakan nilai semester yang dihitung
        $semesterToFill = $request->filled('semester') ? $request->semester : $nextSemester;
    
        $khs = new KHS;
        $khs->semester = $semesterToFill;
        $khs->sks_semester = $request->sks_semester;
        $khs->sks_total = $request->sks_total;
        $khs->ips = $request->ips;
        $khs->ipk = $request->ipk;
        $khs->status = 1;
        $khs->file = $request->file('scan_khs')->store('khs', 'public');
        $khs->mahasiswa_id = Auth::user()->id;
        $khs->save();
    
        return redirect('/riwayat/khs')->with('success', 'KHS telah berhasil dibuat.');
    }
    
}
