<?php

namespace Database\Seeders;
use App\Models\Predstava;
use Illuminate\Database\Seeder;

class PredstavaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Predstava::factory()->count(80)->create();
    }
}
