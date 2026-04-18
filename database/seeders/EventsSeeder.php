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
        ]);
    }
}

//london airshow event
//remembrance day
//poker nights
//uker nights
//darts
