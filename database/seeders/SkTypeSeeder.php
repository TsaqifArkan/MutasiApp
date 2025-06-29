<?php

namespace Database\Seeders;

use App\Models\SkType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            ['nama' => 'Organisasi'],
            ['nama' => 'Atas Permintaan Sendiri (APS)'],
        ];
        foreach ($datas as $data) {
            SkType::factory()->create($data);
        }
    }
}
