<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusMahasiswa extends Model
{
    use HasFactory;
    protected $table = 'status_mahasiswa';

    protected $fillable = [
        "name",
    ];
}
