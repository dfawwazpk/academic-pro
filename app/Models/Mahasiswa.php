<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Mahasiswa extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $hidden = [
        'password',
    ];

    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';
    public $incrementing = false;

    protected $fillable = [
        'nim',
        'nama_lengkap',
        'email',
        'password',
        'tanggal_lahir',
        'alamat',
        'kabupaten_kota',
        'provinsi',
        'angkatan',
        'jalur_masuk',
        'nomor_hp',
        'status',
        'avatar',
    ];
}
