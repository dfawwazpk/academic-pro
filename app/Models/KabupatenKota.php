<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KabupatenKota extends Model
{
    use HasFactory;
    protected $table = 'kabupaten_kota';
    public $incrementing = false;

    protected $fillable = [
        "kode_kab",
        "kode_prov",
        "nama_kab",
    ];
}
