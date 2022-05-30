<?php

namespace Database\Seeders;

use App\Models\Cakahima;
use Illuminate\Database\Seeder;

class CakahimaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cakahima::create([
            "nama" => "Yus",
            "ipk" => 3.5,
            "prestasi" => 5,
            "nilai_karya_tulis" => 76,
            "toefl" => 400,
        ]);
        Cakahima::create([
            "nama" => "Arif",
            "ipk" => 3.29,
            "prestasi" => 2,
            "nilai_karya_tulis" => 94,
            "toefl" => 526,
        ]);
        Cakahima::create([
            "nama" => "Ayun",
            "ipk" => 3.69,
            "prestasi" => 4,
            "nilai_karya_tulis" => 88,
            "toefl" => 481,
        ]);
        Cakahima::create([
            "nama" => "Zidan",
            "ipk" => 3.84,
            "prestasi" => 1,
            "nilai_karya_tulis" => 82,
            "toefl" => 524,
        ]);

        // random ipk prestasi nilai_karya_tulis toefl
        for ($i = 0; $i < 100; $i++) {
            Cakahima::create([
                "nama" => "Mahasiswa " . $i,
                "ipk" => rand(300, 400) / 100,
                "prestasi" => rand(1, 10),
                "nilai_karya_tulis" => rand(50, 100),
                "toefl" => rand(1, 600),
            ]);
        }
    }
}
