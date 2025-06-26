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
            ['kategori' => '[STR] Eselon I / JPTM'],
            ['kategori' => '[STR] Eselon II / JPTP'],
            ['kategori' => '[STR] Administrator (KabBag Umum di Pw)'],
            ['kategori' => '[STR] Pengawas (KaSubBag)'],
            ['kategori' => '[F_STR] Koordinator'],
            ['kategori' => '[F_STR] Koordinator Pengawasan'],
            ['kategori' => '[F_STR] SubKoordinator'],
            ['kategori' => '[FUNG] Golongan II'],
            ['kategori' => '[FUNG] Golongan III'],
            ['kategori' => '[FUNG] Golongan IV'],
        ];
        foreach ($datas as $data) {
            JenisJabatan::factory()->create($data);
        }
    }
}
