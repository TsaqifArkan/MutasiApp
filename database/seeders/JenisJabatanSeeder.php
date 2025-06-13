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
            ['kategori' => '[STR] Eselon II'],
            ['kategori' => '[STR] Administrator'],
            ['kategori' => '[STR] Pengawas'],
            ['kategori' => '[STR] Koordinator/Korwas'],
            ['kategori' => '[STR] SubKoordinator'],
            ['kategori' => '[FUNG] Golongan II'],
            ['kategori' => '[FUNG] Golongan III'],
            ['kategori' => '[FUNG] Golongan IV'],
        ];
        foreach ($datas as $data) {
            JenisJabatan::factory()->create($data);
        }
    }
}
