<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Operator;
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
    
        $loggedInAccountName = Operator::where('id', Auth::user()->id)->value('nama');
        return view("operator.daftar.mahasiswa", [
            'title' => 'Daftar Mahasiswa',
            'loggedInAccountName' => $loggedInAccountName,
        ]);
    }

    function list(){
        $loggedInAccountName = Operator::where('id', Auth::user()->id)->value('nama');
        $list = Mahasiswa::select(
                        'mahasiswa.nim',
                        'mahasiswa.nama',
                        'mahasiswa.angkatan',
                        'irs.semester',
                        'mahasiswa.status',
                        'mahasiswa.jalur_masuk',
                    )
                    ->leftJoin('irs', 'mahasiswa.id', '=', 'irs.mahasiswa_id')
                    ->get();
    
        return view('operator.daftar.mahasiswa', [
            'title' => 'Daftar Mahasiswa',
            'loggedInAccountName' => $loggedInAccountName,
            'list' => $list,
        ]);
    }

   function searchMahasiswa(Request $request){
        $keyword = $request->input('keyword');
        $results = [];
        if ($keyword !== '') {
            $results = Mahasiswa::where('nama', 'like', '%' . $keyword . '%')
            ->orWhere('nim', 'like', '%' . $keyword . '%')
            ->get();
        } 
        else {
        $results = '';
        }

        return view("operator/daftar/mahasiswa", [
            "title" => "Daftar Mahasiswa",
            "results" => $results,
            "keyword" => $keyword,
        ]);
    }
}