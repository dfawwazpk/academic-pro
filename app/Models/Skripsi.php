<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skripsi extends Model
{
    use HasFactory;

    protected $table = 'skripsi';
    public $incrementing = true;

    protected $fillable = [
        'status_skripsi',
        'nilai',
        'tanggal_lulus_sidang',
        'lama_studi',
        'status',
        'file',
        'mahasiswa_id',
    ];
}
