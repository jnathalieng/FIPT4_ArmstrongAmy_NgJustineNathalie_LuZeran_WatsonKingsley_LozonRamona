<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Events;
use App\Models\EventImage;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;


class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed images for each event
        $seedImages = [
            1 => ['londonAirShow.png'],
            2 => ['Remembrance-main-image.jpg'],
            3 => ['ijonrobles.jpg'],
        ];

        $eventsData = [

        //london air show
            [
                'events_title' => 'The London Airshow',
                'events_description' => 'Airshow London is excited to present SKYDRIVE 2026! Join us next August at our drive-in event for a spectacular display of aviation power in the air and on the ground!

                📍 London International Airport, London Ontario
                🗓 August 21, 22, 23, 2026
                ✅ The must-attend family event of the year

                We invite you to join us, support us, and get excited with us. Let’s get together and celebrate as a community. And what better way to do that than under the roar of flight – that sparks the imagination and inspires us to soar.

                As voted on by our fans, Airshow London was named the Best Air Show in North America by USA Today’s 10Best Contest in 2022, 2023, 2024 and 2025. You don’t want to miss this epic family experience.',

                'events_start_datetime' => Carbon::createFromFormat('Y-m-d', '2026-08-21')->startOfDay(),
                'events_end_datetime' => Carbon::createFromFormat('Y-m-d', '2026-08-23')->endOfDay(),
                'events_timezone' => 'UTC',
                'events_category' => 'Airshow',
                'events_status' => 'Published',
            ],

            //Remembrance Day
            [
                'events_title' => 'Remembrance Day',
                'events_description' => 'The 2025 London Remembrance Day Ceremony will take place at the London Cenotaph in Victoria Park on Tuesday, November 11, from 10:45 to 11:20 a.m.

                All are invited to join the Ceremony as we honour the courage and sacrifice of those who have served, and continue to serve, our country in times of war, military conflict, and peace.

                Attendees are encouraged to arrive at the Cenotaph by 10:30 a.m. to welcome the parade. Centennial Hall will be open for a reception following the Ceremony.

                Members of the public are invited to lay wreaths at the Cenotaph up until 6 p.m. on November 10, or anytime before and after the Ceremony on November 11.',

                'events_start_datetime' => Carbon::create(2026, 11, 11, 10, 45, 0),
                'events_end_datetime' => Carbon::create(2026, 11, 11, 12, 0, 0),
                'events_timezone' => 'UTC',
                'events_category' => 'Ceremony',
                'events_status' => 'Published',
            ],

            //Poker Night
            [
                'events_title' => 'Poker Nights at the Museum',
                'events_description' => 'Join us for a unique evening of cards, community, at the Museum. Poker Night blends friendly competition with an unforgettable setting surrounded by aircraft and exhibits. Whether youre a seasoned player or just looking for a fun night out, all skill levels are welcome. Enjoy a relaxed atmosphere, meet fellow aviation enthusiasts, and try your luck at the tables. Light refreshments will be available, and prizes will be awarded to top players.All proceeds help support the museums ongoing efforts to preserve and share Canadas aviation heritage.',
                'events_start_datetime' => Carbon::create(2026, 05, 10, 21, 0, 0),
                'events_end_datetime' => Carbon::create(2026, 05, 10, 23, 0, 0),
                'events_timezone' => 'UTC',
                'events_category' => 'Social Gathering',
                'events_status' => 'Published',
            ],
        ];

        foreach ($eventsData as $index => $eventData) {
            $event = Events::create($eventData);
 
            // Copy and attach seed images if they exist
            if (isset($seedImages[$index + 1])) {
                foreach ($seedImages[$index + 1] as $slot => $imageName) {
                    $seedPath = public_path('images/event-images/' . $imageName);
                    
                    // Check if seed image exists
                    if (File::exists($seedPath)) {
                        // Create destination filename
                        $filename = time() . '_' . ($slot + 1) . '_' . $imageName;
                        $destinationPath = public_path('images/event-images/' . $filename);
                        
                        // Copy seed image to event-images folder
                        File::copy($seedPath, $destinationPath);
                        
                        // Create EventImage record
                        EventImage::create([
                            'event_id' => $event->id,
                            'path' => $filename,
                            'alt_text' => $event->events_title . ' Image ' . ($slot + 1),
                            'is_featured' => $slot === 0,
                            'order' => $slot + 1
                        ]);
                    }
                }
            }
        }
    }

}