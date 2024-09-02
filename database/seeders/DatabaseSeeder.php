<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         //User::factory(100)->create();

        User::factory()->create([
            'name' => 'Yovan Enovore',
            'email' => 'yovan@admin.com',
            'password' => Hash::make('73467157'),
        ]);
        User::factory()->create([
            'name' => 'Andres Contreras',
            'email' => 'andres@admin.com',
            'password' => Hash::make('73467157'),
        ]);
        User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('73467157'),
        ]);
    }
}
