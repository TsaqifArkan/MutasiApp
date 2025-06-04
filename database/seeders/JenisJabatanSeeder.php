<?php

namespace Database\Seeders;

use App\Models\JenisJabatan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JenisJabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'kategori' => 'Struktural',
                'nama' => 'Eselon II'
            ],
            [
                'kategori' => 'Struktural',
                'nama' => 'Administrator'
            ],
            [
                'kategori' => 'Struktural',
                'nama' => 'Pengawas'
            ],
            [
                'kategori' => 'Struktural',
                'nama' => 'Koordinator/Korwas'
            ],
            [
                'kategori' => 'Struktural',
                'nama' => 'SubKoordinator'
            ],
            [
                'kategori' => 'Fungsional',
                'nama' => 'Gol II'
            ],
            [
                'kategori' => 'Fungsional',
                'nama' => 'Gol III'
            ],
            [
                'kategori' => 'Fungsional',
                'nama' => 'Gol IV'
            ],
        ];
        foreach ($datas as $data) {
            JenisJabatan::factory()->create($data);
        }
    }
}
