<?php

namespace Database\Seeders;

use App\Models\ApsReason;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApsReasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            ['nama' => 'Reguler'],
            ['nama' => 'Alasan Khusus'],
            ['nama' => 'Mendekati Batas Usia Pensiun (BUP)'],
            ['nama' => 'Suami BPKP'],
        ];
        foreach ($datas as $data) {
            ApsReason::factory()->create($data);
        }
    }
}
