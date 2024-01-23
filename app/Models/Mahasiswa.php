<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';
    public $incrementing = false;

    protected $fillable = [
        'id',
        'nim',
        'nama',
        'tanggal_lahir',
        'no_hp',
        'alamat',
        'kabupaten_kota',
        'provinsi',
        'angkatan',
        'jalur_masuk',
        'status',
        'dosen_wali',
    ];

    public function namaProvinsi(): BelongsTo {
        return $this->belongsTo(Provinsi::class, 'provinsi', 'kode_prov');
    }

    public function namaKabupatenKota(): BelongsTo {
        return $this->belongsTo(KabupatenKota::class, 'kabupaten_kota', 'kode_kab');
    }

    public function namaJalurMasuk(): BelongsTo {
        return $this->belongsTo(JalurMasuk::class, 'jalur_masuk', 'id');
    }

    public function namaDosenWali(): BelongsTo {
        return $this->belongsTo(Dosen::class, 'dosen_wali', 'id');
    }

    public function scopeFilter($query, array $filters) {
        $query->when($filters['jalur_masuk'] ?? false, function($query, $jalur_masuk) {
            return $query->where('jalur_masuk', $jalur_masuk);
        });
        
        $query->when($filters['status'] ?? false, function($query, $status) {
            return $query->where('status', $status);
        });

        $query->when($filters['angkatan'] ?? false, function($query, $angkatan) {
            return $query->where('angkatan', $angkatan);
        });

        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('nim', 'like', '%' . $search . '%')->orWhere('nama', 'like', '%' . $search . '%');
        });
    }
}
