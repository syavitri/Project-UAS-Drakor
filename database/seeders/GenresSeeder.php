<?php

namespace Database\Seeders;

use App\Models\Genres;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genres::create([
            'id' => '1',
            'name' => 'Action',
            'description' => 'Genre yang menampilkan aksi dan pertempuran yang intens.'
        ]);
        Genres::create([
            'id' => '2',
            'name' => 'Thriller',
            'description' => 'Genre yang menampilkan ketegangan dan suspense yang tinggi.'
        ]);
        Genres::create([
            'id' => '3',
            'name' => 'Comedy',
            'description' => 'Genre yang menampilkan humor dan situasi lucu.'
        ]);
        Genres::create([
            'id' => '4',
            'name' => 'Drama',
            'description' => 'Genre yang menampilkan konflik emosional dan perjalanan karakter.'
        ]);
        Genres::create([
            'id' => '5',
            'name' => 'Fantasi',
            'description' => 'Genre yang menampilkan unsur-unsur magis dan dunia fiksi.'
        ]);
        Genres::create([
            'id' => '6',
            'name' => 'Romance',
            'description' => 'Genre yang menampilkan kisah cinta dan hubungan antara karakter.'
        ]);
    }
}
