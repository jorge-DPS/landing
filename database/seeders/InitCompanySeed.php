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
            'company_name' => 'U. E. Saint George',
            'owner_name' => 'Yovan Enovore',
            'description' => 'La U.E. Saint George es un colegio comprometido con la educación integral, formando estudiantes con valores y preparación de excelencia.',
            'phone' => '+59173467157',
            'address' => '1234 Innovation Drive, Tech City',
            'big_logo' => 'big_logo.jpg',
            'small_logo' => 'small_logo.jpg',
            'long_logo' => 'long_logo.jpg',
            'short_logo' => 'short_logo.jpg',
            'dark_logo' => 'dark_logo.jpg',
            'light_logo' => 'light_logo.jpg',
            'status' => 1
        ]);
    }
}
