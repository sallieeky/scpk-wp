<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function wp()
    {
        $data = [
            [
                "harga" => 1000000,
                "ulasan" => 200,
                "memori" => 4,
                "kamera" => 300
            ],
            [
                "harga" => 3500000,
                "ulasan" => 400,
                "memori" => 10,
                "kamera" => 250
            ],
            [
                "harga" => 7000000,
                "ulasan" => 900,
                "memori" => 16,
                "kamera" => 500
            ],
        ];
        $bobot = [
            "harga" => 25,
            "ulasan" => 15,
            "memori" => 5,
            "kamera" => 10,
        ];

        $sum = 0;
        foreach ($bobot as $key => $value) {
            $sum += $value;
        }

        $bobotW = [];
        foreach ($bobot as $key => $value) {
            $bobotW[$key] = $value / $sum;
        }

        $vektorS = [];
        for ($i = 0; $i < count($data); $i++) {
            $vektorTemp = 1;
            foreach ($bobotW as $key => $value) {
                $vektorTemp *= pow($data[$i][$key], $value);
            }
            $vektorS[] = $vektorTemp;
        }

        $sumV = 0;
        foreach ($vektorS as $vs) {
            $sumV += $vs;
        }

        $result = [];
        foreach ($vektorS as $vs) {
            $result[] = $vs / $sumV;
        }

        return $result;
    }
}
