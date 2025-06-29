<?php

namespace Database\Seeders;

use App\Models\OrgCateg;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrgCategSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            ['nama' => 'Struktural'],
            ['nama' => 'Pegawai Negeri Sipil (PNS)'],
        ];
        foreach ($datas as $data) {
            OrgCateg::factory()->create($data);
        }
    }
}
