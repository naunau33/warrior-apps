<?php

namespace Database\Seeders;

use App\Models\Siswa;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

       // User::factory()->create([
       //     'name' => 'Test User',
       //     'email' => 'test@example.com',
       // ]);

        //    $siswas = [
        //     [
        //         'nis' => '202100001',
        //         'nama_lengkap' => 'Satria Tama',
        //         'kelas' => '9',
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ],
        //     [
        //         'nis' => '202100002',
        //         'nama_lengkap' => 'Puput Sholikah',
        //         'kelas' => '8',
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ],
        //    ];

        //    Siswa::insert($siswas);

        $this->call([
            SuratSeeder::class,
            KelasSeeder::class,
            SiswaSeeder::class,
        ]);

    }
}


