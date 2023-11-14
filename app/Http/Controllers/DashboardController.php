<?php

namespace App\Http\Controllers;

//use App\Http\Middleware\Operator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
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
            $loggedInAccountName = Operator::where('id', Auth::user()->id)->value('nama');
            $nip = Operator::where('id', Auth::user()->id)->value('nip');
            $email = User::where('id', Auth::user()->id)->value('email');
            $jumlahMhs = Mahasiswa::count();
            $jumlahDsn = Dosen::count();

            return view('operator.dashboard', [
            "title" => "Dashboard",
            "loggedInAccountName" => $loggedInAccountName,
            "nim" => $nip,
            "email" => $email,
            "jumlahMhs" => $jumlahMhs,
            "jumlahDsn" => $jumlahDsn,
            ]);
        }
        if (Auth::user()->role_id==2) {
            return view('departemen.dashboard', [
            "title" => "Dashboard"
            ]);
        }
        if (Auth::user()->role_id==3) {
            $loggedInAccountName = Dosen::where('id', Auth::user()->id)->value('nama');
            $nip = Dosen::where('id', Auth::user()->id)->value('nip');

            return view('dosen.dashboard', [
            "title" => "Dashboard",
            "loggedInAccountName" => $loggedInAccountName,
            "nip" => $nip,
            ]);
        }
        if (Auth::user()->role_id == 4) {
            $loggedInAccountName = Mahasiswa::where('id', Auth::user()->id)->value('nama');
            $nim = Mahasiswa::where('id', Auth::user()->id)->value('nim');
            $ipk = KHS::where('mahasiswa_id', Auth::user()->id)->value('ipk');
            $ips = KHS::where('mahasiswa_id', Auth::user()->id)->value('ips');

            return view('mahasiswa.dashboard', [
                "title" => "Dashboard",
                "loggedInAccountName" => $loggedInAccountName,
                "nim" => $nim,
                "ipk" => $ipk,
                "ips" => $ips,
            ]);
        }
        
    }
}
