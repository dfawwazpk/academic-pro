<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KHS extends Model
{
    use HasFactory;

    protected $table = 'khs';
    public $incrementing = true;

    protected $fillable = [
        'semester',
        'sks_diambil',
        'sks_total',
        'ips',
        'ipk',
        'status',
        'file',
        'mahasiswa_id',
    ];
}
