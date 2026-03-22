<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NumberThreeAirObserverSchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('number_three_air_observers_school')->insert([
            [
        'user_id' => 1,
        'rank' => 'LEADING AIRCRAFTMAN',
        'name' => 'LEWIS DUFF',
        'picture' => '',
        'info' => 'Killed in a mid-air collision during a solo training flight southwest of the London aerodrome.',
        'unit' => 'No. 3 Air Observer School',
        'date' => '',
        'aircraft' => '',
        'incident' => 'Mid-air collision',
        'location' => 'One quarter mile southwest of London aerodrome',
        'details' => 'Engaged in a solo training flight when his aircraft collided with another student aircraft. Both airmen were killed.',
        'created_at' => now(),
        'updated_at' => now(),
            ],
            [
        'user_id' => 1,
        'rank' => 'LEADING AIRCRAFTMAN',
        'name' => 'J.E. HIGGINBOTHAM',
        'picture' => '',
        'info' => 'Killed in a mid-air collision during a solo training flight southwest of the London aerodrome.',
        'unit' => 'No. 3 Air Observer School',
        'date' => '',
        'aircraft' => '',
        'incident' => 'Mid-air collision',
        'location' => 'One quarter mile southwest of London aerodrome',
        'details' => 'Engaged in a solo training flight when his aircraft collided with another student aircraft. Both airmen were killed',
        'created_at' => now(),
        'updated_at' => now(),
            ],
            [
        'user_id' => 1,
        'rank' => 'LEADING AIRCRAFTMAN',
        'name' => 'WALTER DISBROWE',
        'picture' => '',
        'info' => 'Killed in a flying accident during training.',
        'unit' => 'No. 3 Air Observer School',
        'date' => '30 October 1940',
        'aircraft' => 'Fleet Finch',
        'incident' => '',
        'location' => '',
        'details' => 'The aircraft entered a spin and there was insufficient height for recovery. Both occupants were killed',
        'created_at' => now(),
        'updated_at' => now(),
            ],
            [
        'user_id' => 1,
        'rank' => 'CIVILIAN TRAINING INSTRUCTOR',
        'name' => 'DOUGALD ALEXANDER CAMPBELL',
        'picture' => '',
        'info' => 'Killed in a flying accident during training.',
        'unit' => 'No. 3 Air Observer School',
        'date' => '30 October 1940',
        'aircraft' => 'Fleet Finch',
        'incident' => '',
        'location' => '',
        'details' => 'The aircraft entered a spin during training and could not recover due to insufficient altitude. Campbell was serving as a civilian instructor.',
        'created_at' => now(),
        'updated_at' => now(),
            ],
        ]);
    }
}
