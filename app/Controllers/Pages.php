<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Home LIght ID",
            "test" => ["satu", "dua", "tiga"]
        ];
        return view('pages/home', $data);
    }
    public function about()
    {
        $data = [
            "title" => "About LIght ID"
        ];

        return view('pages/about', $data);
    }
    public function contact()
    {
        $data = [
            "title" => "Contact Light ID",
            "alamat" => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'jl.Kento Samlekom Mamank 1',
                    'kota' => 'sarabit konto'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'jl.Denshit Samlekom Mamank 10',
                    'kota' => 'buroda'
                ]
            ]
        ];

        return view('pages/contact', $data);
    }
}
