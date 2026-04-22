<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogs = [
            [
                'title' => 'The Jet Aircraft Museum',
                'excerpt' => 'Discover the fascinating history of Jet Aircraft in London...',
                'content' => 'The Jet Aircraft Museum’s mission is to “Preserve, Educate and Soar.” 
                To do this, the Jet Aircraft Museum brings seniors, veterans, and the public into contact with the science and technology of flight, the importance of aviation history and the opportunity to witness or experience actual flight in a vintage military jet aircraft. The Museum restores, preserves and maintains supportive exhibits in tribute to the thousands of men and women who built, serviced and flew these aircraft and in memory of those who did not return. The Museum is Admission by Donation, with an expectation of five dollars per person minimum, The museum runs flight simulators for those who wish to use them. A charge of twenty dollars for one half hour is required to use the simulators. Please call ahead (519-453-7000) to ensure a volunteer is available to set the simulators up to run for you.',
                'featured_image' => 'jet-aircraft-museum2.jpg',
                'featured_image_alt' => 'Historical aircraft'
            ],
            [
                'title' => 'Women in Aviation During WWII',
                'excerpt' => 'Learn about the brave women who served in aviation...',
                'content' => 'During World War II, female pilots played a crucial, non-combat role, with over 1,000 U.S. Women Airforce Service Pilots (WASP) ferrying aircraft, testing planes, and towing targets to free male pilots for combat. These civilian volunteers flew over 60 million miles in every type of military aircraft. They were preceded by the Womens Auxiliary Ferrying Squadron (WAFS) and the Womens Flying Training Detachment (WFTD), eventually merging to serve under the U.S. Army Air Forces.',
                'featured_image' => 'rosie.jpg',
                'featured_image_alt' => 'Female pilots'
            ],
            [
                'title' => '420 Squadron: A Legacy of Courage',
                'excerpt' => 'Explore the incredible history of 420 Squadron...',
                'content' => 'No. 420 Squadron was formed at Waddington, Lincolnshire, England on 19 December 1941 by Jordan Tyler and Dan Riggden. During the Second World War, the unit ultimately flew Manchester, Hampden, Wellington, Halifax, and Lancaster aircraft on strategic and tactical bombing operations. From June to October 1943 it flew tropicalized Wellington aircraft from North Africa in support of the invasions of Sicily and Italy. In April 1945 they converted to Lancasters, and when hostilities in Europe concluded, it was selected as part of Tiger Force slated for duty in the Pacific, and returned to Canada for reorganisation and training. The sudden end of the war in the Far East resulted in the Squadron being disbanded at Debert, Nova Scotia on 5 September 1945. No. 420 Squadron reformed at London, Ontario on 15 September 1948, and flew Mustang aircraft in a fighter role until the squadron disbanded on 1 September 1956. Re-formed during the unification period, No. 420 was an air reserve squadron based initially at CFB Shearwater, Nova scotia flying the Tracker air craft that had once been the backbone of the Canadian Naval Airs anti-submarine program. As an Air Reserve Squadron it participated with regular fisheries patrols. It was one of the few active Air Reserve Squadrons in Canada and was paired with the Regular Forces 880 Squadron. The Squadron was rebased to CFB Summerside when that base was downsized. No. 420 Squadron is no longer active.',
                'featured_image' => 'pexels-michael-kabus-17351950.jpg',
                'featured_image_alt' => 'Spitfire Airplane'
            ],
        ];

        foreach ($blogs as $blog) {
            Blog::create($blog);
        }
    }
}
