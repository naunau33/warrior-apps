<?php

namespace Database\Seeders;

use App\Models\Surat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('surats')->insert([
            ['nama_surat' => 'An-Naba'],
            ['nama_surat' => 'An-Naziat'],
            ['nama_surat' => 'Abasa'],
            ['nama_surat' => 'At-Takwir'],
            ['nama_surat' => 'Al-Infithar'],
            ['nama_surat' => 'Al-Mutaffifin'],
            ['nama_surat' => 'Al-Insyiqaq'],
            ['nama_surat' => 'Al-Buruj'],
            ['nama_surat' => 'At-Thariq'],
            ['nama_surat' => 'Al-A\'la'],
            ['nama_surat' => 'Al_Ghasyiyah'],
            ['nama_surat' => 'Al-BAlad'],
            ['nama_surat' => 'Asy-Syams'],
            ['nama_surat' => 'Al-Lail'],
            ['nama_surat' => 'Ad-Dhuha'],
            ['nama_surat' => 'Al-Insyirah'],
            ['nama_surat' => 'At-Tin'],
            ['nama_surat' => 'Al-Alaq'],
            ['nama_surat' => 'Al-Qadr'],
            ['nama_surat' => 'Al-Bayyinah'],
            ['nama_surat' => 'Al-Zalzalah'],
            ['nama_surat' => 'Al-Adiyat'],
            ['nama_surat' => 'Al-Qariah'],
            ['nama_surat' => 'At-Takatsur'],
            ['nama_surat' => 'Al-\'Asr'],
            ['nama_surat' => 'Al-Humazah'],
            ['nama_surat' => 'Al-Fil'],
            ['nama_surat' => 'Al-Quraisy'],
            ['nama_surat' => 'Al-Maun'],
            ['nama_surat' => 'Al-Kautsar'],
            ['nama_surat' => 'Al-Kafirun'],
            ['nama_surat' => 'An-Nasr'],
            ['nama_surat' => 'Al-Lahab'],
            ['nama_surat' => 'Al-Ikhlas'],
            ['nama_surat' => 'Al-Falaq'],
            ['nama_surat' => 'Al-Nas'],
        ]);

    }
}
