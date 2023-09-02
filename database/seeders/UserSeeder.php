<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id' => '1',
                'username' => 'rinsan',
                'slug' => 'rinsan',
                'email' => 'rin@gmail.com',
                'password' => bcrypt('1234567890'),
                'role' => 'admin'
            ],
            [
                'id' => '2',
                'username' => 'Mika',
                'slug' => 'mika',
                'email' => 'mika@gmail.com',
                'password' => bcrypt('1234567890'),
                'role' => 'user'
            ],
            [
                'id' => '3',
                'username' => 'Shinji',
                'slug' => 'shinji',
                'email' => 'shin@gmail.com',
                'password' => bcrypt('1234567890'),
                'role' => 'user'
            ],
            [
                'id' => '4',
                'username' => 'Yoru Naka',
                'slug' => 'yoru-naka',
                'email' => 'yor@gmail.com',
                'password' => bcrypt('1234567890'),
                'role' => 'user'
            ],
        ]);
    }
}
