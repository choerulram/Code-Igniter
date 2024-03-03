<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Code Igniter | Home',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'Code Igniter | About'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Code Igniter | Contact',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. Tongkol No.123',
                    'kota' => 'Cilacap'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. Mujair No.123',
                    'kota' => 'Cilacap'
                ]
            ]
            
        ];
        return view('pages/contact', $data);
    }
}
