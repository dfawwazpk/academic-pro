<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\IRS;
use App\Models\KHS;
use App\Models\PKL;
use App\Models\Skripsi;
use App\Models\StatusBerkas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class VerifikasiController extends Controller
{
    function listIRS()
    {
        $mahasiswaList = Mahasiswa::where('dosen_wali', Auth::user()->id)->get();
        $irsList = IRS::where('status', 1)->get();
    
        return view('dosen.verifikasi.irs', [
            'mahasiswaList' => $mahasiswaList,
            'irsList' => $irsList,
        ]);
    }
    
    function doSetujuiIRS($id)
    {
        $irs = IRS::where('id', $id)->first();
        $irs->status = 2;
        $irs->save();

        return redirect('verifikasi/irs');
    }

    function doTolakIRS($id)
    {
        $irs = IRS::where('id', $id)->first();
        $irs->status = 3;
        $irs->save();

        return redirect('verifikasi/irs');
    }

    function listKHS()
    {
        $mahasiswaList = Mahasiswa::where('dosen_wali', Auth::user()->id)->get();
        $khsList = KHS::where('status', 1)->get();
    
        return view('dosen.verifikasi.khs', [
            'mahasiswaList' => $mahasiswaList,
            'khsList' => $khsList,
        ]);
    }

    function doSetujuiKHS($id)
    {
        $khs = KHS::where('id', $id)->first();
        $khs->status = 2;
        $khs->save();

        return redirect('verifikasi/khs');
    }

    function doTolakKHS($id)
    {
        $khs = IRS::where('id', $id)->first();
        $khs->status = 3;
        $khs->save();

        return redirect('verifikasi/khs');
    }
}
