<?php

namespace Database\Seeders;

use App\Models\RecapSkmut;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecapSkmutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RecapSkmut::factory()->count(100)->create();
    }
}
