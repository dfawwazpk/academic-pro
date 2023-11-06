<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\IRS;
use App\Models\KHS;
use App\Models\PKL;
use App\Models\Skripsi;
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
        $irsList = Irs::all();
        $khsList = KHS::all();
        $pklList = PKL::all();
        $skripsiList = Skripsi::all();

        return view('verifikasi.index', [
            'irsList' => $irsList,
            'khsList' => $khsList,
            'pklList' => $pklList,
            'skripsiList' => $skripsiList,
        ]);
    }
}
