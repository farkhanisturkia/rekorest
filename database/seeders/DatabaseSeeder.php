<?php

namespace Database\Seeders;

use App\Models\User;
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
            'role' => 'user',
            'name' => 'User',
            'username' => 'User',
            'email' => 'test@example.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'role' => 'admin',
            'name' => 'Admin',
            'username' => 'Admin',
            'email' => 'testAdmin@example.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'role' => 'admin',
            'name' => 'Astri',
            'username' => 'Astri',
            'email' => 'testAstri@example.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'role' => 'admin',
            'name' => 'Putri',
            'username' => 'Putri',
            'email' => 'testPutri@example.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'role' => 'admin',
            'name' => 'Evony',
            'username' => 'Evony',
            'email' => 'testEvony@example.com',
            'password' => Hash::make('password'),
        ]);

        Training::create([
            'pengulas' => "mang aji",
            'is_testing' => false,
            'is_dataset' => true,
            'is_recomended' => true,
            'resto_name' => 'DataSet #1',
            'tanggapan_m' => 'ikan bakarnya enak',
            'tanggapan_p' => 'pelayanan ramah',
            'tanggapan_s' => 'suasana luar biasa nyaman',
            'kategori_m' => 'positif',
            'kategori_p' => 'positif',
            'kategori_s' => 'positif'
        ]);
        
        Training::create([
            'pengulas' => "ko lim",
            'is_testing' => false,
            'is_dataset' => true,
            'is_recomended' => true,
            'resto_name' => 'DataSet #2',
            'tanggapan_m' => 'makanan yang disajikan sangat nikmat',
            'tanggapan_p' => 'pelayan sangat gesit',
            'tanggapan_s' => 'tempatnya agak gerah',
            'kategori_m' => 'positif',
            'kategori_p' => 'positif',
            'kategori_s' => 'netral'
        ]);

        Training::create([
            'pengulas' => "cak dola",
            'is_testing' => false,
            'is_dataset' => true,
            'is_recomended' => true,
            'resto_name' => 'DataSet #3',
            'tanggapan_m' => 'makanan mantap',
            'tanggapan_p' => 'pelayan baik',
            'tanggapan_s' => 'tempatnya kecil banget',
            'kategori_m' => 'positif',
            'kategori_p' => 'positif',
            'kategori_s' => 'negatif'
        ]);

        Training::create([
            'pengulas' => "mang aji",
            'is_testing' => false,
            'is_dataset' => true,
            'is_recomended' => true,
            'resto_name' => 'DataSet #4',
            'tanggapan_m' => 'makanan enak',
            'tanggapan_p' => 'pelayan cukup baik',
            'tanggapan_s' => 'tempatnya asik untuk nongkrong',
            'kategori_m' => 'positif',
            'kategori_p' => 'netral',
            'kategori_s' => 'positif'
        ]);

        Training::create([
            'pengulas' => "ko lim",
            'is_testing' => false,
            'is_dataset' => true,
            'is_recomended' => true,
            'resto_name' => 'DataSet #5',
            'tanggapan_m' => 'makanan ber variasi dan murah',
            'tanggapan_p' => 'pelayan bagus',
            'tanggapan_s' => 'tempatnya lumayan',
            'kategori_m' => 'positif',
            'kategori_p' => 'netral',
            'kategori_s' => 'netral'
        ]);

        Training::create([
            'pengulas' => "cak dola",
            'is_testing' => false,
            'is_dataset' => true,
            'is_recomended' => false,
            'resto_name' => 'DataSet #6',
            'tanggapan_m' => 'makanan banyak pilihan',
            'tanggapan_p' => 'pelayan asik',
            'tanggapan_s' => 'tempatnya bau',
            'kategori_m' => 'positif',
            'kategori_p' => 'netral',
            'kategori_s' => 'negatif'
        ]);

        Training::create([
            'pengulas' => "mang aji",
            'is_testing' => false,
            'is_dataset' => true,
            'is_recomended' => true,
            'resto_name' => 'DataSet #7',
            'tanggapan_m' => 'makanan ringan ala pedesaan',
            'tanggapan_p' => 'pelayan buruk banget',
            'tanggapan_s' => 'tempatnya asri',
            'kategori_m' => 'positif',
            'kategori_p' => 'negatif',
            'kategori_s' => 'positif'
        ]);

        Training::create([
            'pengulas' => "ko lim",
            'is_testing' => false,
            'is_dataset' => true,
            'is_recomended' => false,
            'resto_name' => 'DataSet #8',
            'tanggapan_m' => 'makanan oke banget',
            'tanggapan_p' => 'pelayan lama',
            'tanggapan_s' => 'tempatnya jorok',
            'kategori_m' => 'positif',
            'kategori_p' => 'negatif',
            'kategori_s' => 'negatif'
        ]);

        Training::create([
            'pengulas' => "cak dola",
            'is_testing' => false,
            'is_dataset' => true,
            'is_recomended' => false,
            'resto_name' => 'DataSet #9',
            'tanggapan_m' => 'makanan enak banget',
            'tanggapan_p' => 'pelayan buruk banget',
            'tanggapan_s' => 'tempatnya cukup family friendly',
            'kategori_m' => 'positif',
            'kategori_p' => 'negatif',
            'kategori_s' => 'netral'
        ]);

        Training::create([
            'pengulas' => "mang aji",
            'is_testing' => false,
            'is_dataset' => true,
            'is_recomended' => true,
            'resto_name' => 'DataSet #10',
            'tanggapan_m' => 'makanan cukup enak',
            'tanggapan_p' => 'pelayan lucu',
            'tanggapan_s' => 'tempatnya luas',
            'kategori_m' => 'netral',
            'kategori_p' => 'positif',
            'kategori_s' => 'positif'
        ]);

        Training::create([
            'pengulas' => "ko lim",
            'is_testing' => false,
            'is_dataset' => true,
            'is_recomended' => true,
            'resto_name' => 'DataSet #11',
            'tanggapan_m' => 'makanan cukup enak',
            'tanggapan_p' => 'pelayan lucu',
            'tanggapan_s' => 'tempatnya ramai tapi luas',
            'kategori_m' => 'netral',
            'kategori_p' => 'positif',
            'kategori_s' => 'netral'
        ]);

        Training::create([
            'pengulas' => "cak dola",
            'is_testing' => false,
            'is_dataset' => true,
            'is_recomended' => false,
            'resto_name' => 'DataSet #12',
            'tanggapan_m' => 'makanan cukup enak',
            'tanggapan_p' => 'pelayan lucu',
            'tanggapan_s' => 'tempatnya bau',
            'kategori_m' => 'netral',
            'kategori_p' => 'positif',
            'kategori_s' => 'negatif'
        ]);

        Training::create([
            'pengulas' => "mang aji",
            'is_testing' => false,
            'is_dataset' => true,
            'is_recomended' => true,
            'resto_name' => 'DataSet #13',
            'tanggapan_m' => 'makanan bersahabat',
            'tanggapan_p' => 'pelayan cekatan',
            'tanggapan_s' => 'tempatnya estetik',
            'kategori_m' => 'netral',
            'kategori_p' => 'netral',
            'kategori_s' => 'positif'
        ]);

        Training::create([
            'pengulas' => "ko lim",
            'is_testing' => false,
            'is_dataset' => true,
            'is_recomended' => false,
            'resto_name' => 'DataSet #14',
            'tanggapan_m' => 'makanan bersahabat',
            'tanggapan_p' => 'pelayan cekatan',
            'tanggapan_s' => 'tempatnya bersih',
            'kategori_m' => 'netral',
            'kategori_p' => 'netral',
            'kategori_s' => 'netral'
        ]);

        Training::create([
            'pengulas' => "cak dola",
            'is_testing' => false,
            'is_dataset' => true,
            'is_recomended' => false,
            'resto_name' => 'DataSet #15',
            'tanggapan_m' => 'makanan bersahabat',
            'tanggapan_p' => 'pelayan cekatan',
            'tanggapan_s' => 'tempatnya kotor',
            'kategori_m' => 'netral',
            'kategori_p' => 'netral',
            'kategori_s' => 'negatif'
        ]);

        Training::create([
            'pengulas' => "mang aji",
            'is_testing' => false,
            'is_dataset' => true,
            'is_recomended' => false,
            'resto_name' => 'DataSet #16',
            'tanggapan_m' => 'makanan bersahabat',
            'tanggapan_p' => 'pelayan jorok',
            'tanggapan_s' => 'tempatnya luas',
            'kategori_m' => 'netral',
            'kategori_p' => 'negatif',
            'kategori_s' => 'positif'
        ]);

        Training::create([
            'pengulas' => "ko lim",
            'is_testing' => false,
            'is_dataset' => true,
            'is_recomended' => false,
            'resto_name' => 'DataSet #17',
            'tanggapan_m' => 'makanan bersahabat',
            'tanggapan_p' => 'pelayan jorok',
            'tanggapan_s' => 'tempatnya luas',
            'kategori_m' => 'netral',
            'kategori_p' => 'negatif',
            'kategori_s' => 'netral'
        ]);

        Training::create([
            'pengulas' => "cak dola",
            'is_testing' => false,
            'is_dataset' => true,
            'is_recomended' => false,
            'resto_name' => 'DataSet #18',
            'tanggapan_m' => 'makanan bersahabat',
            'tanggapan_p' => 'pelayan jorok',
            'tanggapan_s' => 'tempatnya sempit',
            'kategori_m' => 'netral',
            'kategori_p' => 'negatif',
            'kategori_s' => 'negatif'
        ]);

        Training::create([
            'pengulas' => "mang aji",
            'is_testing' => false,
            'is_dataset' => true,
            'is_recomended' => true,
            'resto_name' => 'DataSet #19',
            'tanggapan_m' => 'makanan gak enak',
            'tanggapan_p' => 'pelayan baik',
            'tanggapan_s' => 'tempatnya baik',
            'kategori_m' => 'negatif',
            'kategori_p' => 'positif',
            'kategori_s' => 'positif'
        ]);

        Training::create([
            'pengulas' => "ko lim",
            'is_testing' => false,
            'is_dataset' => true,
            'is_recomended' => false,
            'resto_name' => 'DataSet #20',
            'tanggapan_m' => 'makanan gak enak',
            'tanggapan_p' => 'pelayan baik',
            'tanggapan_s' => 'tempatnya lumayan',
            'kategori_m' => 'negatif',
            'kategori_p' => 'positif',
            'kategori_s' => 'netral'
        ]);

        Training::create([
            'pengulas' => "cak dola",
            'is_testing' => false,
            'is_dataset' => true,
            'is_recomended' => false,
            'resto_name' => 'DataSet #21',
            'tanggapan_m' => 'makanan gak enak',
            'tanggapan_p' => 'pelayan baik',
            'tanggapan_s' => 'tempatnya buruk',
            'kategori_m' => 'negatif',
            'kategori_p' => 'positif',
            'kategori_s' => 'negatif'
        ]);

        Training::create([
            'pengulas' => "mang aji",
            'is_testing' => false,
            'is_dataset' => true,
            'is_recomended' => false,
            'resto_name' => 'DataSet #22',
            'tanggapan_m' => 'makanan gak enak',
            'tanggapan_p' => 'pelayan lumayan',
            'tanggapan_s' => 'tempatnya bagus',
            'kategori_m' => 'negatif',
            'kategori_p' => 'netral',
            'kategori_s' => 'positif'
        ]);

        Training::create([
            'pengulas' => "ko lim",
            'is_testing' => false,
            'is_dataset' => true,
            'is_recomended' => false,
            'resto_name' => 'DataSet #23',
            'tanggapan_m' => 'makanan gak enak',
            'tanggapan_p' => 'pelayan lumayan',
            'tanggapan_s' => 'tempatnya lumayan',
            'kategori_m' => 'negatif',
            'kategori_p' => 'netral',
            'kategori_s' => 'netral'
        ]);

        Training::create([
            'pengulas' => "cak dola",
            'is_testing' => false,
            'is_dataset' => true,
            'is_dataset' => true,
            'is_recomended' => false,
            'resto_name' => 'DataSet #24',
            'tanggapan_m' => 'makanan gak enak',
            'tanggapan_p' => 'pelayan lumayan',
            'tanggapan_s' => 'tempatnya buruk',
            'kategori_m' => 'negatif',
            'kategori_p' => 'netral',
            'kategori_s' => 'negatif'
        ]);

        Training::create([
            'pengulas' => "mang aji",
            'is_testing' => false,
            'is_dataset' => true,
            'is_recomended' => false,
            'resto_name' => 'DataSet #25',
            'tanggapan_m' => 'makanan gak enak',
            'tanggapan_p' => 'pelayan jelek',
            'tanggapan_s' => 'tempatnya bagus',
            'kategori_m' => 'negatif',
            'kategori_p' => 'negatif',
            'kategori_s' => 'positif'
        ]);

        Training::create([
            'pengulas' => "ko lim",
            'is_testing' => false,
            'is_dataset' => true,
            'is_recomended' => false,
            'resto_name' => 'DataSet #26',
            'tanggapan_m' => 'makanan gak enak',
            'tanggapan_p' => 'pelayan jelek',
            'tanggapan_s' => 'tempatnya lumayan',
            'kategori_m' => 'negatif',
            'kategori_p' => 'negatif',
            'kategori_s' => 'netral'
        ]);

        Training::create([
            'pengulas' => "cak dola",
            'is_testing' => false,
            'is_dataset' => true,
            'is_recomended' => false,
            'resto_name' => 'DataSet #27',
            'tanggapan_m' => 'makanan gak enak',
            'tanggapan_p' => 'pelayan jelek',
            'tanggapan_s' => 'tempatnya jelek',
            'kategori_m' => 'negatif',
            'kategori_p' => 'negatif',
            'kategori_s' => 'negatif'
        ]);
    }
}
