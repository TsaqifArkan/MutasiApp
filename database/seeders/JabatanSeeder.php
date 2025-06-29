<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            ['nama' => 'Eselon I'],
            ['nama' => 'Eselon II'],
            ['nama' => 'Administrator'],
            ['nama' => 'Pengawas'],
            ['nama' => 'Koordinator'],
            ['nama' => 'Koordinator Pengawasan'],
            ['nama' => 'SubKoordinator'],
        ];
        foreach ($datas as $data) {
            Jabatan::factory()->create($data);
        }
    }
}
