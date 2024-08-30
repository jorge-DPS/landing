<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        DB::table('section_types')->insert([
//            'name' => 'Galeria',
//        ]);
//
//        DB::table('section_types')->insert([
//            'name' => 'Portada',
//        ]);
//
//        DB::table('section_types')->insert([
//            'name' => 'Persona',
//        ]);
//
//
//        DB::table('section_types')->insert([
//            'name' => 'Persona',
//        ]);

        $typesAll = [
            [
                'name' => 'Persona',
            ],
            [
                'name' => 'Galeria',
            ],
            [
                'name' => 'Portada',
            ]
        ];

        foreach ($typesAll as $item) {
            DB::table('section_types')->insert($item);
        }


    }
}
