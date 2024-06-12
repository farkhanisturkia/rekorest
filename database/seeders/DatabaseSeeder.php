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

        Profil::create([
            'name' => 'Astri',
            'username' => 'Axxxi'
        ]);

        Profil::create([
            'name' => 'Putri',
            'username' => 'Pxxxi'
        ]);

        Profil::create([
            'name' => 'Evony',
            'username' => 'Exxxy'
        ]);

        Training::create([
            'profil_id' => 1,
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
            'profil_id' => 2,
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
            'profil_id' => 3,
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
            'profil_id' => 1,
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
            'profil_id' => 2,
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
            'profil_id' => 3,
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
            'profil_id' => 1,
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
            'profil_id' => 2,
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
            'profil_id' => 3,
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
            'profil_id' => 1,
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
            'profil_id' => 2,
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
            'profil_id' => 3,
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
            'profil_id' => 1,
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
            'profil_id' => 2,
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
            'profil_id' => 3,
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
            'profil_id' => 1,
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
            'profil_id' => 2,
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
            'profil_id' => 3,
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
            'profil_id' => 1,
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
            'profil_id' => 2,
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
            'profil_id' => 3,
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
            'profil_id' => 1,
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
            'profil_id' => 2,
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
            'profil_id' => 3,
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
            'profil_id' => 1,
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
            'profil_id' => 2,
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
            'profil_id' => 3,
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

        Training::create([
            'profil_id' => 1,
            'is_testing' => true,
            'is_dataset' => false,
            'is_recomended' => true,
            'resto_name' => 'Nua Indah Coffe dan Resto',
            'tanggapan_m' => 'makanan enak',
            'tanggapan_p' => 'pelayan cukup memuaskan',
            'tanggapan_s' => 'tempatnya bagus',
            'kategori_m' => 'positif',
            'kategori_p' => 'netral',
            'kategori_s' => 'positif',
            'alamat'   => 'Jalan ahmad nasution no.5, wandoka utara, kabupaten wakatobi, sulawesi tenggara, 93791',
            'jtu'   => 18.4,
            'jhp'   => 7.2,
            'jpk'   => 0.006
        ]);

        Training::create([
            'profil_id' => 2,
            'is_testing' => true,
            'is_dataset' => false,
            'is_recomended' => true,
            'resto_name' => 'Restaurant Wisata',
            'tanggapan_m' => 'makanan enak',
            'tanggapan_p' => 'pelayan luar biasa',
            'tanggapan_s' => 'tempatnya cantik',
            'kategori_m' => 'positif',
            'kategori_p' => 'positif',
            'kategori_s' => 'positif',
            'alamat'   => 'Pulau wangiwangi, sulawesi tenggara, kabupaten wakatobi, sulawesi tenggara, 93795',
            'jtu'   => 18.3,
            'jhp'   => 0.16,
            'jpk'   => 0.45
        ]);

        Training::create([
            'profil_id' => 3,
            'is_testing' => true,
            'is_dataset' => false,
            'is_recomended' => true,
            'resto_name' => 'Ampupu Beach Resort',
            'tanggapan_m' => 'makanan enak',
            'tanggapan_p' => 'pelayan memuaskan',
            'tanggapan_s' => 'tempatnya jelek',
            'kategori_m' => 'positif',
            'kategori_p' => 'positif',
            'kategori_s' => 'negatif',
            'alamat'   => 'Jalan sultan hasanudin, Kec.wangi-wangi, Kab.Wakatobi, Sulawesi tenggara, 93791',
            'jtu'   => 20.6,
            'jhp'   => 0.05,
            'jpk'   => 3.1
        ]);

        Training::create([
            'profil_id' => 1,
            'is_testing' => true,
            'is_dataset' => false,
            'is_recomended' => true,
            'resto_name' => 'RM Reza Paseba',
            'tanggapan_m' => 'makanan biasa',
            'tanggapan_p' => 'pelayan cukup memuaskan',
            'tanggapan_s' => 'tempatnya bagus',
            'kategori_m' => 'netral',
            'kategori_p' => 'netral',
            'kategori_s' => 'positif',
            'alamat'   => 'Ambeua, Kec.Kaledupa, Kab.Wakatobi, Sulawesi Tenggara 93792',
            'jtu'   => 0.4,
            'jhp'   => 0.28,
            'jpk'   => 0.5
        ]);

        Training::create([
            'profil_id' => 2,
            'is_testing' => true,
            'is_dataset' => false,
            'is_recomended' => true,
            'resto_name' => 'Laroka Hotel & resto',
            'tanggapan_m' => 'makanan basi',
            'tanggapan_p' => 'pelayan luar biasa',
            'tanggapan_s' => 'tempatnya cantik',
            'kategori_m' => 'negatif',
            'kategori_p' => 'positif',
            'kategori_s' => 'positif',
            'alamat'   => 'Waiti, Tomia, Kab.Wakatobi, Sulawesi Tenggara',
            'jtu'   => 2.9,
            'jhp'   => 0,
            'jpk'   => 4.6
        ]);

        Training::create([
            'profil_id' => 3,
            'is_testing' => true,
            'is_dataset' => false,
            'is_recomended' => true,
            'resto_name' => 'Rumah Makan Pasundan Binongko Wakatobi',
            'tanggapan_m' => 'makanan enak',
            'tanggapan_p' => 'pelayan memuaskan',
            'tanggapan_s' => 'tempatnya bagus',
            'kategori_m' => 'positif',
            'kategori_p' => 'positif',
            'kategori_s' => 'positif',
            'alamat'   => 'Kampo-kampo, Binongko, Kab.Wakatobi, Sulawesi Tenggara, 93794',
            'jtu'   => 3.6,
            'jhp'   => 0.13,
            'jpk'   => 0.75
        ]);
    }
}
