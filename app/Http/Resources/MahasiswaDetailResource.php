<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MahasiswaDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return
        [
            'nim' => $this->nim,
            'nama' => $this->nama,
            'no_hp' => $this->no_hp,
            'angkatan' => $this->angkatan,
            'provinsi' => $this->namaProvinsi->nama_prov,
            'kabupaten_kota' => $this->namaKabupatenKota->nama_kab,
            'dosen_wali' => $this->namaDosenWali->nama,
            
        ];
    }
}
