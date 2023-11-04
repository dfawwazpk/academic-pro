<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->role_id==1) {
            return view('operator.dashboard', [
            "title" => "Dashboard"
            ]);
        }
        if (Auth::user()->role_id==2) {
            return view('departemen.dashboard', [
            "title" => "Dashboard"
            ]);
        }
        if (Auth::user()->role_id==3) {
            return view('dosen.dashboard', [
            "title" => "Dashboard"
            ]);
        }
        if (Auth::user()->role_id==4) {
            return view('mahasiswa.dashboard', [
            "title" => "Dashboard"
            ]);
        }
    }
}
