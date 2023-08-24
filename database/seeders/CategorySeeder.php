<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Pendidikan', 'slug' => 'pendidikan'],
            ['name' => 'Prestasi', 'slug' => 'prestasi'],
            ['name' => 'Berita', 'slug' => 'berita'],
        ];

        Category::insert($categories);
    }
}
