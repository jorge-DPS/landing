<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InitCompanySeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('company')->insert([
            'company_name' => 'Saint George School',
            'owner_name' => 'Yovan Enovore',
            'description' => 'Descubre por qué somos líderes en educación y desarrollo estudiantil.',
            'phone' => '+59173467157',
            'mobile' => '+59173467157',
            'address' => '1234 Innovation Drive, Santa Cruz de la Sierra',
            'big_logo' => '/favicon.png',
            'small_logo' => '/favicon.png',
            'long_logo' => '/favicon.png',
            'short_logo' => '/favicon.png',
            'dark_logo' => '/favicon.png',
            'light_logo' => '/favicon.png',
        ]);
    }
}
