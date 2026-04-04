<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gallery;
use App\Models\GalleryImage;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $homepage = Gallery::create([
        'slug' => 'homepage-images',
        'title' => 'homepage-images',
        'subtitle' => 'images from the homepage',
        'description' => 'all of these images you can find in the homepage',
        'folder_path' => 'homepage-images',
        'order' => 1
        ]);

        $about = Gallery::create([
        'slug' => 'about-images',
        'title' => 'about-images',
        'subtitle' => 'images from the about page',
        'description' => 'all of these images you can find in the about page',
        'folder_path' => 'about-images',
        'order' => 1
        ]);

        $canteen = Gallery::create([
        'slug' => 'Airmans Canteen',
        'title' => 'Airmans Canteen',
        'subtitle' => 'Airmans Canteen',
        'description' => 'The Airmans Canteen',
        'folder_path' => 'canteen-images',
        'order' => 2
        ]);

        $timeline = Gallery::create([
        'slug' => 'timeline',
        'title' => 'The Museum',
        'subtitle' => 'A Journey Through Time',
        'description' => 'Historical images documenting London\'s aviation history...',
        'folder_path' => 'general-images',
        'order' => 3
        ]);
        
        $bob = Gallery::create([
        'slug' => 'battle-of-britain',
        'title' => 'The Museum',
        'subtitle' => 'A Journey Through Time',
        'description' => 'Historical images documenting London\'s aviation history...',
        'folder_path' => 'general-images',
        'order' => 4
        ]);

        $comm = Gallery::create([
        'slug' => 'commemoration',
        'title' => 'Commemoration',
        'subtitle' => 'commemorative images',
        'description' => 'images that can be found in the commemoration page',
        'folder_path' => 'comm-images',
        'order' => 4
        ]);

        $hero = Gallery::create([
        'slug' => 'hero-images',
        'title' => 'hero-images',
        'subtitle' => 'header images',
        'description' => 'main images from various pages',
        'folder_path' => 'hero-images',
        'order' => 6

        ]);

        //About images

        GalleryImage::create([
            'gallery_id' => $about->id,
            'filename_desktop' => 'AboutHero_Desktop.png',
            'filename_mobile' => 'AboutHero_Mobile.png',
            'folder_path' => 'about-images',
            'alt_text' => 'Main image on the about Page',
            'order' => 1
        ]);

        GalleryImage::create([
            'gallery_id' => $about->id,
            'filename_desktop' => 'LondonAirAge_Desktop.png',
            'filename_mobile' => 'LondonAirAge_Mobile.png',
            'folder_path' => 'about-images',
            'alt_text' => 'london air age',
            'order' => 2
        ]);

        GalleryImage::create([
            'gallery_id' => $about->id,
            'filename_desktop' => 'News&Events_Desktop.png',
            'filename_mobile' => 'News&Events_Mobile.png',
            'folder_path' => 'about-images',
            'alt_text' => 'news & Events',
            'order' => 2
        ]);


        // Battle of britain images

        GalleryImage::create([
            'gallery_id' => $bob->id,
            'filename_desktop' => 'd-bob-hero.jpg',
            'filename_mobile' => 'm-bob-hero.jpg',
            'folder_path' => 'BOB-images',
            'alt_text' => 'Main image on Battle of Britain Page',
            'order' => 1
        ]);

        GalleryImage::create([
            'gallery_id' => $bob->id,
            'filename_desktop' => 'd-bob-losses-bg.png',          
            'filename_mobile' => null,
            'folder_path' => 'BOB-images',
            'alt_text' => 'Hugh Rielly',
            'order' => 2
        ]);

        GalleryImage::create([
            'gallery_id' => $bob->id,
            'filename_desktop' => 'd-bob-hugh-reilley.png',           
            'filename_mobile' => 'm-bob-hugh-reilley.png',
            'folder_path' => 'BOB-images',
            'alt_text' => 'Hugh Rielly',
            'order' => 2
        ]);

        GalleryImage::create([
            'gallery_id' => $bob->id,
            'filename_desktop' => 'd-bob-neil-campbell.png',         
            'filename_mobile' => 'm-bob-neil-campbell.png',
            'folder_path' => 'BOB-images',
            'alt_text' => 'Neil Campbell',
            'order' => 3
        ]);

        GalleryImage::create([
            'gallery_id' => $bob->id,
            'filename_desktop' => 'd-bob-robert-grassick.png',         
            'filename_mobile' => 'm-bob-robert-grassick.png',
            'folder_path' => 'BOB-images',
            'alt_text' => 'Robert Grassik',
            'order' => 4
        ]);

        GalleryImage::create([
            'gallery_id' => $bob->id,
            'filename_desktop' => 'd-bob-robert-smith.png',         
            'filename_mobile' => 'm-bob-robert-smith.png',
            'folder_path' => 'BOB-images',
            'alt_text' => 'Robert Smith',
            'order' => 5
        ]);

        GalleryImage::create([
            'gallery_id' => $bob->id,
            'filename_desktop' => 'd-bob-ross-smither.png',         
            'filename_mobile' => 'm-bob-ross-smither.png',
            'folder_path' => 'BOB-images',
            'alt_text' => 'Ross Smither',
            'order' => 6
        ]);


        //canteen images

        GalleryImage::create([
            'gallery_id' => $canteen->id,
            'filename_desktop' => 'd-airmans-hero.png',   
            'filename_mobile' => 'm-airmans-hero.png',
            'folder_path' => 'canteen-images',
            'alt_text' => 'canteen hero image',
            'order' => 1
        ]);
        GalleryImage::create([
            'gallery_id' => $canteen->id,
            'filename_desktop' => 'd-airmans-420-squad.png',      
            'filename_mobile' => 'm-airmans-420-squad.png',
            'folder_path' => 'canteen-images',
            'alt_text' => 'Airmans 420 Squad',
            'order' => 2
        ]);

        GalleryImage::create([
            'gallery_id' => $canteen->id,
            'filename_desktop' => 'd-airmans-gallery-1.png',   
            'filename_mobile' => 'm-airmans-gallery-1.png',
            'folder_path' => 'canteen-images',
            'alt_text' => '1',
            'order' => 3
        ]);

        GalleryImage::create([
            'gallery_id' => $canteen->id,
            'filename_desktop' => 'd-airmans-gallery-2.png',   
            'filename_mobile' => 'm-airmans-gallery-2.png',
            'folder_path' => 'canteen-images',
            'alt_text' => '2',
            'order' => 4
        ]);

        GalleryImage::create([
            'gallery_id' => $canteen->id,
            'filename_desktop' => 'd-airmans-gallery-3.png',   
            'filename_mobile' => 'm-airmans-gallery-3.png',
            'folder_path' => 'canteen-images',
            'alt_text' => '3',
            'order' => 5
        ]);

        GalleryImage::create([
            'gallery_id' => $canteen->id,
            'filename_desktop' => 'd-airmans-gallery-4.png',   
            'filename_mobile' => 'm-airmans-gallery-4.png',
            'folder_path' => 'canteen-images',
            'alt_text' => '4',
            'order' => 6
        ]);

        GalleryImage::create([
            'gallery_id' => $canteen->id,
            'filename_desktop' => 'd-airmans-paper-1.png',   
            'filename_mobile' => null,
            'folder_path' => 'canteen-images',
            'alt_text' => 'airmans paper 1',
            'order' => 7
        ]);

        GalleryImage::create([
            'gallery_id' => $canteen->id,
            'filename_desktop' => 'd-airmans-paper-2.png',   
            'filename_mobile' => null,
            'folder_path' => 'canteen-images',
            'alt_text' => 'airmans paper 2',
            'order' => 8
        ]);

        GalleryImage::create([
            'gallery_id' => $canteen->id,
            'filename_desktop' => 'd-airmans-paper-3.png',   
            'filename_mobile' => null,
            'folder_path' => 'canteen-images',
            'alt_text' => 'airmans paper 3',
            'order' => 9
        ]);

        // comm-images

        GalleryImage::create([
            'gallery_id' => $comm->id,
            'filename_desktop' => 'd-comm-hero.png',   
            'filename_mobile' => 'm-comm-hero.png',
            'folder_path' => 'comm-images',
            'alt_text' => 'commemoration hero image',
            'order' => 1
        ]);

        GalleryImage::create([
            'gallery_id' => $comm->id,
            'filename_desktop' => 'd-comm-420-sqn-badge.png',   
            'filename_mobile' => 'm-comm-420-sqn-badge.png',
            'folder_path' => 'comm-images',
            'alt_text' => '420 Squadron Badge',
            'order' => 2
        ]);

        GalleryImage::create([
            'gallery_id' => $comm->id,
            'filename_desktop' => 'd-comm-grant-thomas-stewart.png',   
            'filename_mobile' => 'm-comm-grant-thomas-stewart.png',
            'folder_path' => 'comm-images',
            'alt_text' => 'grant thomas stewart',
            'order' => 3
        ]);

        GalleryImage::create([
            'gallery_id' => $comm->id,
            'filename_desktop' => 'd-comm-john-allan-smith.png',   
            'filename_mobile' => 'm-comm-john-allan-smith.png',
            'folder_path' => 'comm-images',
            'alt_text' => 'John Allan Smith',
            'order' => 4
        ]);

        GalleryImage::create([
            'gallery_id' => $comm->id,
            'filename_desktop' => 'd-comm-robert-clinton-bailey.png', 
            'filename_mobile' => 'm-comm-robert-clinton-bailey.png',
            'folder_path' => 'comm-images',
            'alt_text' => 'Robert Clinton Bailey',
            'order' => 5
        ]);

        GalleryImage::create([
            'gallery_id' => $comm->id,
            'filename_desktop' => 'd-comm-william-gray-goodeve.png', 
            'filename_mobile' => 'm-comm-william-gray-goodeve.png',
            'folder_path' => 'comm-images',
            'alt_text' => 'William Gray Goodeve',
            'order' => 6
        ]);

        // General Images

        // GalleryImage::create([
        //     'gallery_id' => $general->id,
        //     'filename_desktop' => '1939-1940 Group of Provisional Pilot Officers (RCAF) Ron Nelson A18-016-027.jpg', 
        //     'filename_mobile' => null,
        //     'folder_path' => 'general-images',
        //     'alt_text' => 'Group of Provisional Pilot Officers',
        //     'order' => 1
        // ]);

        //hero images

        GalleryImage::create([
            'gallery_id' => $hero->id,
            'filename_desktop' => 'AboutHero_Desktop.png', 
            'filename_mobile' => 'AboutHero_Mobile.png',
            'folder_path' => 'hero-images',
            'alt_text' => 'Group of Provisional Pilot Officers',
            'order' => 1
        ]);

        GalleryImage::create([
            'gallery_id' => $hero->id,
            'filename_desktop' => 'LondonAirAge_Desktop.png', 
            'filename_mobile' => 'LondonAirAge_Mobile.png',
            'folder_path' => 'hero-images',
            'alt_text' => 'london air age main image',
            'order' => 2
        ]);

        GalleryImage::create([
            'gallery_id' => $hero->id,
            'filename_desktop' => 'News&Events_Desktop.png', 
            'filename_mobile' => 'News&Events_Mobile.png',
            'folder_path' => 'hero-images',
            'alt_text' => 'news and events main image',
            'order' => 3
        ]);

        //homepage images

        GalleryImage::create([
            'gallery_id' => $homepage->id,
            'filename_desktop' => 'd-bg-homepage-bob.png', 
            'filename_mobile' => 'm-bg-homepage-bob.png',
            'folder_path' => 'homepage-images',
            'alt_text' => 'Homepage Battle of Britain image',
            'order' => 1
        ]);

        GalleryImage::create([
            'gallery_id' => $homepage->id,
            'filename_desktop' => 'd-bg-homepage-commemoration.png', 
            'filename_mobile' => 'm-bg-homepage-commemoration.png',
            'folder_path' => 'homepage-images',
            'alt_text' => 'Homepage Commemoration image',
            'order' => 2
        ]);

        GalleryImage::create([
            'gallery_id' => $homepage->id,
            'filename_desktop' => 'd-bg-homepage-history.png', 
            'filename_mobile' => 'm-bg-homepage-history.png',
            'folder_path' => 'homepage-images',
            'alt_text' => 'Homepage History image',
            'order' => 3
        ]);

        GalleryImage::create([
            'gallery_id' => $homepage->id,
            'filename_desktop' => 'd-homepage-bases.png', 
            'filename_mobile' => 'm-homepage-bases.png',
            'folder_path' => 'homepage-images',
            'alt_text' => 'Homepage Bases image',
            'order' => 4
        ]);

        GalleryImage::create([
            'gallery_id' => $homepage->id,
            'filename_desktop' => 'd-homepage-canteen.png', 
            'filename_mobile' => 'm-homepage-canteen.png',
            'folder_path' => 'homepage-images',
            'alt_text' => 'Homepage Bases Image',
            'order' => 5
        ]);

        GalleryImage::create([
            'gallery_id' => $homepage->id,
            'filename_desktop' => 'd-homepage-contact.png', 
            'filename_mobile' => 'm-homepage-contact.png',
            'folder_path' => 'homepage-images',
            'alt_text' => 'Homepage Contact Image',
            'order' => 6
        ]);

        GalleryImage::create([
            'gallery_id' => $homepage->id,
            'filename_desktop' => 'd-homepage-events.png', 
            'filename_mobile' => 'm-homepage-events.png',
            'folder_path' => 'homepage-images',
            'alt_text' => 'Homepage Events Image',
            'order' => 7
        ]);

        GalleryImage::create([
            'gallery_id' => $homepage->id,
            'filename_desktop' => 'd-homepage-flight.png', 
            'filename_mobile' => 'm-homepage-flight.png',
            'folder_path' => 'homepage-images',
            'alt_text' => 'Homepage flight Image',
            'order' => 8
        ]);

        GalleryImage::create([
            'gallery_id' => $homepage->id,
            'filename_desktop' => 'd-homepage-intro.png', 
            'filename_mobile' => 'm-homepage-intro.png',
            'folder_path' => 'homepage-images',
            'alt_text' => 'Homepage Intro Image',
            'order' => 9
        ]);

        GalleryImage::create([
            'gallery_id' => $homepage->id,
            'filename_desktop' => 'd-homepage-map.png', 
            'filename_mobile' => 'm-homepage-map.png',
            'folder_path' => 'homepage-images',
            'alt_text' => 'Homepage Map Image',
            'order' => 10
        ]);

        GalleryImage::create([
            'gallery_id' => $homepage->id,
            'filename_desktop' => 'd-homepage-war.png', 
            'filename_mobile' => 'm-homepage-war.png',
            'folder_path' => 'homepage-images',
            'alt_text' => 'Homepage War Image',
            'order' => 11
        ]);

        //Timeline images

        GalleryImage::create([
            'gallery_id' => $timeline->id,
            'filename_desktop' => 'd-timeline-1912-july-20.png', 
            'filename_mobile' => null,
            'folder_path' => 'timeline-images',
            'alt_text' => '1912-july-20',
            'order' => 1
        ]);

        GalleryImage::create([
            'gallery_id' => $timeline->id,
            'filename_desktop' => 'd-timeline-1912-may-25.png', 
            'filename_mobile' => null,
            'folder_path' => 'timeline-images',
            'alt_text' => '1912-may-25',
            'order' => 2
        ]);

        GalleryImage::create([
            'gallery_id' => $timeline->id,
            'filename_desktop' => 'd-timeline-1918-july-1.png', 
            'filename_mobile' => null,
            'folder_path' => 'timeline-images',
            'alt_text' => '1918-july-1',
            'order' => 3
        ]);

        GalleryImage::create([
            'gallery_id' => $timeline->id,
            'filename_desktop' => 'd-timeline-1918-july-2.png', 
            'filename_mobile' => null,
            'folder_path' => 'timeline-images',
            'alt_text' => '1918-july-2',
            'order' => 4
        ]);

        GalleryImage::create([
            'gallery_id' => $timeline->id,
            'filename_desktop' => 'd-timeline-1918-july-02.png', 
            'filename_mobile' => null,
            'folder_path' => 'timeline-images',
            'alt_text' => '1918-july-o2',
            'order' => 5
        ]);

        GalleryImage::create([
            'gallery_id' => $timeline->id,
            'filename_desktop' => 'd-timeline-1919-june-15.png', 
            'filename_mobile' => null,
            'folder_path' => 'timeline-images',
            'alt_text' => '1919-june-15',
            'order' => 6
        ]);

        GalleryImage::create([
            'gallery_id' => $timeline->id,
            'filename_desktop' => 'd-timeline-1926-october-26.png', 
            'filename_mobile' => null,
            'folder_path' => 'timeline-images',
            'alt_text' => '1926-october-26',
            'order' => 7
        ]);

        GalleryImage::create([
            'gallery_id' => $timeline->id,
            'filename_desktop' => 'd-timeline-1927-november-25.png', 
            'filename_mobile' => null,
            'folder_path' => 'timeline-images',
            'alt_text' => '1927-november-25',
            'order' => 8
        ]);

        GalleryImage::create([
            'gallery_id' => $timeline->id,
            'filename_desktop' => 'd-timeline-1927-september.png', 
            'filename_mobile' => null,
            'folder_path' => 'timeline-images',
            'alt_text' => '1927-september',
            'order' => 9
        ]);

        GalleryImage::create([
            'gallery_id' => $timeline->id,
            'filename_desktop' => 'd-timeline-1928-august-24.png', 
            'filename_mobile' => null,
            'folder_path' => 'timeline-images',
            'alt_text' => '1928-august-24',
            'order' => 10
        ]);

        GalleryImage::create([
            'gallery_id' => $timeline->id,
            'filename_desktop' => 'd-timeline-1928-august-28.png', 
            'filename_mobile' => null,
            'folder_path' => 'timeline-images',
            'alt_text' => '1928-august-28',
            'order' => 11
        ]);

        GalleryImage::create([
            'gallery_id' => $timeline->id,
            'filename_desktop' => 'd-timeline-1928-july-11.png', 
            'filename_mobile' => null,
            'folder_path' => 'timeline-images',
            'alt_text' => '1928-july-11',
            'order' => 12
        ]);

        GalleryImage::create([
            'gallery_id' => $timeline->id,
            'filename_desktop' => 'd-timeline-1929-july-15.png', 
            'filename_mobile' => null,
            'folder_path' => 'timeline-images',
            'alt_text' => '1929-july-15',
            'order' => 13
        ]);

        GalleryImage::create([
            'gallery_id' => $timeline->id,
            'filename_desktop' => 'd-timeline-1931-september.png', 
            'filename_mobile' => null,
            'folder_path' => 'timeline-images',
            'alt_text' => '1931 september',
            'order' => 14
        ]);

        GalleryImage::create([
            'gallery_id' => $timeline->id,
            'filename_desktop' => 'd-timeline-1940-december-17.png', 
            'filename_mobile' => null,
            'folder_path' => 'timeline-images',
            'alt_text' => '1940 december 17',
            'order' => 15
        ]);

        GalleryImage::create([
            'gallery_id' => $timeline->id,
            'filename_desktop' => 'd-timeline-1940-january-19.png', 
            'filename_mobile' => null,
            'folder_path' => 'timeline-images',
            'alt_text' => '1940 january 19',
            'order' => 16
        ]);

        GalleryImage::create([
            'gallery_id' => $timeline->id,
            'filename_desktop' => 'd-timeline-1940-june-24.png', 
            'filename_mobile' => null,
            'folder_path' => 'timeline-images',
            'alt_text' => '1940 june 24',
            'order' => 17
        ]);

        GalleryImage::create([
            'gallery_id' => $timeline->id,
            'filename_desktop' => 'd-timeline-august.png', 
            'filename_mobile' => null,
            'folder_path' => 'timeline-images',
            'alt_text' => 'august',
            'order' => 18
        ]);

        GalleryImage::create([
            'gallery_id' => $timeline->id,
            'filename_desktop' => 'd-timeline-august-01.png', 
            'filename_mobile' => null,
            'folder_path' => 'timeline-images',
            'alt_text' => 'august 01',
            'order' => 19
        ]);

        GalleryImage::create([
            'gallery_id' => $timeline->id,
            'filename_desktop' => 'd-timeline-hero.png', 
            'filename_mobile' => 'm-timeline-hero.png',
            'folder_path' => 'timeline-images',
            'alt_text' => 'timeline hero image',
            'order' => 20
        ]);

        GalleryImage::create([
            'gallery_id' => $timeline->id,
            'filename_desktop' => 'd-timeline-november-25.png', 
            'filename_mobile' => null,
            'folder_path' => 'timeline-images',
            'alt_text' => 'november 25',
            'order' => 20
        ]);
    }
}
