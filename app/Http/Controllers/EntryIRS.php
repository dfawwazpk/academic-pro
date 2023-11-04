<?php

namespace App\Http\Controllers;

use App\Models\IRS;
use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class EntryIRS extends Controller
{
    function index()
    {
        // Tampilkan daftar IRS
        $irsList = Irs::all();

        return view('irs.index', ['irsList' => $irsList]);
    }

    function list(Request $request)
    {
        $irs = DB::select(
            "SELECT semester, sks_diambil, status, file FROM irs
            WHERE semester LIKE '%$request->int%'
            OR sks_diambi LIKE '%$request->int%'
            OR status LIKE '%$request->s%'
            OR file LIKE '%$request->s%'",
        );

        return view('entryIRS.list', ['irs' => $irs]);
    }

    function show()
    {
        $irs = DB::select(
            "SELECT semester, sks_diambil, status FROM irs"
        );
        return view('entryIRS.show', ['irs' => $irs]);
    }
    

    function entryIRS(){
        $entryIRS = IRS::all();
        
        return view('entryIRS.create', ['entryIRS' => $entryIRS]);
    }

    function doEntryIRS(Request $request)
    {
        // Validasi inputan
        $validatedData = $request->validate([
            'semester' => 'required|integer',
            'sks_diambil' => 'required|integer',
            'status' => 'required|string',
            'file' => 'required|string',
            'mahasiswa_id' => 'required|integer',
        ]);
    
        // Buat catatan IRS baru
        IRS::create($validatedData);
    
        return redirect('/entry/irs')->with('success', 'IRS telah berhasil dibuat.');
    }
    
}
