<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Events;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // this is a default example seeder
        Events::create([
            'events_title' => 'This is a real London Aviation Museum Event',
            'events_description' => 'Brief description of what the specific event will be about, some details or dress code maybe.',
            'events_start_datetime' => now(),
            'events_end_datetime' => now()->addHours(24),
            'events_timezone' => null,
            'events_category' => 'Dinner Party',
            'events_status' => 'Sold Out',
            'events_image_1' => 'images/real-image-path',
            'events_image_alt_1' => 'picture of the London airshow, 2025',
            'events_image_2' => null,
            'events_image_alt_2' => null,
            'events_image_3' => 'images/desktop/another-real-image-path',
            'events_image_alt_3' => 'picture of aviation dinnerparty 2023',
        ]);
    }
}
