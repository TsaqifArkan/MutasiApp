<?php

namespace Database\Seeders;

use App\Models\Unit;
use App\Models\JenMut;
use App\Models\Employee;
use App\Models\HistMut;
use App\Models\RecapSkmut;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HistMutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees = Employee::pluck('id');
        $units = Unit::pluck('id');
        $jenis = JenMut::pluck('id');

        $bulkInsert = [];
        $maxBatch = 5000;

        foreach (RecapSkmut::all() as $sk) {
            // berapa pegawai di SK ini? (ambil jml_peg dari tabel)
            $pegawais = $employees->random(min($sk->jml_peg, $employees->count()));
            foreach ($pegawais as $peg) {
                $bef = $units->random();
                $aft = $units->reject(fn($id) => $id == $bef)->random();
                $jen = $jenis->random();

                $bulkInsert[] = [
                    'sk_id' => $sk->id,
                    'emp_id' => $peg,
                    'uker_bef_id' => $bef,
                    'uker_aft_id' => $aft,
                    'jen_id' => $jen,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];

                // Insert in batches to avoid memory issues
                if (count($bulkInsert) >= $maxBatch) {
                    HistMut::insert($bulkInsert);
                    $bulkInsert = []; // Reset the bulk insert array
                }
            }
        }
        // Insert any remaining records
        if (!empty($bulkInsert)) {
            HistMut::insert($bulkInsert);
        }
    }
}
