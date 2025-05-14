<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('petugas')->insert([
            [
                'name' => 'Petugas_Satu',
                'email' => 'petugas1@example.com',
                'password' => Hash::make('pw123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Petugas_Dua',
                'email' => 'petugas2@example.com',
                'password' => Hash::make('pw123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
