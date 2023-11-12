<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;


class DaftarMahasiswaController extends Controller

{
    function index(){
    
        return view("operator/daftar/dosen",[
            "title"=> "Daftar Dosen",
        ]);
   }
}