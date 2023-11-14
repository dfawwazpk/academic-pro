<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\Operator;
use App\Models\User;

class EditAkunController extends Controller
{
    public function index()
    {
        if (Auth::user()->role_id==1) {
            $nip = Operator::where('id', Auth::user()->id)->value('nip');
            $nama = Operator::where('id', Auth::user()->id)->value('nama');
            $email = User::where('id', Auth::user()->id)->value('email');
            return view('operator.akun.edit', [
            "title" => "Edit Akun",
            'loggedInAccountName' => $nama,
            "nip" => $nip,
            "nama" => $nama,
            "email"=> $email,
            ]);
        }
        if (Auth::user()->role_id==3) {
            $nip = Dosen::where('id', Auth::user()->id)->value('nip');
            $nama = Dosen::where('id', Auth::user()->id)->value('nama');
            $email = User::where('id', Auth::user()->id)->value('email');
            return view('dosen.akun.edit', [
            "title" => "Edit Akun",
            'loggedInAccountName' => $nama,
            "nip" => $nip,
            "nama" => $nama,
            "email"=> $email,
            ]);
        }
        if (Auth::user()->role_id==4) {
            return view('mahasiswa.akun.edit', [
            "title" => "Edit Akun"
            ]);
        }
    }

    public function update(Request $request)
    {
        if (Auth::user()->role_id==1) {

            $request->validate([
                'nama'  => 'required|string',
            ]);

            if ($request->email != User::where('id', Auth::user()->id)->value('email')) {
                $request->validate([
                    'email' => 'required|email:dns|unique:users',
                ]);
            }
            
            if (!empty($request->password) || !empty($request->password_confirmation)) {
                $request->validate([
                    'password'              => 'required|min:8',
                    'password_confirmation' => 'required|same:password|min:8',
                ]);
            }

            if (!empty($request->avatar)) {
                $request->validate([
                    'avatar' => 'file|mimes:jpg,png|max:1024',
                ]);
            }
    
            $akun_operator = User::where('id', Auth::user()->id)->first();
            $akun_operator->email = $request->email;
            if (!empty($request->password)) {
                $akun_operator->password = Hash::make($request->password);
            }
            if (!empty($request->avatar)) {
                $akun_operator->avatar = $request->file('avatar')->store('avatar', 'public');
            }
            $akun_operator->save();
    
            $operator = Operator::where('id', Auth::user()->id)->first();
            $operator->nama = $request->nama;
            $operator->save();
    
            return redirect('edit-akun')->with('success', 'Data pribadi berhasil diperbarui.');
        }

        else if (Auth::user()->role_id==3) {

            $request->validate([
                'nama'  => 'required|string',
            ]);

            if ($request->email != User::where('id', Auth::user()->id)->value('email')) {
                $request->validate([
                    'email' => 'required|email:dns|unique:users',
                ]);
            }
            
            if (!empty($request->password) || !empty($request->password_confirmation)) {
                $request->validate([
                    'password'              => 'required|min:8',
                    'password_confirmation' => 'required|same:password|min:8',
                ]);
            }

            if (!empty($request->avatar)) {
                $request->validate([
                    'avatar' => 'file|mimes:jpg,png|max:1024',
                ]);
            }
    
            $akun_dosen = User::where('id', Auth::user()->id)->first();
            $akun_dosen->email = $request->email;
            if (!empty($request->password)) {
                $akun_dosen->password = Hash::make($request->password);
            }
            if (!empty($request->avatar)) {
                $akun_dosen->avatar = $request->file('avatar')->store('avatar', 'public');
            }
            $akun_dosen->save();
    
            $dosen = Dosen::where('id', Auth::user()->id)->first();
            $dosen->nama = $request->nama;
            $dosen->save();
    
            return redirect('edit-akun')->with('success', 'Data pribadi berhasil diperbarui.');
        }
    }
}
