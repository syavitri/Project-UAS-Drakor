<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@nf.com',
            'password' => bcrypt('admin@nf.com'),
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'Nico',
            'email' => 'nico@nf.com',
            'password' => bcrypt('nico@nf.com'),
            'role' => 'user',
        ]);

        User::create([
            'name' => 'Bintang',
            'email' => 'bintang@nf.com',
            'password' => bcrypt('bintang@nf.com'),
            'role' => 'user',
        ]);

        User::create([
            'name' => 'Putri',
            'email' => 'putri@nf.com',
            'password' => bcrypt('putri@nf.com'),
            'role' => 'user',
        ]);

        User::create([
            'name' => 'Api',
            'email' => 'api@nf.com',
            'password' => bcrypt('api@nf.com'),
            'role' => 'user',
        ]);
    }
}
