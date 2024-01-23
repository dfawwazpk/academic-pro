<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\StatusMahasiswa;
use App\Models\JalurMasuk;
use App\Models\KabupatenKota;
use App\Models\Operator;
use App\Models\Provinsi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportMahasiswa;


class MahasiswaController extends Controller
{
    function updateFirst(){
        $loggedInAccount = Mahasiswa::where('id', Auth::user()->id);
        $nim = Mahasiswa::where('id', Auth::user()->id)->value('nim');
        $nama = Mahasiswa::where('id', Auth::user()->id)->value('nama');
        $angkatan = Mahasiswa::where('id', Auth::user()->id)->value('angkatan');
        $provinsi = Provinsi::all('kode_prov', 'nama_prov');
        $kabupaten_kota = KabupatenKota::all('kode_kab', 'nama_kab');
        return view('mahasiswa.akun.editFirst',[
            "title" => "Lengkapi Data",
            "loggedInAccount" => $loggedInAccount,
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
            'email'                 => 'required|email:dns|unique:users',
            'tanggal_lahir'         => 'required|date',
            'no_hp'                 => 'required|numeric',
            'alamat'                => 'required|string',
            'kabupaten_kota'        => 'required|numeric',
            'provinsi'              => 'required|numeric',
            'password'              => 'required|min:8',
            'password_confirmation' => 'required|same:password|min:8',
        ]);

        $akun_mahasiswa = User::where('id', Auth::user()->id)->first();
        $akun_mahasiswa->email = $request->email;
        $akun_mahasiswa->password = Hash::make($request->password);
        $akun_mahasiswa->save();

        $mahasiswa = Mahasiswa::where('id', Auth::user()->id)->first();
        $mahasiswa->nama = $request->nama;
        $mahasiswa->tanggal_lahir = preg_replace('#(\d{2})/(\d{2})/(\d{4})\s(.*)#', '$3-$2-$1', $request->tanggal_lahir);
        $mahasiswa->no_hp = $request->no_hp;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->kabupaten_kota = $request->kabupaten_kota;
        $mahasiswa->provinsi = $request->provinsi;
        $mahasiswa->save();

        return redirect('dashboard')->with('success', 'Data pribadi berhasil diperbarui.');
    } 

    function create(){
        $loggedInAccount = Operator::where('id', Auth::user()->id);
        $dosen_wali = Dosen::all('id', 'nama');
        $jalur_masuk = JalurMasuk::all('id', 'name');
        return view('operator.buat.mahasiswa',[
            "title" => "Buat Akun Mahasiswa",
            "loggedInAccount" => $loggedInAccount,
            "dosen_wali" => $dosen_wali,
            "jalur_masuk" => $jalur_masuk,
        ]);
    }

    function doCreate(Request $request)
    {
        $request->validate([
            'nim'          => 'required|numeric|digits:14|unique:mahasiswa',
            'nama'         => 'required|string',
            'angkatan'     => 'required|numeric|digits:4',
            'jalur_masuk'  => 'required|numeric|digits:1',
            'dosen_wali'   => 'required|numeric',
        ]);

        $akun_mahasiswa = new User;
        $akun_mahasiswa->email = $request->nim;
        $akun_mahasiswa->password = Hash::make('password');
        $akun_mahasiswa->role_id = 4;
        $akun_mahasiswa->save();

        $mahasiswa = new Mahasiswa;
        $mahasiswa->id = User::where('email', $request->nim)->value('id');
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->angkatan = $request->angkatan;
        $mahasiswa->status = 1;
        $mahasiswa->jalur_masuk = $request->jalur_masuk;
        $mahasiswa->dosen_wali = $request->dosen_wali;
        $mahasiswa->save();

        return redirect('/buat/mahasiswa')->with('success', 'Akun mahasiswa baru berhasil dibuat!');
    }

    function importMhs(){
        $loggedInAccount = Mahasiswa::where('id', Auth::user()->id);
        return view('operator.buat.mahasiswabatch',[
            "title" => "Impor Akun Mahasiswa",
            "loggedInAccount" => $loggedInAccount,
        ]);
        
    }

    function doImportMhs(Request $request){
        $request->validate([
            'scan_csv' => 'required|mimes:xls,xlsx,csv',
        ]);
        // dd($request);
        $file = $request->file('scan_csv');
    
        Excel::import(new ImportMahasiswa, $file);
    
        return redirect('/buat/mahasiswa/csv')->with('success', 'Akun mahasiswa baru berhasil dibuat!');
    }
    public function getKabupatenKota($kode_prov)
{
    $kabupatenKota = KabupatenKota::where('kode_prov', $kode_prov)->get();

    return response()->json($kabupatenKota);
}
    public function changeStatus($id, Request $request)
    {
        $request->validate([
            'newStatus' => 'required|in:1,2,3,4,5,6,7', // Add validation for valid status codes
        ]);

        $newStatus = $request->input('newStatus');
        $mahasiswa = Mahasiswa::findOrFail($id);

        // Update status only if it's different
        if ($mahasiswa->status != $newStatus) {
            $mahasiswa->status = $newStatus;
            $mahasiswa->save();
        }

        return redirect()->back()->with('success', 'Status mahasiswa berhasil dirubah!');
    }
    public function destroy($id)
    {
        $akun_mahasiswa  = User::findOrFail($id);
        $akun_mahasiswa ->delete();

        return redirect()->back()->with('success', 'Akun mahasiswa berhasil dihapus!');
    }
}