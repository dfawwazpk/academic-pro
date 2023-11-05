<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusBerkas extends Model
{
    use HasFactory;
    protected $table = 'status_berkas';

    protected $fillable = [
        "name",
    ];
}
