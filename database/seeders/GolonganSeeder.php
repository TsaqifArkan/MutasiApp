<?php

namespace Database\Seeders;

use App\Models\Golongan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GolonganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            ['nama' => 'Golongan IV'],
            ['nama' => 'Golongan III'],
            ['nama' => 'Golongan II'],
        ];
        foreach ($datas as $data) {
            Golongan::factory()->create($data);
        }
    }
}
