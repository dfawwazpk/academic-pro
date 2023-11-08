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
    function index()
    {
        $irsList = IRS::where('status', 1)->get();
        $khsList = KHS::where('status', 1)->get();
        $pklList = PKL::where('status', 1)->get();
        $skripsiList = Skripsi::where('status', 1)->get();
    
        return view('dosen.verifikasi.index', [
            'irsList' => $irsList,
            'khsList' => $khsList,
            'pklList' => $pklList,
            'skripsiList' => $skripsiList,
        ]);
    }
    

    function doVerifikasi($id)
    {
        $verifikasi = DB::select("SELECT * FROM status_berkas WHERE id = ?", [$id]);
        if($verifikasi){
            $query1 = DB::update("UPDATE irs SET status = 1 WHERE id = ?", [$id]);
            $query2 = DB::update("UPDATE khs SET status = 1 WHERE id = ?", [$id]);
            $query3 = DB::update("UPDATE pkl SET status = 1 WHERE id = ?", [$id]);
            $query4 = DB::update("UPDATE skripsi SET status = 1 WHERE id = ?", [$id]);
            return redirect()->route('/verifikasi-berkas')->with('success', 'Verifikasi telah berhasil dibuat.');
        } else {
            return redirect()->route('/verifikasi-berkas');
        }
    }
}
