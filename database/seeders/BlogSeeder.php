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
                'title' => 'The History of London Aviation',
                'excerpt' => 'Discover the fascinating history of aviation in London...',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
                'featured_image' => 'lancaster.jpg',
                'featured_image_alt' => 'Historical aircraft'
            ],
            [
                'title' => 'Women in Aviation During WWII',
                'excerpt' => 'Learn about the brave women who served in aviation...',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
                'featured_image' => 'blog-2.jpg',
                'featured_image_alt' => 'Female pilots'
            ],
            [
                'title' => '427 Squadron: A Legacy of Courage',
                'excerpt' => 'Explore the incredible history of 427 Squadron...',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
                'featured_image' => 'blog-3.jpg',
                'featured_image_alt' => 'Squadron badge'
            ],
        ];

        foreach ($blogs as $blog) {
            Blog::create($blog);
        }
    }
}
