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
                'name' => 'rin',
                'username' => 'rinsan',
                'email' => 'rin@gmail.com',
                'password' => bcrypt('1234567890'),
                'role' => 'admin'
            ],
            [
                'id' => '2',
                'name' => 'mikaela',
                'username' => 'Mika',
                'email' => 'mika@gmail.com',
                'password' => bcrypt('1234567890'),
                'role' => 'user'
            ],
            [
                'id' => '3',
                'name' => 'Test',
                'username' => 'test',
                'email' => 'test@gmail.com',
                'password' => bcrypt('1234567890'),
                'role' => 'user'
            ],
        ]);
    }
}
