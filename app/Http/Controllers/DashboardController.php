<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::guard('operator')->check()) {
            return view('operator.dashboard', [
            "title" => "Dashboard"
            ]);
        }
        if (Auth::guard('dosen')->check()) {
            return view('dosen.dashboard', [
            "title" => "Dashboard"
            ]);
        }
        if (Auth::guard('mahasiswa')->check()) {
            return view('mahasiswa.dashboard', [
            "title" => "Dashboard"
            ]);
        }
    }
}
