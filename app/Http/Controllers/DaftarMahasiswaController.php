<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;


class DaftarMahasiswaController extends Controller

{
    function index()
    {
        // Tampilkan daftar IRS
        return view("operator/daftar/mahasiswa");
        $entry_awal = Mahasiswa::all();
    }

    function editData()
    {
        $user = Auth::user();
        $mahasiswa = $user->mahasiswa;

        if ($this->isDataComplete($mahasiswa)) {
            return redirect()->route('dashboard')->with('info', 'Anda telah melengkapi data pribadi.');
        }

        return view('mahasiswa.editData', ['mahasiswa' => $mahasiswa]);
    }

    function updateData(Request $request, $id)
    {
        $user = Auth::user();
        $mahasiswa = $user->mahasiswa;

        if ($this->isDataComplete($mahasiswa)) {
            $validated = $request->validate([
                'nama'              => 'required|string',
                'tanggal_lahir'     => 'required|date',
                'no_hp'             => 'required|string',
                'alamat'            => 'required|string',
                'kabupaten_kota'    => 'required|string',
                'provinsi'          => 'required|string',
                'password'          => 'nullable|string|min:8|confirmed',
            ]);

            if(!empty($validated['password'])){
                $validated['password'] = Hash::make($validated['password']);
            }            

            $mahasiswa->updateData($validated);
            return redirect()->route('dashboard')->with('success', 'Data pribadi berhasil diperbarui');
        } 
        else 
        {
        // Jika data belum lengkap, arahkan mahasiswa untuk melengkapi data
        return redirect()->route('data-mahasiswa')->with('warning', 'Harap lengkapi data pribadi Anda terlebih dahulu');
        }
    }   
     
    private function isDataComplete($mahasiswa)
    {
        return !empty($mahasiswa->nama) &&
               !empty($mahasiswa->tanggal_lahir) &&
               !empty($mahasiswa->no_hp) &&
               !empty($mahasiswa->alamat) &&
               !empty($mahasiswa->kabupaten_kota) &&
               !empty($mahasiswa->provinsi);
    }
}

