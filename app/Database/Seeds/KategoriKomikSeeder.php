<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class KategoriKomikSeeder extends Seeder
{
    public function run()
    {
        // $data = [
        //     [
        //         'nama_kategori' => 'Fantasi',
        //         'deskripsi' => 'Kategori untuk komik bergenre fantasi',
        //         'gambar' => 'fantasi.jpg',
        //         'created_at' => Time::now(),
        //         'updated_at' => Time::now()
        //     ],
        //     [
        //         'nama_kategori' => 'Aksi',
        //         'deskripsi' => 'Kategori untuk komik bergenre aksi',
        //         'gambar' => 'aksi.jpg',
        //         'created_at' => Time::now(),
        //         'updated_at' => Time::now()
        //     ],
        //     [
        //         'nama_kategori' => 'Petualangan',
        //         'deskripsi' => 'Kategori untuk komik bergenre petualangan',
        //         'gambar' => 'petualangan.jpg',
        //         'created_at' => Time::now(),
        //         'updated_at' => Time::now()
        //     ]
        // ];

        $faker = \Faker\Factory::create('id_ID');
        $faker->addProvider(new \Faker\Provider\Lorem($faker));
        for ($i = 0; $i < 100; $i++) {
            $data = [
                'nama_kategori' => $faker->name,
                'deskripsi' => $faker->sentence(),
                'gambar' => $faker->imageUrl(),
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ];

            // Insert data lebih dari 1 data
            // $this->db->table('kategori_komik')->insertBatch($data);
            
            // Simple Queries untuk 1 data
            // $this->db->query('INSERT INTO kategori_komik (nama_kategori, deskripsi, gambar) VALUES(:nama_kategori:, :deskripsi:, :gambar:)', $data);

            // Using Query Builder
            $this->db->table('kategori_komik')->insert($data);
        }
    }
}
