<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InitCarruselSeed extends Seeder
{
    public function run(): void
    {
        $carruselItems = [
            [
                'small_title' => 'Explore More',
                'big_title' => 'Discover New Horizons',
                'description' => 'Embark on exciting adventures to unseen worlds.',
                'primary_button' => 'Learn More',
                'secondary_button' => 'Subscribe',
                'mobile_background' => '/assetsBackend/media/avatars/blank.png',
                'desktop_background' => '/assetsBackend/media/avatars/blank.png',
                'tablet_background' => '/assetsBackend/media/avatars/blank.png',
                'others' => 'extra_info1',
                'status' => 1,
            ],
            [
                'small_title' => 'Innovation',
                'big_title' => 'Crafting the Future',
                'description' => 'Join us in shaping tomorrow with new technologies.',
                'primary_button' => 'Our Vision',
                'secondary_button' => 'Get Involved',
                'mobile_background' => 'mobile_image2.jpg',
                'desktop_background' => 'desktop_image2.jpg',
                'tablet_background' => 'tablet_image2.jpg',
                'others' => 'extra_info2',
                'status' => 1,
            ],
            [
                'small_title' => 'Art & Culture',
                'big_title' => 'Celebrate Creativity',
                'description' => 'Dive deep into cultural heritage and artistic expression.',
                'primary_button' => 'Visit Now',
                'secondary_button' => 'Gallery',
                'mobile_background' => 'mobile_image3.jpg',
                'desktop_background' => 'desktop_image3.jpg',
                'tablet_background' => 'tablet_image3.jpg',
                'others' => 'extra_info3',
                'status' => 1,
            ]
        ];

        foreach ($carruselItems as $item) {
            DB::table('carrusel')->insert($item);
        }
    }
}
