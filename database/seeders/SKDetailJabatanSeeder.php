<?php

namespace Database\Seeders;

use App\Models\SKRecord;
use App\Models\JenisJabatan;
use App\Models\SKDetailJabatan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SKDetailJabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 300; $i++) {
            $skId = SKRecord::inRandomOrder()->first()->id;
            $jabId = JenisJabatan::inRandomOrder()->first()->id;

            $exists = SKDetailJabatan::where('sk_rec_id', $skId)
                ->where('jab_id', $jabId)
                ->exists();

            if (!$exists) {
                SKDetailJabatan::create([
                    'sk_rec_id' => $skId,
                    'jab_id' => $jabId,
                    'jumlah' => fake()->numberBetween(1, 100),
                ]);
            }
        }
    }
}
