<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\KabupatenKota;
use App\Models\Mahasiswa;
use App\Models\Provinsi;
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
            $loggedInAccount = Operator::where('id', Auth::user()->id);
            $nip = Operator::where('id', Auth::user()->id)->value('nip');
            $nama = Operator::where('id', Auth::user()->id)->value('nama');
            $email = User::where('id', Auth::user()->id)->value('email');
            return view('operator.akun.edit', [
            "title" => "Edit Akun",
            'loggedInAccount' => $loggedInAccount,
            "nip" => $nip,
            "nama" => $nama,
            "email"=> $email,
            ]);
        }
        if (Auth::user()->role_id==3) {
            $loggedInAccount = Dosen::where('id', Auth::user()->id);
            $nip = Dosen::where('id', Auth::user()->id)->value('nip');
            $nama = Dosen::where('id', Auth::user()->id)->value('nama');
            $email = User::where('id', Auth::user()->id)->value('email');
            return view('dosen.akun.edit', [
            "title" => "Edit Akun",
            'loggedInAccount' => $loggedInAccount,
            "nip" => $nip,
            "nama" => $nama,
            "email"=> $email,
            ]);
        }
        if (Auth::user()->role_id==4) {
            $loggedInAccount = Mahasiswa::where('id', Auth::user()->id);
            $nim = Mahasiswa::where('id', Auth::user()->id)->value('nim');
            $nama = Mahasiswa::where('id', Auth::user()->id)->value('nama');
            $email = User::where('id', Auth::user()->id)->value('email');
            $angkatan = Mahasiswa::where('id', Auth::user()->id)->value('angkatan');
            $tanggal_lahir = Mahasiswa::where('id', Auth::user()->id)->value('tanggal_lahir');
            $no_hp = Mahasiswa::where('id', Auth::user()->id)->value('no_hp');
            $alamat = Mahasiswa::where('id', Auth::user()->id)->value('alamat');
            $provinsiList = Provinsi::all('kode_prov', 'nama_prov');
            $kabupaten_kotaList = KabupatenKota::all('kode_kab', 'nama_kab');
            $provinsi = Mahasiswa::where('id', Auth::user()->id)->value('provinsi');
            $kabupaten_kota = Mahasiswa::where('id', Auth::user()->id)->value('kabupaten_kota');
            return view('mahasiswa.akun.edit', [
            "title" => "Edit Akun",
            'loggedInAccount' => $loggedInAccount,
            "nim" => $nim,
            "nama" => $nama,
            "email"=> $email,
            "angkatan"=> $angkatan,
            "tanggal_lahir"=> $tanggal_lahir,
            "no_hp"=> $no_hp,
            "alamat"=> $alamat,
            "provinsiList"=> $provinsiList,
            "kabupaten_kotaList"=> $kabupaten_kotaList,
            "provinsi"=> $provinsi,
            "kabupaten_kota"=> $kabupaten_kota,
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
                if ($akun_operator->avatar != null) {
                    unlink('storage/' . $akun_operator->avatar);
                }
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
                if ($akun_dosen->avatar != null) {
                    unlink('storage/' . $akun_dosen->avatar);
                }
                $akun_dosen->avatar = $request->file('avatar')->store('avatar', 'public');
            }
            $akun_dosen->save();
    
            $dosen = Dosen::where('id', Auth::user()->id)->first();
            $dosen->nama = $request->nama;
            $dosen->save();
    
            return redirect('edit-akun')->with('success', 'Data pribadi berhasil diperbarui.');
        }

        else if (Auth::user()->role_id==4) {

            $request->validate([
                'nama'              => 'required|string',
                'tanggal_lahir'     => 'required|date',
                'no_hp'             => 'required|numeric',
                'alamat'            => 'required|string',
                'kabupaten_kota'    => 'required|numeric',
                'provinsi'          => 'required|numeric',
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
    
            $akun_mahasiswa = User::where('id', Auth::user()->id)->first();
            $akun_mahasiswa->email = $request->email;
            if (!empty($request->password)) {
                $akun_mahasiswa->password = Hash::make($request->password);
            }
            if (!empty($request->avatar)) {
                if ($akun_mahasiswa->avatar != null) {
                    unlink('storage/' . $akun_mahasiswa->avatar);
                }
                $akun_mahasiswa->avatar = $request->file('avatar')->store('avatar', 'public');
            }
            $akun_mahasiswa->save();
    
            $mahasiswa = Mahasiswa::where('id', Auth::user()->id)->first();
            $mahasiswa->nama = $request->nama;
            $mahasiswa->tanggal_lahir = preg_replace('#(\d{2})/(\d{2})/(\d{4})\s(.*)#', '$3-$2-$1', $request->tanggal_lahir);
            $mahasiswa->no_hp = $request->no_hp;
            $mahasiswa->alamat = $request->alamat;
            $mahasiswa->kabupaten_kota = $request->kabupaten_kota;
            $mahasiswa->provinsi = $request->provinsi;
            $mahasiswa->save();
    
            return redirect('edit-akun')->with('success', 'Data pribadi berhasil diperbarui.');
        }
    }
}
