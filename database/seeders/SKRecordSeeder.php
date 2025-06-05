<?php

namespace Database\Seeders;

use App\Models\SKRecord;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SKRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SKRecord::factory(100)->create();
    }
}
