<?php

namespace Database\Seeders;

use App\Models\GolPkt;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GolPktSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            ['pangkat' => 'Juru Muda', 'gol' => 'I/a'],
            ['pangkat' => 'Juru Muda Tingkat I', 'gol' => 'I/b'],
            ['pangkat' => 'Juru', 'gol' => 'I/c'],
            ['pangkat' => 'Juru Tingkat I', 'gol' => 'I/d'],
            ['pangkat' => 'Pengatur Muda', 'gol' => 'II/a'],
            ['pangkat' => 'Pengatur Muda Tingkat I', 'gol' => 'II/b'],
            ['pangkat' => 'Pengatur', 'gol' => 'II/c'],
            ['pangkat' => 'Pengatur Tingkat I', 'gol' => 'II/d'],
            ['pangkat' => 'Penata Muda', 'gol' => 'III/a'],
            ['pangkat' => 'Penata Muda Tingkat I', 'gol' => 'III/b'],
            ['pangkat' => 'Penata', 'gol' => 'III/c'],
            ['pangkat' => 'Penata Tingkat I', 'gol' => 'III/d'],
            ['pangkat' => 'Pembina', 'gol' => 'IV/a'],
            ['pangkat' => 'Pembina Tingkat I', 'gol' => 'IV/b'],
            ['pangkat' => 'Pembina Utama Muda', 'gol' => 'IV/c'],
            ['pangkat' => 'Pembina Utama Madya', 'gol' => 'IV/d'],
            ['pangkat' => 'Pembina Utama', 'gol' => 'IV/e'],
        ];
        foreach ($datas as $data) {
            GolPkt::factory()->create($data);
        }
    }
}
