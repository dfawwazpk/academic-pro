<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class BuatAkunMahasiswaController extends Controller
{
    // function index(){
    //     return view('operator/buatAkun/mahasiswa',[
    //         "title" => "Buat Akun Mahasiswa",
    //     ]);
    // }

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
        $validated = $request->validate([
            'nim'          => 'required|string|unique:mahasiswa',
            'nama'         => 'required|string',
            'angkatan'     => 'required|numeric',
            'dosen_wali'   => 'required|string',
            //'status'       => 'required',
        ]);
        $mahasiswa = Mahasiswa::create($validated);
        error_log($mahasiswa);
        $mahasiswa->save();
    }
}