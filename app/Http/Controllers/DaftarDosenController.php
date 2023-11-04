<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarDosenController extends Controller
{
   function index(){
    
        return view("operator/daftar/dosen",[
            "title"=> "Daftar Dosen",
        ]);
   }
}