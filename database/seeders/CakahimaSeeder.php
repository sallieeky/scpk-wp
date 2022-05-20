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
            "sk2pm" => 2750,
            "jml_op" => 9,
            "total_ktm" => 219,
        ]);
        Cakahima::create([
            "nama" => "Arif",
            "ipk" => 3.29,
            "sk2pm" => 3500,
            "jml_op" => 4,
            "total_ktm" => 184,
        ]);
        Cakahima::create([
            "nama" => "Ayun",
            "ipk" => 3.69,
            "sk2pm" => 6450,
            "jml_op" => 4,
            "total_ktm" => 242,
        ]);
        Cakahima::create([
            "nama" => "Zidan",
            "ipk" => 3.84,
            "sk2pm" => 1650,
            "jml_op" => 3,
            "total_ktm" => 129,
        ]);
        Cakahima::create([
            "nama" => "Tata",
            "ipk" => 3.43,
            "sk2pm" => 1950,
            "jml_op" => 10,
            "total_ktm" => 312,
        ]);
        Cakahima::create([
            "nama" => "Tes",
            "ipk" => 4,
            "sk2pm" => 9000,
            "jml_op" => 15,
            "total_ktm" => 400,
        ]);
    }
}
