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
    protected $primaryKey = 'id';
    public $incrementing = true;

    protected $fillable = [
        'nim',
        'nama',
        'angkatan',
        'dosen_wali',
        'status',
    ];
}
