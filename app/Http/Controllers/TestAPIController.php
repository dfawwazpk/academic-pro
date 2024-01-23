<?php

namespace App\Http\Controllers;

use App\Http\Resources\MahasiswaDetailResource;
use App\Http\Resources\MahasiswaResource;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class TestAPIController extends Controller
{
    public function listMahasiswa()
    {
        $mahasiswa = Mahasiswa::all();
        // return response()->json(['data' => $mahasiswa]);
        return MahasiswaResource::collection($mahasiswa);
    }

    public function showMahasiswa($id)
    {
        $mahasiswa = Mahasiswa::with('namaProvinsi')->with('namaKabupatenKota')->with('namaDosenWali')->findOrFail($id);
        // return response()->json(['data' => $mahasiswa]);
        return new MahasiswaDetailResource($mahasiswa);
    }
}
