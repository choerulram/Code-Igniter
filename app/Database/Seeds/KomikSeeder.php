<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class KomikSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'judul' => 'Naruto',
                'slug' => 'naruto',
                'penulis' => 'Masashi Kishimoto',
                'penerbit' => 'Shonen Jump',     
                'sampul' => 'naruto.jpg',     
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'judul' => 'One Piece',
                'slug' => 'one-piece',
                'penulis' => 'Eichiro Oda',
                'penerbit' => 'Gramedia',     
                'sampul' => 'onepiece.jpg',     
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'judul' => 'Dragon Ball',
                'slug' => 'dragon-ball',
                'penulis' => 'Akira Toriyama',
                'penerbit' => 'Shueisha',     
                'sampul' => 'dragonball.jpg',     
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'judul' => 'Attack on Titan',
                'slug' => 'attack-on-titan',
                'penulis' => 'Hajime Isayama',
                'penerbit' => 'Kodansha',     
                'sampul' => 'aot.jpg',     
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'judul' => 'My Hero Academia',
                'slug' => 'my-hero-academia',
                'penulis' => 'Kohei Horikoshi',
                'penerbit' => 'Shueisha',     
                'sampul' => 'mha.jpg',     
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
        ];

        $this->db->table('komik')->insertBatch($data);
    }
}
