<?php

namespace Database\Seeders;

use App\Models\Nilai_Peserta;
use App\Models\Peserta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PesertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 0; $i < 100; $i++) {

            $peserta = new Peserta;
            $peserta->nama = fake()->name();
            $peserta->photo = fake()->imageUrl($width = 400, $height = 400);
            $peserta->email = fake()->email();
            $peserta->save();

            $nilai_peserta = new Nilai_Peserta;
            $nilai_peserta->id_peserta = $peserta->id;
            $nilai_peserta->nilai_x = mt_rand(1, 33);
            $nilai_peserta->nilai_y = mt_rand(1, 23);
            $nilai_peserta->nilai_z = mt_rand(1, 18);
            $nilai_peserta->nilai_w = mt_rand(1, 13);
            $nilai_peserta->save();
        }
    }
}
