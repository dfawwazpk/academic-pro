<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\StatusMahasiswa;
use App\Models\JalurMasuk;
use App\Models\KabupatenKota;
use App\Models\Provinsi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class MahasiswaController extends Controller
{

    function list(Request $request)
    {
        $mahasiswa = DB::select(
            "SELECT nim, nama, angkatan, dosen_wali, status from mahasiswa
            WHERE nim LIKE '%$request->s%'
            OR nama LIKE '%$request->s%'
            OR dosen_wali LIKE '%$request->s%'
            OR status LIKE '%$request->s%'",
        );

        return view('operator.daftar.mahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    function show ($idmhs)
    {
        $mahasiswa = DB::select(
            "SELECT nim, nama, angkatan, dosen_wali, status from mahasiswa", [$idmhs]
        );

        return view('buatAkunMahasiswa.show', ['mahasiswa' => $mahasiswa]);
    }

    function entryData(){
        $entrymhs = Mahasiswa::all('id', 'nim');
        
        return view('buatAkunMahasiswa.create', ['entrymhs' => $entrymhs]);
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

    function updateFirst(){
        $nim = Mahasiswa::where('id', Auth::user()->id)->value('nim');
        $nama = Mahasiswa::where('id', Auth::user()->id)->value('nama');
        $angkatan = Mahasiswa::where('id', Auth::user()->id)->value('angkatan');
        $provinsi = Provinsi::all('kode_prov', 'nama_prov');
        $kabupaten_kota = KabupatenKota::all('kode_kab', 'nama_kab');
        return view('mahasiswa.akun.editFirst',[
            "title" => "Lengkapi Data",
            "nim" => $nim,
            "nama" => $nama,
            "angkatan" => $angkatan,
            "provinsi" => $provinsi,
            "kabupaten_kota" => $kabupaten_kota
        ]);
    }

    function doUpdateFirst(Request $request)
    {
        $request->validate([
            'nama'                  => 'required|string',
            'tanggal_lahir'         => 'required|date',
            'no_hp'                 => 'required|numeric',
            'alamat'                => 'required|string',
            'kabupaten_kota'        => 'required|numeric',
            'provinsi'              => 'required|numeric',
            'password'              => 'required|min:8',
            'password_confirmation' => 'required|same:password|min:8',
        ]);

        $akun_mahasiswa = User::where('id', Auth::user()->id)->first();
        $akun_mahasiswa->password = Hash::make($request->password);
        $akun_mahasiswa->save();

        $mahasiswa = Mahasiswa::where('id', Auth::user()->id)->first();
        $mahasiswa->nama = $request->nama;
        $mahasiswa->tanggal_lahir = $request->tanggal_lahir;
        $mahasiswa->no_hp = $request->no_hp;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->kabupaten_kota = $request->kabupaten_kota;
        $mahasiswa->provinsi = $request->provinsi;
        $mahasiswa->save();

        return redirect('dashboard')->with('success', 'Data pribadi berhasil diperbarui.');
    } 

    function create(){
        $dosen_wali = Dosen::all('id', 'nama');
        $status = StatusMahasiswa::all('id', 'name');
        $jalur_masuk = JalurMasuk::all('id', 'name');
        return view('operator.buat.mahasiswa',[
            "title" => "Buat Akun Mahasiswa",
            "dosen_wali" => $dosen_wali,
            "status" => $status,
            "jalur_masuk" => $jalur_masuk
        ]);
    }

    function doCreate(Request $request)
    {
        $request->validate([
            'nim'          => 'required|numeric|digits:14|unique:mahasiswa',
            'nama'         => 'required|string',
            'email'        => 'required|email:dns|unique:users',
            'angkatan'     => 'required|numeric|digits:4',
            'status'       => 'required|numeric|digits:1',
            'jalur_masuk'  => 'required|numeric|digits:1',
            'dosen_wali'   => 'required|numeric',
        ]);

        $akun_mahasiswa = new User;
        $akun_mahasiswa->email = $request->email;
        $akun_mahasiswa->password = Hash::make('password');
        $akun_mahasiswa->role_id = 4;
        $akun_mahasiswa->save();

        $mahasiswa = new Mahasiswa;
        $mahasiswa->id = User::where('email', $request->email)->value('id');
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->angkatan = $request->angkatan;
        $mahasiswa->status = $request->status;
        $mahasiswa->jalur_masuk = $request->jalur_masuk;
        $mahasiswa->dosen_wali = $request->dosen_wali;
        $mahasiswa->save();

        return redirect('/buat/mahasiswa')->with('success', 'Akun mahasiswa baru berhasil dibuat!');
    }
}