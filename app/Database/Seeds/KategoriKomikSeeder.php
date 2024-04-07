<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class KategoriKomikSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_kategori' => 'Fantasi',
                'deskripsi' => 'Kategori untuk komik bergenre fantasi',
                'tanggal_pembuatan' => '2023-01-01',
                'tanggal_pembaruan' => '2024-01-01',     
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'nama_kategori' => 'Aksi',
                'deskripsi' => 'Kategori untuk komik bergenre aksi',
                'tanggal_pembuatan' => '2023-02-02',
                'tanggal_pembaruan' => '2024-02-02',  
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'nama_kategori' => 'Petualangan',
                'deskripsi' => 'Kategori untuk komik bergenre petualangan',
                'tanggal_pembuatan' => '2023-03-03',
                'tanggal_pembaruan' => '2024-03-03',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ]
        ];

        // $faker = \Faker\Factory::create('id_ID');
        // for ($i = 0; $i < 100; $i++) {
        //     $data = [
        //         'nama_kategori' => $faker->name,
        //         'deskripsi' => $faker->sentence(6, true),
        //         'tanggal_pembuatan' => $faker->dateTimeBetween('-2 years', 'now')->format('Y-m-d H:i:s'),
        //         'tanggal_pembaruan' => $faker->dateTimeBetween('-2 years', 'now')->format('Y-m-d H:i:s'),
        //         'created_at' => Time::now(),
        //         'updated_at' => Time::now()
        //     ];

            // Insert data lebih dari 1 data
            $this->db->table('kategori_komik')->insertBatch($data);
            
            // Simple Queries untuk 1 data
            // $this->db->query('INSERT INTO kategori_komik (nama_kategori, deskripsi, gambar) VALUES(:nama_kategori:, :deskripsi:, :gambar:)', $data);

            // Using Query Builder
            // $this->db->table('kategori_komik')->insert($data);
        // }
    }
}
