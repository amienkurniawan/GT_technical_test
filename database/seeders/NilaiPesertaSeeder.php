<?php

namespace Database\Seeders;

use App\Models\Peserta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NilaiPesertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 0; $i < 100; $i++) {
            DB::table('nilai_peserta')->insert([
                'id_peserta' => $i,
                'nilai_x' => mt_rand(1, 33),
                'nilai_y' => mt_rand(1, 23),
                'nilai_z' => mt_rand(1, 18),
                'nilai_w' => mt_rand(1, 13),
            ]);
        }
    }
}
