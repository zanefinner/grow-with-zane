<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GrowJournals;
use Faker\Factory as Faker;
use App\Models\GrowJournalEntries; // Adjust the namespace

class GrowJournalEntriesSeeder extends Seeder
{
    public function run()
    {
        // Create sample journal entries with random data
        $faker = Faker::create();

        // Get all existing grow journal IDs
        $journalIds = GrowJournals::pluck('id');

        // Create sample journal entries with random data
        for ($i = 1; $i <= 200; $i++) { // Create 200 entries
            GrowJournalEntries::create([
                'journal_id' => $journalIds->random(),
                'entry_date' => now()->subDays(rand(1, 30)),
                'notes' => 'Sample notes for entry ' . $i,
                'image_path' => 'path/to/image_' . $i . '.jpg',
            ]);
        }
    }
}