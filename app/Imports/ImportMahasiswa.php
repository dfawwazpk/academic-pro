<?php

namespace App\Imports;

use App\Models\User;
use App\Models\Mahasiswa;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UserMahasiswaImport implements ToModel
{
    public function model(array $row)
    {
        $mahasiswa = new Mahasiswa([
            'nama' => $row[2], 
        ]);
        $mahasiswa->save();

        $user = new User([
            'email' => $row[1], 
            'password' => bcrypt($row[2]), 
            'role_id' => 4,
        ]);
        $user->save();
    }
}