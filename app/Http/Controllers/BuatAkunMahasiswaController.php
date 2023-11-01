<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuatAkunMahasiswaController extends Controller
{
    function index(){
        return view('operator/buatAkun/mahasiswa',[
            "title" => "Buat Akun Mahasiswa",
        ]);
    }
}