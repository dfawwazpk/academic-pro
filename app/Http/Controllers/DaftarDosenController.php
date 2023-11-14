<?php

namespace App\Http\Controllers;

use App\Models\Operator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DaftarDosenController extends Controller
{
   function index(){
    
        $loggedInAccountName = Operator::where('id', Auth::user()->id)->value('nama');
        return view("operator.daftar.dosen", [
            'title' => 'Daftar Dosen',
            'loggedInAccountName' => $loggedInAccountName,
        ]);
   }
}