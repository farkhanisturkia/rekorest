<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Profil;
use App\Models\Training;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'User',
            'username' => 'User',
            'email' => 'test@example.com',
            'password' => Hash::make('password'),
        ]);

        Profil::create([
            'name' => 'Astri',
            'username' => 'Axxxi'
        ]);

        Profil::create([
            'name' => 'Putri',
            'username' => 'Pxxxi'
        ]);

        Training::create([
            'profil_id' => 1,
            'is_testing' => true,
            'resto_name' => 'Restaurant Wisata',
            'tanggapan_m' => 'ikan bakarnya enak',
            'tanggapan_p' => 'pelayanan ramah',
            'tanggapan_s' => 'suasana biasa',
            'kategori_m' => 'positif',
            'kategori_p' => 'positif',
            'kategori_s' => 'netral'
        ]);
        Training::create([
            'profil_id' => 2,
            'is_testing' => true,
            'resto_name' => 'RM Kharisma',
            'tanggapan_m' => 'makanan yang disajikan sudah dingin',
            'tanggapan_p' => 'pelayan lama memproses pesanan saya',
            'tanggapan_s' => 'tempatnya panas tidak nyaman',
            'kategori_m' => 'netral',
            'kategori_p' => 'netral',
            'kategori_s' => 'negatif'
        ]);
    }
}
