<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\PredstavaSeeder;
use Database\Seeders\RediteljSeeder;
use Database\Seeders\GlumacSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $reditelj = new RediteljSeeder;
        $glumac = new GlumacSeeder;
        $predstava = new PredstavaSeeder;

        $reditelj->run();
        $glumac->run();
        $predstava->run();
    }
}
