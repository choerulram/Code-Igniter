<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriKomikModel extends Model
{
    protected $table = 'kategori_komik'; // mendefinisikan nama tabel
    protected $useTimestamps = true; // set timestamp default
    protected $allowedFields = ['nama_kategori', 'deskripsi', 'tanggal_pembuatan', 'tanggal_pembaruan']; // mendefinisikan isi tabel

    public function getKomik($id = null)
    {
        if ($id == null) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }

}
