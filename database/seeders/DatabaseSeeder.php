<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Mikaela Hyakuya',
        //     'username' => 'Mikaela',
        //     'email' => 'mika@gmail.com',
        //     'password' => bcrypt(12345)
        // ]);

        // User::factory(3)->create();

        // Post::factory(20)->create();

        $this->call([UserSeeder::class, TagSeeder::class, CategorySeeder::class]);
    }
}
