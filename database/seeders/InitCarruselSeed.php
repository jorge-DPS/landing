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
                'mobile_background' => '/assetsFrontend/img/banner-bg-1.jpg',
                'desktop_background' => '/assetsFrontend/img/banner-bg-1.jpg',
                'tablet_background' => '/assetsFrontend/img/banner-bg-1.jpg',
                'status' => 1,
            ],
            [
                'small_title' => 'Innovation',
                'big_title' => 'Crafting the Future',
                'description' => 'Join us in shaping tomorrow with new technologies.',
                'mobile_background' => '/assetsFrontend/img/banner-bg-4.jpg',
                'desktop_background' => '/assetsFrontend/img/banner-bg-4.jpg',
                'tablet_background' => '/assetsFrontend/img/banner-bg-4.jpg',
                'status' => 1,
            ],
            [
                'small_title' => 'Art & Culture',
                'big_title' => 'Celebrate Creativity',
                'description' => 'Dive deep into cultural heritage and artistic expression.',
                'mobile_background' => '/assetsFrontend/img/banner-bg-3.jpg',
                'desktop_background' => '/assetsFrontend/img/banner-bg-3.jpg',
                'tablet_background' => '/assetsFrontend/img/banner-bg-3.jpg',
                'status' => 1,
            ]
        ];

        foreach ($carruselItems as $item) {
            DB::table('carrusel')->insert($item);
        }
    }
}
