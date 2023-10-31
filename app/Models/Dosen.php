<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Dosen extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $hidden = [
        'password',
    ];

    protected $table = 'dosen';
    protected $primaryKey = 'nip';
    public $incrementing = false;

    protected $fillable = [
        'nip',
        'nama_lengkap',
        'email',
        'password',
        'avatar',
    ];
}
