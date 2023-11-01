<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuatAkunDosenController extends Controller
{
    function index(){
        return view('operator/buatAkun/dosen',[
            "title" => "Buat Akun Dosen",
        ]);
    }
}
