<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PKL extends Model
{
    use HasFactory;

    protected $table = 'pkl';
    public $incrementing = true;

    protected $fillable = [
        'status_pkl',
        'nilai',
        'status',
        'file',
        'mahasiswa_id',
    ];
}
