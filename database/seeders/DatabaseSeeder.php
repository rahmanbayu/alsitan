<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Alsitan;
use App\Models\Petani;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin'
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Staf',
            'email' => 'staf@gmail.com',
            'role' => 'staf'
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Kadis',
            'email' => 'kadis@gmail.com',
            'role' => 'kadis'
        ]);
        Petani::create([
            'name' => 'Rahmandika Virdaus',
            'nik' => '6201051305980001',
            'phone' => '082244444444',
            'nama_kelompok' => 'Kelompok Tani Sejahtra',
            'alamat' => 'Jl. Tjilikriwut, Rt 009 Rw 016, Kecamatan Pembuang',
            'job' => 'petani',
            'luas_lahan' => '5',
            'kordinat_lahan' => '-7.730365,110.603738',
        ]);
        
        // Petani::factory(100)->create();
        Alsitan::factory(4)->create([
            'merek' => 'ChainMax',
            'tipe' => 'L455',
            'tahun' => '2022',
        ]);

    }
}
