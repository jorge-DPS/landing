<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InitSysSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(InitCompanySeed::class);
        $this->call(InitCarruselSeed::class);
        $this->call(InitMetaTagsSeed::class);
        $this->call(DatabaseSeeder::class);
        $this->call(GlobalConfSeed::class);
        $this->call(MenuSeed::class);
        $this->call(TypesSeed::class);
    }
}
