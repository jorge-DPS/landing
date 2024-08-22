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
            'page_name' => 'inicio',
            'title' => 'Bienvenidos a la U. E. Saint George',
            'description' => 'Descubre un ambiente de aprendizaje innovador y de calidad en la U. E. Saint George, donde cada estudiante alcanza su máximo potencial.',
            'keywords' => 'colegio, educación, Saint George, aprendizaje, estudiantes',
            'author' => 'U. E. Saint George',
            'robots' => 'index, follow',
            'canonical' => 'https://www.uesanjorge.edu',
            'og_title' => 'U. E. Saint George - Home',
            'og_description' => 'Explora nuestro colegio y descubre por qué somos líderes en educación integral y desarrollo estudiantil.',
            'og_image' => 'https://www.uesanjorge.edu/og_imagen_inicio.jpg',
            'og_type' => 'website',
            'twitter_card' => 'summary_large_image',
            'twitter_title' => 'Bienvenidos a la U. E. Saint George',
            'twitter_description' => 'Únete a nuestra comunidad y descubre un colegio que inspira y educa para el futuro.',
            'twitter_image' => 'https://www.uesanjorge.edu/twitter_imagen_inicio.jpg',
            'favicon' => 'https://www.uesanjorge.edu/favicon.ico',
        ]);
    }
}
