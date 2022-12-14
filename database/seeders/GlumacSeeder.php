<?php

namespace Database\Seeders;
use App\Models\Glumac;
use Illuminate\Database\Seeder;

class GlumacSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Glumac::factory()->count(50)->create();
    }
}
