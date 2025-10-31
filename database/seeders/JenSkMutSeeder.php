<?php

namespace Database\Seeders;

use App\Models\JenMut;
use App\Models\JenSkMut;
use App\Models\RecapSkmut;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenSkMutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skList = RecapSkmut::all();
        $jenList = JenMut::all();
        $generated = [];

        foreach ($skList as $sk) {
            // Setiap SK bisa memiliki 1-3 Jenis Mutasi Random
            $pickJens = $jenList->random(rand(1, 3));

            foreach ($pickJens as $jen) {
                // Avoid duplicate entries
                $key = $sk->id . '-' . $jen->id;

                if (!isset($generated[$key])) {
                    JenSkMut::factory()->create([
                        'sk_id' => $sk->id,
                        'jen_id' => $jen->id,
                    ]);
                    $generated[$key] = true;
                }
            }
        }
    }
}
