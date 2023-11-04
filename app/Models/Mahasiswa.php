<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';
    public $incrementing = false;

    protected $fillable = [
        'id',
        'nim',
        'nama',
        'tanggal_lahir',
        'no_hp',
        'alamat',
        'kabupaten_kota',
        'provinsi',
        'angkatan',
        'jalur_masuk',
        'status',
        'dosen_wali',
    ];
}
