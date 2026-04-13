<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    $this->call([
        commSeeder::class,
        NumberFourAirObserverSchoolSeeder::class,
        NumberThreeAirObserverSchoolSeeder::class,
        GallerySeeder::class,
        BlogSeeder::class,
        EventsSeeder::class,
    ]);
    }
}
