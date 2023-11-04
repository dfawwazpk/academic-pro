<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class BuatAkunMahasiswaController extends Controller
{
    function index(){
        $dosen_wali = Dosen::all('id', 'nama');
        return view('operator.buat.mahasiswa',[
            "title" => "Buat Akun Mahasiswa",
            "dosen_wali" => $dosen_wali
        ]);
    }

    function list(Request $request)
    {
        $mahasiswa = DB::select(
            "SELECT nim, nama, angkatan, dosen_wali, status from mahasiswa
            WHERE nim LIKE '%$request->s%'
            OR nama LIKE '%$request->s%'
            OR dosen_wali LIKE '%$request->s%'
            OR status LIKE '%$request->s%'",
        );

        return view('buatAkunMahasiswa.list', ['mahasiswa' => $mahasiswa]);
    }

    function show ($idmhs)
    {
        $mahasiswa = DB::select(
            "SELECT nim, nama, angkatan, dosen_wali, status from mahasiswa", [$idmhs]
        );

        return view('buatAkunMahasiswa.show', ['mahasiswa' => $mahasiswa]);
    }

    function entryData(){
        $entrymhs = Mahasiswa::all('id', 'nim');
        
        return view('buatAkunMahasiswa.create', ['entrymhs' => $entrymhs]);
    }

    function doCreate(Request $request)
    {
        $request->validate([
            'nim'          => 'required|numeric|digits:14|unique:mahasiswa',
            'nama'         => 'required|string',
            'email'        => 'required|email:dns|unique:mahasiswa',
            'angkatan'     => 'required|numeric|digits:4',
            'status'       => 'required|numeric|digits:1',
            'jalur_masuk'  => 'required|numeric|digits:1',
            'dosen_wali'   => 'required|numeric',
        ]);
        $validated = $request->validated();

        $akun_mahasiswa = new User;
        $akun_mahasiswa->email = $validated->email;
        $akun_mahasiswa->password = Hash::make('password');
        $akun_mahasiswa->role_id = 4;
        $akun_mahasiswa->save();

        $mahasiswa = new Mahasiswa;
        $mahasiswa->id = User::where('email', $validated->email)->value('id');
        $mahasiswa->nim = $validated->nim;
        $mahasiswa->nama = $validated->nama;
        $mahasiswa->angkatan = $validated->angkatan;
        $mahasiswa->status = $validated->status;
        $mahasiswa->jalur_masuk = $validated->jalur_masuk;
        $mahasiswa->dosen_wali = $validated->dosen_wali;
        $mahasiswa->save();
    }
}