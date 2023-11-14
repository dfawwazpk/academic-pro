<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartemenController extends Controller
{
    //
    function listMahasiswa(){
        return view('departemen.daftar.mahasiswa');
    }
    function listDosen(){
        return view('departemen.daftar.dosen');
    }
}
