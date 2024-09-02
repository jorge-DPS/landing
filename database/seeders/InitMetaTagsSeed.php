<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InitMetaTagsSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('metatags')->insert([
            'page_name' => 'Saint George System',
            'title' => 'Saint George School',
            'description' => 'Descubre por qué somos líderes en educación y desarrollo estudiantil.',
            'keywords' => 'colegio, educación, Saint George, aprendizaje, estudiantes',
            'author' => 'Desarrollamelo',
            'robots' => 'index, follow',
            'canonical' => 'https://www.saintgeorge.edu.bo',
            'og_title' => 'Saint George School',
            'og_description' => 'Descubre por qué somos líderes en educación y desarrollo estudiantil.',
            'og_image' => '/favicon.png',
            'og_type' => 'website',
            'twitter_card' => 'Ejmplo descriptivo',
            'twitter_title' => 'Ejmplo descriptivo',
            'twitter_description' => 'Ejmplo descriptivo',
            'twitter_image' => '/favicon.png',
            'favicon' => '/favicon.png',
        ]);
    }
}
