<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosen';
    public $incrementing = false;

    protected $fillable = [
        'nip',
        'nama_lengkap',
        'email',
        'password',
        'avatar',
    ];
}
