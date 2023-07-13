<?php

namespace Database\Seeders;

use App\Models\Reviews;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reviews::create([
            'movies_id' => 1,
            'users_id' => 1,
            'date' => '2023-06-28',
            'description' => 'Great movie!',
            'rating' => 4.5,
        ]);

        Reviews::create([
            'movies_id' => 2,
            'users_id' => 2,
            'date' => '2023-06-29',
            'description' => 'Amazing film!',
            'rating' => 5.0,
        ]);

        Reviews::create([
            'movies_id' => 3,
            'users_id' => 3,
            'date' => '2023-06-30',
            'description' => 'Enjoyed watching it!',
            'rating' => 4.0,
        ]);

        Reviews::create([
            'movies_id' => 4,
            'users_id' => 4,
            'date' => '2023-07-01',
            'description' => 'Interesting plot!',
            'rating' => 3.5,
        ]);

        Reviews::create([
            'movies_id' => 5,
            'users_id' => 1,
            'date' => '2023-07-02',
            'description' => 'Impressive performance!',
            'rating' => 4.2,
        ]);

        Reviews::create([
            'movies_id' => 6,
            'users_id' => 2,
            'date' => '2023-07-03',
            'description' => 'Captivating storyline!',
            'rating' => 4.8,
        ]);

        Reviews::create([
            'movies_id' => 7,
            'users_id' => 3,
            'date' => '2023-07-04',
            'description' => 'Highly recommended!',
            'rating' => 4.5,
        ]);

        Reviews::create([
            'movies_id' => 8,
            'users_id' => 1,
            'date' => '2023-07-05',
            'description' => 'Entertaining and funny!',
            'rating' => 4.0,
        ]);

        Reviews::create([
            'movies_id' => 9,
            'users_id' => 2,
            'date' => '2023-07-06',
            'description' => 'Great cinematography!',
            'rating' => 4.6,
        ]);

        Reviews::create([
            'movies_id' => 10,
            'users_id' => 3,
            'date' => '2023-07-07',
            'description' => 'Emotionally touching!',
            'rating' => 4.3,
        ]);

        Reviews::create([
            'movies_id' => 11,
            'users_id' => 1,
            'date' => '2023-07-08',
            'description' => 'Well-directed film!',
            'rating' => 4.7,
        ]);

        Reviews::create([
            'movies_id' => 12,
            'users_id' => 2,
            'date' => '2023-07-09',
            'description' => 'Good acting performances!',
            'rating' => 4.1,
        ]);

        Reviews::create([
            'movies_id' => 13,
            'users_id' => 3,
            'date' => '2023-07-10',
            'description' => 'Engaging and suspenseful!',
            'rating' => 4.4,
        ]);

        Reviews::create([
            'movies_id' => 14,
            'users_id' => 1,
            'date' => '2023-07-11',
            'description' => 'Impressive screenplay!',
            'rating' => 4.5,
        ]);

        Reviews::create([
            'movies_id' => 15,
            'users_id' => 2,
            'date' => '2023-07-12',
            'description' => 'Unique and thought-provoking!',
            'rating' => 4.8,
        ]);
    }
}
