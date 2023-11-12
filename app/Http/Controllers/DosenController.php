<?php
namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class DosenController extends Controller
{
    function create()
    {
        return view('operator.buat.dosen', [
            'title' => 'Buat Akun Dosen'
        ]);
    }

    function progressMahasiswa(){
        return view('dosen.progress.mahasiswa');
    }
    function detailMahasiswa(){
        return view('dosen.detail.mahasiswa');
    }

    function rekapPKL(){
        return view('dosen.rekap.pkl');
    }
    function rekapSkripsi(){
        return view('dosen.rekap.skripsi');
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
