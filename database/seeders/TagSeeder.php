<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            ['name' => 'Pendidikan', 'slug' => 'pendidikan'],
            ['name' => 'Prestasi', 'slug' => 'prestasi'],
            ['name' => 'Liputan', 'slug' => 'liputan'],
            ['name' => 'Berita', 'slug' => 'berita'],
            ['name' => 'Kabar Fakultas', 'slug' => 'kabar-fakultas'],
            ['name' => 'Lain-lain', 'slug' => 'lain-lain'],
        ];

        Tag::insert($tags);
    }
}
