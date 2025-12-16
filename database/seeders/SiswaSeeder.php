<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class SiswaSeeder extends Seeder{

    public function run(): void
    {
        $kelas7 = DB::table('kelas')->where('tingkat', 7)->first();
        $kelas8 = DB::table('kelas')->where('tingkat', 8)->first();
        $kelas9 = DB::table('kelas')->where('tingkat', 9)->first();

        DB::table('siswas')->insert([
            [
                'nis' => '202100016',
                'nama_lengkap' => 'Dian Aji Prasetya',
                'kelas_id' => $kelas7->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nis' => '202100015',
                'nama_lengkap' => 'Rifah Julianti',
                'kelas_id' => $kelas7->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nis' => '202100014',
                'nama_lengkap' => 'Angel Febriana',
                'kelas_id' => $kelas8->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nis' => '202100013',
                'nama_lengkap' => 'Kurnia Ayuk Firnanda Putri',
                'kelas_id' => $kelas8->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nis' => '202100012',
                'nama_lengkap' => 'Sari Hapizah',
                'kelas_id' => $kelas8->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nis' => '202100011',
                'nama_lengkap' => 'Fatimah Sahar Karim',
                'kelas_id' => $kelas8->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nis' => '202100010',
                'nama_lengkap' => 'Kharisma Febriana',
                'kelas_id' => $kelas8->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nis' => '202100009',
                'nama_lengkap' => 'Fiona Eza Marchelina',
                'kelas_id' => $kelas8->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nis' => '202100008',
                'nama_lengkap' => 'Mawaddah Putri Ramadhani',
                'kelas_id' => $kelas8->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nis' => '202100007',
                'nama_lengkap' => 'Cika Abeliana Sari',
                'kelas_id' => $kelas9->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nis' => '202100006',
                'nama_lengkap' => 'Zahira Rizkya Putri',
                'kelas_id' => $kelas9->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nis' => '202100005',
                'nama_lengkap' => 'Firdaus Khusaini Abdillah',
                'kelas_id' => $kelas9->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nis' => '202100004',
                'nama_lengkap' => 'Wildan Zaki Pratama',
                'kelas_id' => $kelas9->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nis' => '202100003',
                'nama_lengkap' => 'Febrian Syahputra',
                'kelas_id' => $kelas9->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nis' => '202100002',
                'nama_lengkap' => 'Febrian Saiful Nurcahyono',
                'kelas_id' => $kelas9->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nis' => '202100001',
                'nama_lengkap' => 'Rizky Danis',
                'kelas_id' => $kelas9->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
           ]);

    }
}
