<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\GradSeeder;
use Database\Seeders\KlubSeeder;
use Database\Seeders\FudbalerSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $grad = new GradSeeder();
        $grad->run();

        $klub = new KlubSeeder();
        $klub->run();

        $fudbaler = new FudbalerSeeder();
        $fudbaler->run();
    }
}
