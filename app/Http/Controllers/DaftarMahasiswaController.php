<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarMahasiswaController extends Controller
{
    function index(){
        return view('operator/daftar/mahasiswa',[
            "title" => "Daftar Mahasiswa",
        ]);
    }
}
