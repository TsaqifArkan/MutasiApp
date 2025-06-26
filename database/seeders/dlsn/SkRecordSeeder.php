<?php

namespace Database\Seeders;

use App\Models\SkRecord;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SkRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SkRecord::factory(100)->create();
    }
}
