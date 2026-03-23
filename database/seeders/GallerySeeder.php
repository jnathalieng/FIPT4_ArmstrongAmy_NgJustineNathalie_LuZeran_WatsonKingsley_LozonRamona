<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Timeline gallery
        $timeline = Gallery::create([
            'slug' => 'timeline',
            'title' => 'London Aviation Timeline',
            'subtitle' => 'A Journey Through Time',
            'description' => 'Historical images documenting London\'s aviation history...',
            'folder_path' => 'timeline',
            'order' => 1
        ]);

        // Add images for timeline
        GalleryImage::create([
            'gallery_id' => $timeline->id,
            'filename' => 'image-1.jpg',
            'alt_text' => 'Historical aircraft',
            'order' => 1
        ]);
    }
}
