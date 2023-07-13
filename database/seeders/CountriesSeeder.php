<?php

namespace Database\Seeders;

use App\Models\Countries;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Countries::create([
            'id' => '1',
            'name' => 'Korea Selatan',
        ]);
        Countries::create([
            'id' => '2',
            'name' => 'Amerika Serikat',
        ]);
        Countries::create([
            'id' => '3',
            'name' => 'Indonesia',
        ]);
        Countries::create([
            'id' => '4',
            'name' => 'Jepang',
        ]);
    }
}
