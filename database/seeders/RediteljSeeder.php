<?php

namespace Database\Seeders;
use App\Models\Reditelj;
use Illuminate\Database\Seeder;

class RediteljSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reditelj::factory()->count(30)->create();
    }
}
