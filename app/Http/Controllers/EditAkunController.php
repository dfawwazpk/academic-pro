<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\Operator;

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

    public function update(Request $request)
    {
        if (Auth::guard('operator')->check()) {

            if (Operator::find($request->nip)->nama_lengkap != $request->nama_lengkap) {
                $validatedData = $request->validate([
                    'nama_lengkap' => 'required|max:255',
                ]);
                Operator::find($request->nip)->update(['nama_lengkap' => $request->nama_lengkap]);
            }

            if (Operator::find($request->nip)->email != $request->email) {
                $validatedData = $request->validate([
                    'email' => 'required|email:dns|unique:operator',
                ]);
                Operator::find($request->nip)->update(['email' => $request->email]);
            }

            return redirect('/edit-akun');
        }
    }
}
