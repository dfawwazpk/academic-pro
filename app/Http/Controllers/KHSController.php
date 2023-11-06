<?php

namespace App\Http\Controllers;

use App\Models\KHS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class KHSController extends Controller
{
    function index()
    {
        $khsList = KHS::all();

        return view('khs.index', ['khsList' => $khsList]);
    }

    function list(Request $request)
    {
        $khs = DB::select(
            "SELECT semester, sks_diambil, sks_total, ips, ipk, status, file FROM khs
            WHERE semester LIKE '%$request->int%'
            OR sks_diambi LIKE '%$request->int%'
            OR sks_total LIKE '%$request->int%'
            OR ips LIKE '%$request->int%'
            OR ipk LIKE '%$request->int%'
            OR status LIKE '%$request->s%'
            OR file LIKE '%$request->s%'",
        );

        return view('entryKHS.list', ['khs' => $khs]);
    }

    function show()
    {
        $khs = DB::select(
            "SELECT semester, sks_diambil, sks_total, ips, ipk, status FROM ipk"
        );
        return view('entryKHS.show', ['khs' => $khs]);
    }
    

    function buatKHS(){
        return view('mahasiswa.buat.khs');
    }

    function doBuatKHS(Request $request)
    {
        $request->validate([
            'semester' => 'required|numeric',
            'sks_semester' => 'required|numeric',
            'sks_total' => 'required|numeric',
            'ips' => 'required|numeric',
            'ipk' => 'required|numeric',
            'scan_khs' => 'required|file|mimes:pdf|max:2048',
        ]);
    
        $khs = new KHS;
        $khs->semester = $request->semester;
        $khs->sks_semester = $request->sks_semester;
        $khs->sks_total = $request->sks_total;
        $khs->ips = $request->ips;
        $khs->ipk = $request->ipk;
        $khs->status = 1;
        $khs->file = $request->file('scan_khs')->store('khs', 'public');
        $khs->mahasiswa_id = Auth::user()->id;
        $khs->save();
    
        return redirect('/buat/khs')->with('success', 'KHS telah berhasil dibuat.');
    }
    
}
