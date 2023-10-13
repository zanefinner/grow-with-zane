<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GrowJournals;

use Faker\Factory as Faker;

class GrowJournalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        // Create sample grow journals with random data
        for ($i = 1; $i <= 10; $i++) { // Create 10 journals
            GrowJournals::create([
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'user_id' => rand(1, 5), // Randomly assign to users 1-5
            ]);
        }
    }
}
