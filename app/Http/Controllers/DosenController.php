<?php
namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\IRS;
use App\Models\JalurMasuk;
use App\Models\KabupatenKota;
use App\Models\KHS;
use App\Models\Mahasiswa;
use App\Models\Operator;
use App\Models\PKL;
use App\Models\Provinsi;
use App\Models\Skripsi;
use App\Models\StatusMahasiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class DosenController extends Controller
{
    function progressMahasiswa(){
        $loggedInAccount = Dosen::where('id', Auth::user()->id);
        $mahasiswaList = Mahasiswa::where('dosen_wali', Auth::user()->id)->filter(request(['search', 'angkatan', 'status']))->get();
        $irsList = IRS::where('status', 2)->latest('created_at')->get();
        $statusList = StatusMahasiswa::all();
        $khsList = KHS::where('status', 2)->latest('created_at')->get();
        $counter = 1;
        return view('dosen.progress.mahasiswa', [
            'title' => 'Progress Mahasiswa',
            'loggedInAccount' => $loggedInAccount,
            'mahasiswaList' => $mahasiswaList,
            'irsList' => $irsList,
            'statusList' => $statusList,
            'khsList' => $khsList,
            'counter' => $counter
        ]);
    }
    function detailMahasiswa($id){
        $loggedInAccount = Dosen::where('id', Auth::user()->id);
        $akunMahasiswa = User::where('id', $id)->first();
        $mahasiswa = Mahasiswa::where('id', $id)->first();
        $irsList = IRS::where('mahasiswa_id',$id)->where('status', 2)->get();
        $khsList = KHS::where('mahasiswa_id',$id)->where('status', 2)->get();
        $pklList = PKL::where('mahasiswa_id',$id)->where('status', 2)->get();
        $skripsiList = Skripsi::where('mahasiswa_id',$id)->where('status', 2)->get();
        $kabupatenKota = KabupatenKota::get();
        $provinsi = Provinsi::get();
        $jalurMasuk = JalurMasuk::get();
        return view('dosen.detail.mahasiswa', [
            'title' => 'Detail Mahasiswa',
            'loggedInAccount' => $loggedInAccount,
            'akunMahasiswa' => $akunMahasiswa,
            'mahasiswa' => $mahasiswa,
            'irsList' => $irsList,
            'khsList' => $khsList,
            'pklList' => $pklList,
            'skripsiList' => $skripsiList,
            'kabupatenKota' => $kabupatenKota,
            'provinsi' => $provinsi,
            'jalurMasuk' => $jalurMasuk
        ]);
    }
    function rekapStatus($angkatan, $status){
        $loggedInAccount = Dosen::where('id', Auth::user()->id);
        $mahasiswaList = Mahasiswa::where('dosen_wali', Auth::user()->id)->get();
        $statusMahasiswaList = StatusMahasiswa::get();
        $counter = 1;
        if ($angkatan == '0') {
            $mahasiswaListStatus = Mahasiswa::where('dosen_wali', Auth::user()->id)->where('angkatan', '0');
        } 
        else {
            if ($status == 'aktif') {
                $mahasiswaListStatus = Mahasiswa::where('dosen_wali', Auth::user()->id)->where('angkatan', $angkatan)->where('status', 1);
            }
            else if ($status == 'nonaktif') {
                $mahasiswaListStatus = Mahasiswa::where('dosen_wali', Auth::user()->id)->where('angkatan', $angkatan)->where('status', 2);
            }
            else if ($status == 'cuti') {
                $mahasiswaListStatus = Mahasiswa::where('dosen_wali', Auth::user()->id)->where('angkatan', $angkatan)->where('status', 3);
            }
        }
         
        return view('dosen.rekap.status', [
            'title' => 'Rekap Mahasiswa',
            'loggedInAccount' => $loggedInAccount,
            'mahasiswaList' => $mahasiswaList,
            'mahasiswaListStatus' => $mahasiswaListStatus->get(),
            'statusMahasiswaList' => $statusMahasiswaList,
            'statusMahasiswa' => $status, 
            'counter' => $counter,
            'angkatanSelected' => $angkatan,
            'statusSelected' => $status
        ]);
    }
    function printRekapStatusAll(){
        $dosen = Dosen::where('id', Auth::user()->id);
        $mahasiswaList = Mahasiswa::where('dosen_wali', Auth::user()->id)->get();
         
        return view('dosen.rekap.statusAllPrint', [
            'title' => 'Print Rekap Mahasiswa',
            'dosen' => $dosen,
            'mahasiswaList' => $mahasiswaList,
        ]);
    }
    function printRekapStatus($angkatan, $status){
        $dosen = Dosen::where('id', Auth::user()->id);
        $mahasiswaList = Mahasiswa::where('dosen_wali', Auth::user()->id)->get();
        $statusMahasiswaList = StatusMahasiswa::get();
        $counter = 1;
        if ($angkatan == '0') {
            $mahasiswaListStatus = Mahasiswa::where('dosen_wali', Auth::user()->id)->where('angkatan', '0');
        } 
        else {
            if ($status == 'aktif') {
                $mahasiswaListStatus = Mahasiswa::where('dosen_wali', Auth::user()->id)->where('angkatan', $angkatan)->where('status', 1);
            }
            else if ($status == 'nonaktif') {
                $mahasiswaListStatus = Mahasiswa::where('dosen_wali', Auth::user()->id)->where('angkatan', $angkatan)->where('status', 2);
            }
            else if ($status == 'cuti') {
                $mahasiswaListStatus = Mahasiswa::where('dosen_wali', Auth::user()->id)->where('angkatan', $angkatan)->where('status', 3);
            }
        }
         
        return view('dosen.rekap.statusPrint', [
            'title' => 'Print Rekap Mahasiswa',
            'dosen' => $dosen,
            'mahasiswaList' => $mahasiswaList,
            'mahasiswaListStatus' => $mahasiswaListStatus->get(),
            'statusMahasiswaList' => $statusMahasiswaList,
            'statusMahasiswa' => $status, 
            'counter' => $counter,
            'angkatanSelected' => $angkatan,
            'statusSelected' => $status
        ]);
    }
    function rekapPKL($angkatan, $status){
        $loggedInAccount = Dosen::where('id', Auth::user()->id);
        $mahasiswaList = Mahasiswa::where('dosen_wali', Auth::user()->id)->get();
        $pklList = PKL::where('status', 2)->get();
        $counter = 1;
        if ($angkatan == '0') {
            $mahasiswaListAngkatan = Mahasiswa::where('dosen_wali', Auth::user()->id)->where('angkatan', '0');
        } 
        else {
            if ($status == 'sudah') {
                $mahasiswaListAngkatan = Mahasiswa::where('dosen_wali', Auth::user()->id)->where('angkatan', $angkatan)->whereNotNull('lulus_pkl');
            }
            else if ($status == 'belum') {
                $mahasiswaListAngkatan = Mahasiswa::where('dosen_wali', Auth::user()->id)->where('angkatan', $angkatan)->whereNull('lulus_pkl');
            }
        }
        return view('dosen.rekap.pkl', [
            'title' => 'Rekap PKL',
            'loggedInAccount' => $loggedInAccount,
            'mahasiswaList' => $mahasiswaList,
            'mahasiswaListAngkatan' => $mahasiswaListAngkatan->get(),
            'pklList' => $pklList,
            'statusPKL' => $status,
            'counter' => $counter

        ]);
    }
    function rekapSkripsi($angkatan, $status){
        $loggedInAccount = Dosen::where('id', Auth::user()->id);
        $mahasiswaList = Mahasiswa::where('dosen_wali', Auth::user()->id)->get();
        $skripsiList = Skripsi::where('status', 2)->get();
        $counter = 1;

        if ($angkatan == '0') {
            $mahasiswaListAngkatan = Mahasiswa::where('dosen_wali', Auth::user()->id)->where('angkatan', '0');
        } 
        else {
            if ($status == 'sudah') {
                $mahasiswaListAngkatan = Mahasiswa::where('dosen_wali', Auth::user()->id)->where('angkatan', $angkatan)->whereNotNull('lulus_skripsi');
            }
            else if ($status == 'belum') {
                $mahasiswaListAngkatan = Mahasiswa::where('dosen_wali', Auth::user()->id)->where('angkatan', $angkatan)->whereNull('lulus_skripsi');
            }
        }
        return view('dosen.rekap.skripsi', [
            'title' => 'Rekap Skripsi',
            'loggedInAccount' => $loggedInAccount,
            'mahasiswaList' => $mahasiswaList,
            'mahasiswaListAngkatan' => $mahasiswaListAngkatan->get(),
            'skripsiList' => $skripsiList,
            'statusSkripsi' => $status,
            'counter' => $counter

        ]);
    }
    function create()
    {
        $loggedInAccount = Operator::where('id', Auth::user()->id);
        return view('operator.buat.dosen', [
            'title' => 'Buat Akun Dosen',
            'loggedInAccount' => $loggedInAccount
        ]);
    }

    function doCreate(Request $request)
    {
        $request->validate([
            'nip'          => 'required|numeric|digits:18|unique:dosen',
            'nama'         => 'required|string',
        ]);

        $akun_dosen = new User;
        $akun_dosen->email = $request->email;
        $akun_dosen->password = Hash::make('password');
        $akun_dosen->role_id = 3;
        $akun_dosen->save();

        $dosen = new Dosen;
        $dosen->id = User::where('email', $request->email)->value('id');
        $dosen->nip = $request->nip;
        $dosen->nama = $request->nama;
        $dosen->save();

        return redirect('/buat/dosen')->with('success', 'Akun dosen baru berhasil dibuat!');
    }
    public function destroy($id)
    {
        $dosen = Dosen::findOrFail($id);
        $dosen->delete();

        return redirect('/daftar/dosen')->with('success', 'Akun dosen berhasil dihapus!');
    }
}
