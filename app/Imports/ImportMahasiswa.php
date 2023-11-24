<?php

namespace App\Imports;

use App\Models\User;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithUpserts;

// class ImportMahasiswa implements ToCollection
class ImportMahasiswa implements ToModel, WithBatchInserts, WithHeadingRow, WithUpserts
{
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */


    // public function collection(Collection $collection)
    // {
    //     foreach ($collection as $row) 
    //     {
    //         User::create([
    //             'email' => $row[0],
    //         ]);

    //         Mahasiswa::create([
    //             'nim' => $row[0],
    //             'nama' => $row[1],
    //             'angkatan' => $row[2],
    //             'jalur_masuk' => $row[3],
    //             'dosen_wali' => $row[4],
    //         ]);
    //     }
    // }
    public function model(array $row)
    {
        // Check if email is not null before creating the User
        if (!empty($row['email'])) {
            // Create a new User
            $user = User::create([
                'email' => $row['email'],
                'password' => Hash::make('password'),
                'role_id' => 4,
            ]);
    
            // Create a new Mahasiswa with the same nim as the user's email
            Mahasiswa::create([
                'id' => $user->id,
                'nim' => $row['email'], // Set nim to the same value as email
                'nama' => $row['nama'],
                'angkatan' => $row['angkatan'],
                'jalur_masuk' => $row['jalur_masuk'],
                'dosen_wali' => $row['dosen_wali'],
                'status' => $row['status'],
            ]);
        }
    }
    
    
       

    public function batchSize(): int
    {
        return 10;
    }

    public function uniqueBy()
    {
        return 'email';
    }
}
