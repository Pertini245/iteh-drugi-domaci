<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fudbaler;

class FudbalerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fudbaler::factory()->count(60)->create();
    }
}
