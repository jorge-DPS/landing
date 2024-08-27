<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menus')->insert([
            'title' => 'Inicio',
            'order' => 1
        ]);

        DB::table('menus')->insert([
            'title' => 'Contactos',
            'order' => 2
        ]);
    }
}
