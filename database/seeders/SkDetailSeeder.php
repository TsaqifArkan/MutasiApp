<?php

namespace Database\Seeders;

use App\Models\SkDetail;
use App\Models\SkRecord;
use App\Models\JenisJabatan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SkDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usedPairs = [];

        $skRecords = SkRecord::all();
        $jenJab = JenisJabatan::all();

        $total = 300; // target data yang ingin di-generate

        for ($i = 0; $i < $total; $i++) {
            // Ambil acak dari recycle pool
            $sk = $skRecords->random();
            $jab = $jenJab->random();

            $key = $sk->id . '-' . $jab->id;

            if (!isset($usedPairs[$key])) {
                SkDetail::factory()
                    ->recycle($sk)
                    ->recycle($jab)
                    ->create([
                        'sk_rec_id' => $sk->id,
                        'jab_id' => $jab->id,
                    ]);

                $usedPairs[$key] = true;
            } else {
                // Lewati jika sudah ada, jangan error
                continue;
            }
        }
    }
}
