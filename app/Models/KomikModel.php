<?php

namespace App\Models;

use CodeIgniter\Model;

class KomikModel extends Model
{
    protected $table = 'komik'; // mendefinisikan nama tabel
    protected $useTimestamps = true; // set timestamp default
    protected $allowedFields = ['judul', 'slug', 'penulis', 'penerbit', 'sampul'];

    public function getKomik($slug = false)
    {
        if($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}