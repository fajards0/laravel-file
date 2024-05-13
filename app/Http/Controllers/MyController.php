<?php

namespace App\Http\Controllers;

class MyController extends Controller
{
    public function introduce()
    {
        $data = [
            "nama" => "Fajar Dwi Saputro",
            "alamat" => "Sukamenak",
            "agama" => "Islam",
            "jk" => "L",
            "hobi" => [
                "Tidur", "Makan", "Minum",
            ],
        ];
        return view('latihan.perkenalan', compact('data'));
    }

    public function animals()
    {
        $animal = [
            "Lion", "Crocodile", "Rabbit", "Eagle",
        ];
        return view('latihan.animal', ['hewan' => $animal]);
    }
}
