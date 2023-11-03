<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        
        DB::table('users')->truncate();
        DB::table('operator')->truncate();

        # akun admin dummy
        DB::table('users')->insert([
            'email' => 'atmin@academic.pro',
            'password' => Hash::make('password'),
            'role_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('operator')->insert([
            'id' => User::where('email', 'atmin@academic.pro')->value('id'),
            'nip' => '696969696969696969',
            'nama' => 'Atmin bin Admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
