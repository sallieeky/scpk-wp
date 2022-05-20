<?php

namespace App\Http\Controllers;

use App\Models\Cakahima;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function login()
    {
        return view("login");
    }
    public function loginPost(Request $request)
    {
        if (Auth::attempt(["email" => $request->email, "password" => $request->password])) {
            return redirect("/");
        } else {
            return back()->with("error", "Email atau password salah");
        }
    }
    public function tambahCakahima()
    {
        return view("tambah-cakahima");
    }
    public function tambahCakahimaPost(Request $request)
    {
        $request->validate([
            "nama" => "required",
            "ipk" => "required|numeric",
            "sk2pm" => "required|numeric",
            "jml_op" => "required|numeric",
            "total_ktm" => "required|numeric",
        ]);
        Cakahima::create($request->all());
        return back()->with("success", "Cakahima berhasil ditambahkan");
    }
    public function logout()
    {
        Auth::logout();
        return redirect("/login");
    }
    public function home()
    {
        $data = $this->rankWp();
        return view("home", compact("data"));
    }
    public function wp()
    {
        $data = Cakahima::all();
        $bobot = [
            "ipk" => 25,
            "sk2pm" => 15,
            "jml_op" => 5,
            "total_ktm" => 10,
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
                $vektorTemp *= pow($data[$i]->$key, $value);
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
        $result[] = $data;

        $arr = [];
        for ($i = 0; $i < count($data); $i++) {
            $arr[$i] = $data[$i];
            $arr[$i]->result = $result[$i];
        }

        return $arr;
    }

    public function rankWp()
    {
        $data = $this->wp();
        usort($data, function ($a, $b) {
            return $a->result < $b->result;
        });
        return $data;
    }
}
