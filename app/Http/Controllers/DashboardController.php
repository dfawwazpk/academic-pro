<?php

namespace App\Http\Controllers;

//use App\Http\Middleware\Operator;
use Illuminate\Support\Facades\Auth;
use App\Models\Operator;
use App\Models\Dosen;
// use App\Models\;
use App\Models\Mahasiswa;
use App\Models\KHS;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->role_id==1) {
            $namaOp = Operator::where('id', Auth::user()->id)->value('nama');
            $nipOp = Operator::where('id', Auth::user()->id)->value('nip');

            return view('operator.dashboard', [
            "title" => "Dashboard",
            "nama" => $namaOp,
            "nim" => $nipOp,
            ]);
        }
        if (Auth::user()->role_id==2) {
            return view('departemen.dashboard', [
            "title" => "Dashboard"
            ]);
        }
        if (Auth::user()->role_id==3) {
            return view('dosen.dashboard', [
            "title" => "Dashboard"
            ]);
        }
        if (Auth::user()->role_id == 4) {
            $nama = Mahasiswa::where('id', Auth::user()->id)->value('nama');
            $nim = Mahasiswa::where('id', Auth::user()->id)->value('nim');
            $ipk = KHS::where('mahasiswa_id', Auth::user()->id)->value('ipk');
            $ips = KHS::where('mahasiswa_id', Auth::user()->id)->value('ips');

            return view('mahasiswa.dashboard', [
                "title" => "Dashboard",
                "nama" => $nama,
                "nim" => $nim,
                "ipk" => $ipk,
                "ips" => $ips,
            ]);
        }
        
    }
}
