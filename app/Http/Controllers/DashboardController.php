<?php

namespace App\Http\Controllers;

//use App\Http\Middleware\Operator;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Operator;
use App\Models\Dosen;
use App\Models\Departemen;
// use App\Models\;
use App\Models\Mahasiswa;
use App\Models\KHS;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->role_id==1) {
            $loggedInAccount = Operator::where('id', Auth::user()->id);
            $nip = Operator::where('id', Auth::user()->id)->value('nip');
            $email = User::where('id', Auth::user()->id)->value('email');
            $jumlahMhs = Mahasiswa::count();
            $jumlahDsn = Dosen::count();

            return view('operator.dashboard', [
            "title" => "Dashboard",
            "loggedInAccount" => $loggedInAccount,
            "nim" => $nip,
            "email" => $email,
            "jumlahMhs" => $jumlahMhs,
            "jumlahDsn" => $jumlahDsn,
            ]);
        }
        if (Auth::user()->role_id==2) {
            $loggedInAccount = Departemen::where('id', Auth::user()->id);

            return view('departemen.dashboard', [
            "title" => "Dashboard",
            "loggedInAccount" => $loggedInAccount,
            ]);
        }
        if (Auth::user()->role_id==3) {
            $loggedInAccount = Dosen::where('id', Auth::user()->id);

            return view('dosen.dashboard', [
            "title" => "Dashboard",
            "loggedInAccount" => $loggedInAccount,
            ]);
        }
        if (Auth::user()->role_id == 4) {
            $loggedInAccount = Mahasiswa::where('id', Auth::user()->id);
            $ipk = KHS::where('mahasiswa_id', Auth::user()->id)->where('status', 2)->latest('created_at')->take(1)->value('ipk');
            $sksk = KHS::where('mahasiswa_id', Auth::user()->id)->where('status', 2)->latest('created_at')->take(1)->value('sks_total');

            return view('mahasiswa.dashboard', [
                "title" => "Dashboard",
                "loggedInAccount" => $loggedInAccount,
                "ipk" => $ipk,
                "sksk" => $sksk,
            ]);
        }
        
    }
}
