<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
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
        $loggedInAccountName = Dosen::where('id', Auth::user()->id)->value('nama');
        $mahasiswaList = Mahasiswa::where('dosen_wali', Auth::user()->id)->get();
        $irsList = IRS::where('status', 1)->get();
    
        return view('dosen.verifikasi.irs', [
            'title' => 'Verifikasi IRS',
            'loggedInAccountName' => $loggedInAccountName,
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
        $loggedInAccountName = Dosen::where('id', Auth::user()->id)->value('nama');
        $mahasiswaList = Mahasiswa::where('dosen_wali', Auth::user()->id)->get();
        $khsList = KHS::where('status', 1)->get();
    
        return view('dosen.verifikasi.khs', [
            'title' => 'Verifikasi KHS',
            'loggedInAccountName' => $loggedInAccountName,
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
        $khs = KHS::where('id', $id)->first();
        $khs->status = 3;
        $khs->save();

        return redirect('verifikasi/khs');
    }

    function listPKL()
    {
        $loggedInAccountName = Dosen::where('id', Auth::user()->id)->value('nama');
        $mahasiswaList = Mahasiswa::where('dosen_wali', Auth::user()->id)->get();
        $pklList = PKL::where('status', 1)->get();
    
        return view('dosen.verifikasi.pkl', [
            'title' => 'Verifikasi PKL',
            'loggedInAccountName' => $loggedInAccountName,
            'mahasiswaList' => $mahasiswaList,
            'pklList' => $pklList,
        ]);
    }
    
    function doSetujuiPKL($id)
    {
        $pkl = PKL::where('id', $id)->first();
        $pkl->status = 2;
        $pkl->save();

        return redirect('verifikasi/pkl');
    }

    function doTolakPKL($id)
    {
        $pkl = PKL::where('id', $id)->first();
        $pkl->status = 3;
        $pkl->save();

        return redirect('verifikasi/pkl');
    }

    function listSkripsi()
    {
        $loggedInAccountName = Dosen::where('id', Auth::user()->id)->value('nama');
        $mahasiswaList = Mahasiswa::where('dosen_wali', Auth::user()->id)->get();
        $skripsiList = Skripsi::where('status', 1)->get();
    
        return view('dosen.verifikasi.skripsi', [
            'title' => 'Verifikasi Skripsi',
            'loggedInAccountName' => $loggedInAccountName,
            'mahasiswaList' => $mahasiswaList,
            'skripsiList' => $skripsiList,
        ]);
    }
    
    function doSetujuiSkripsi($id)
    {
        $skripsi = Skripsi::where('id', $id)->first();
        $skripsi->status = 2;
        $skripsi->save();

        return redirect('verifikasi/pkl');
    }

    function doTolakSkripsi($id)
    {
        $skripsi = Skripsi::where('id', $id)->first();
        $skripsi->status = 3;
        $skripsi->save();

        return redirect('verifikasi/skripsi');
    }
}
