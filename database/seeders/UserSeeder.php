<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username' => 'rinsan',
                'slug' => 'rinsan',
                'email' => 'rin@gmail.com',
                'password' => Hash::make('1234567890'),
                'role' => 'admin',
            ],
            [
                'username' => 'Mika',
                'slug' => 'mika',
                'email' => 'mika@gmail.com',
                'password' => bcrypt('1234567890'),
                'role' => 'user',
            ],
        ]);
    }
}
