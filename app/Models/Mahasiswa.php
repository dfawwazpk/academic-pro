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
        'nim',
        'nama',
        'angkatan',
        'dosen_wali',
        'status',
    ];
}
