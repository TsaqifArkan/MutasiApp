<?php

namespace Database\Seeders;

use App\Models\OrgCateg;
use App\Models\OrgSubcateg;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrgSubcategSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get each OrgCateg based on "nama"
        $str = OrgCateg::firstWhere('nama', 'Struktural');
        $pns = OrgCateg::firstWhere('nama', 'Pegawai Negeri Sipil (PNS)');

        // Make sure OrgCategSeeder executed first
        if (! $str || ! $pns) {
            $this->command->error(
                "OrgCategSeeder harus dijalankan sebelum OrgSubcategSeeder!"
            );
            return;
        }
        $datas = [
            [
                'nama' => 'Peralihan',
                'org_categ_id' => $str->id
            ],
            [
                'nama' => 'Pengangkatan dan Pemindahan',
                'org_categ_id' => $str->id
            ],
            [
                'nama' => '[STR] Tugas Belajar (Tubel)',
                'org_categ_id' => $str->id
            ],
            [
                'nama' => 'Jabatan Fungsional Auditor (JFA)',
                'org_categ_id' => $pns->id
            ],
            [
                'nama' => 'Non-JFA',
                'org_categ_id' => $pns->id
            ],
            [
                'nama' => '[PNS] Tugas Belajar (Tubel)',
                'org_categ_id' => $pns->id
            ],
            [
                'nama' => 'Biro SDM Tubel (Re-Entry)',
                'org_categ_id' => $pns->id
            ],
        ];
        foreach ($datas as $data) {
            OrgSubcateg::factory()->create($data);
        }
    }
}
