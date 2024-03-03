<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        echo 'Ini controller coba method';
    }

    public function about($nama = '', $nim = '')
    {
        echo 'Halo nama saya ' . $nama . ', nim saya ' . $nim;
    }
}
