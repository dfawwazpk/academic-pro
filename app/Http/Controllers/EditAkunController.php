<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class EditAkunController extends Controller
{
    public function index()
    {
        if (Auth::guard('operator')->check()) {
            return view('operator.akun.edit', [
            "title" => "Edit Akun"
            ]);
        }
        if (Auth::guard('dosen')->check()) {
            return view('dosen.akun.edit', [
            "title" => "Edit Akun"
            ]);
        }
        if (Auth::guard('mahasiswa')->check()) {
            return view('mahasiswa.akun.edit', [
            "title" => "Edit Akun"
            ]);
        }
    }
}
