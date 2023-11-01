<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operator;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            "title" => "Register",
            "active" => "register"
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nip' => 'required|numeric|digits:18|unique:operator',
            'nama_lengkap' => 'required|max:255',
            'email' => 'required|email:dns|unique:operator',
            'password' => 'required|min:5|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        Operator::create($validatedData);

        return redirect('/login')->with('success', 'Akun berhasil dibuat! Silahkan login.');
    }
}
