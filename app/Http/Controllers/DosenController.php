<?php
namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\IRS;
use App\Models\KHS;
use App\Models\Mahasiswa;
use App\Models\Operator;
use App\Models\StatusMahasiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class DosenController extends Controller
{
    function progressMahasiswa(){
        $loggedInAccount = Dosen::where('id', Auth::user()->id);
        $mahasiswaList = Mahasiswa::where('dosen_wali', Auth::user()->id)->filter(request(['search', 'angkatan', 'status']))->get();
        $irsList = IRS::where('status', 2)->latest('created_at')->get();
        $statusList = StatusMahasiswa::all();
        $khsList = KHS::where('status', 2)->latest('created_at')->get();
        return view('dosen.progress.mahasiswa', [
            'title' => 'Progress Mahasiswa',
            'loggedInAccount' => $loggedInAccount,
            'mahasiswaList' => $mahasiswaList,
            'irsList' => $irsList,
            'statusList' => $statusList,
            'khsList' => $khsList
        ]);
    }
    function detailMahasiswa(){
        $loggedInAccount = Dosen::where('id', Auth::user()->id);
        return view('dosen.detail.mahasiswa', [
            'title' => 'Detail Mahasiswa',
            'loggedInAccount' => $loggedInAccount
        ]);
    }

    function rekapPKL(){
        $loggedInAccount = Dosen::where('id', Auth::user()->id);
        return view('dosen.rekap.pkl', [
            'title' => 'Rekap PKL',
            'loggedInAccount' => $loggedInAccount
        ]);
    }
    function rekapSkripsi(){
        $loggedInAccount = Dosen::where('id', Auth::user()->id);
        return view('dosen.rekap.skripsi', [
            'title' => 'Rekap Skripsi',
            'loggedInAccount' => $loggedInAccount
        ]);
    }

    function create()
    {
        $loggedInAccount = Operator::where('id', Auth::user()->id);
        return view('operator.buat.dosen', [
            'title' => 'Buat Akun Dosen',
            'loggedInAccount' => $loggedInAccount
        ]);
    }

    function doCreate(Request $request)
    {
        $request->validate([
            'nip'          => 'required|numeric|digits:18|unique:dosen',
            'nama'         => 'required|string',
        ]);

        $akun_dosen = new User;
        $akun_dosen->email = $request->email;
        $akun_dosen->password = Hash::make('password');
        $akun_dosen->role_id = 3;
        $akun_dosen->save();

        $dosen = new Dosen;
        $dosen->id = User::where('email', $request->email)->value('id');
        $dosen->nip = $request->nip;
        $dosen->nama = $request->nama;
        $dosen->save();

        return redirect('/buat/dosen')->with('success', 'Akun dosen baru berhasil dibuat!');
    }
}
