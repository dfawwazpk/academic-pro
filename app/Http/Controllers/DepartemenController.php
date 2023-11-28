<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departemen;
use Illuminate\Support\Facades\Auth;

class DepartemenController extends Controller
{
    //
    function listMahasiswa(){
        $loggedInAccount = Departemen::where('id', Auth::user()->id);
        return view('departemen.daftar.mahasiswa', [
            'title' => 'List Mahasiswa',
            'loggedInAccount' => $loggedInAccount,
        ]);
    }
    function listDosen(){
        $loggedInAccount = Departemen::where('id', Auth::user()->id);
        return view('departemen.daftar.dosen', [
            'title' => 'List Dosen',
            'loggedInAccount' => $loggedInAccount,
        ]);
    }
}
