<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class commSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comm')->insert([
            [
        'user_id' => 1,
        'name' => 'james arthur foot',
        'picture' => '',
        'service_number' => '130071',
        'rank' => 'flting officer',
        'corps' => 'air force',
        'unit' => '420 "City of London" (Fighter) Sqaudron',
        'age' => 24,
        'birth' => 'march 12, 1930 tokyo, japan',
        'death' => 'july 20, 1954',
        'enlist' => 'January 1st, 1949 Vancouver, British Columbia',
        'info' => 'Crashed following a mid-air explosion over Uplands Airforce Base',
        'grave' => 'CAMBRIDGE (MOUNT VIEW) CEMETERY, Range 35, Plot 63, Centre W, Grave D',
        'created_at' => now(),
        'updated_at' => now(),
            ],
                        [
        'user_id' => 1,
        'name' => 'grant thomas stewart',
        'picture' => 'd-comm-grant-thomas-stewart.png',
        'service_number' => ' 130234',
        'rank' => 'flying officer',
        'corps' => 'air force',
        'unit' => '420 "City of London" (Fighter) Squadron',
        'age' => 23,
        'birth' => 'June 20, 1929 Kincardine, Ontario',
        'death' => '25 October 1952',
        'enlist' => 'January 1, 1949 London, Ontario',
        'info' => 'Killed when his P-51 Mustang broke up in mid-air and crashed near Walkerton.',
        'grave' => 'Grave 3, Lot 59, Plot A',
        'created_at' => now(),
        'updated_at' => now(),
            ],
            [
        'user_id' => 1,
        'name' => 'Robert Clinton Bailey',
        'picture' => 'd-comm-robert-clinton-bailey.png',
        'service_number' => '130650',
        'rank' => 'flying officer',
        'corps' => 'air force',
        'unit' => '420 "City of London" (Fighter) Squadron',
        'age' => 23,
        'birth' => '19 Feb 1930, Windsor, Essex County, Ontario, Canada',
        'death' => 'November 1, 1953 Egermount, Ontario',
        'enlist' => 'January 1, 1950 London, Ontario',
        'info' => 'Died in a high-speed crash in a P-51 Mustang near Mount Forest.',
        'grave' => 'Christ Church Anglican Cemetery Colchester, Essex County, Ontario, Canada',
        'created_at' => now(),
        'updated_at' => now(),
            ],
            [
        'user_id' => 1,
        'name' => "Peter D'Oliveyra Fisher",
        'picture' => '130071',
        'service_number' => 'flying officer',
        'rank' => 'air force',
        'corps' => 'air force',
        'unit' => '420 "City of London" (Fighter) Squadron',
        'age' => 24,
        'birth' => '12 Mar 1930, Tokyo Metropolis, Japan',
        'death' => 'July 20, 1954, London, Middlesex County, Ontario, Canada',
        'enlist' => 'January 1, 1949 Vancouver, British Columbia',
        'info' => 'Killed in Flying Accident.',
        'grave' => "LONDON (WOODLAND) CEMETERY, Grave 26A, Veteran's Plot",
        'created_at' => now(),
        'updated_at' => now(),
            ],
            [
        'user_id' => 1,
        'name' => 'John Allan Smith',
        'picture' => 'd-comm-john-allan-smith.png',
        'service_number' => '80279',
        'rank' => 'flying officer',
        'corps' => 'Air Force',
        'unit' => '420 "City of London" (Fighter) Squadron',
        'age' => 30,
        'birth' => 'July 5, 1934 Toronto, Ontario',
        'death' => ' April 2, 1955 London, Ontario',
        'enlist' => 'May 26, 1951 London, Ontario',
        'info' => 'Killed along with Flight Cadet William H. Couldridge on 2 April 1955, when their CT-133 Silver Star crashed in a field in London East. Flight Cadet Couldridge was based at RCAF Centralia.',
        'grave' => 'FOREST LAWN MEMORIAL GARDENS, GARDEN OF THE APOSTLES, Grave 1, Plot 74, Row P',
        'created_at' => now(),
        'updated_at' => now(),
            ],
            [
        'user_id' => 1,
        'name' => 'William Gray Goodeve',
        'picture' => 'd-comm-william-gray-goodeve.png',
        'service_number' => '130768',
        'rank' => 'Flight Lieutenant',
        'corps' => 'Air Force',
        'unit' => '420 "City of London" (Fighter) Squadron',
        'age' => 34,
        'birth' => 'October 26, 1921 Chatham, Ontario',
        'death' => 'April 15, 1956 London, Ontario',
        'enlist' => 'September 6, 1943 London, England',
        'info' => 'His P-51 Mustang crash landed shortly after take-off when its engine stalled.',
        'grave' => 'CHATHAM (MAPLE LEAF) CEMETERY,  Plot 26, Row A.',
        'created_at' => now(),
        'updated_at' => now(),
            ],
        ]);
    }
}
