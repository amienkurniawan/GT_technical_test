<?php

namespace Database\Seeders;

use App\Models\Nilai_Peserta;
use App\Models\Peserta;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

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
            $peserta->photo = $this->generateDummyImage();
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

    private function generateDummyImage()
    {
        $faker = Faker::create();

        $image = Image::canvas(400, 400);
        $image->text($faker->word(), 200, 200, function ($font) {
            $font->size(40);
            $font->color('#123456');
            $font->align('center');
            $font->valign('center');
        });

        $filename = 'dummy-image-' . uniqid() . '.jpg';
        $path = 'photos/' . $filename;
        $accessPath = 'photos/' . $filename;

        Storage::disk('public')->put($path, $image->encode());

        return $accessPath;
    }
}
