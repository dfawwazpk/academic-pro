<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IRS extends Model
{
    use HasFactory;

    protected $table = 'irs';
    public $incrementing = true;

    protected $fillable = [
        'semester',
        'sks_diambil',
        'status',
        'file',
        'mahasiswa_id',
    ];
}
