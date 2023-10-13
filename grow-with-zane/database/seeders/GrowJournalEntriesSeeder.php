<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\GrowJournalEntries; // Adjust the namespace

class GrowJournalEntriesSeeder extends Seeder
{
    public function run()
    {
        // Create sample journal entries with random data
        for ($i = 1; $i <= 20; $i++) { // Create 20 entries
            GrowJournalEntries::create([
                'journal_id' => rand(1, 10), // Randomly assign to grow journals 1-10
                'entry_date' => now()->subDays(rand(1, 30)), // Random date within the last 30 days
                'notes' => 'Sample notes for entry ' . $i,
                'image_path' => 'path/to/image_' . $i . '.jpg',
            ]);
        }
    }
}