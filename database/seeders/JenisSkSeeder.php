<?php

namespace Database\Seeders;

use App\Models\JenisSk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisSkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            // Opt 1a
            ['jenis' => 'Organisasi'], //Main
            // step 2a
            ['jenis' => 'Struktural'], //1
            // step 3a
            ['jenis' => 'Pengangkatan dan Pemindahan'],
            // step 4a
            ['kategori' => '[STR] Eselon I / JPTM'],
            ['kategori' => '[STR] Eselon II / JPTP'],
            ['kategori' => '[STR] Administrator (KabBag Umum di Pw)'], // Eselon III
            ['kategori' => '[STR] Pengawas (KaSubBag)'], // Eselon IV
            ['kategori' => '[F_STR] Koordinator'],
            ['kategori' => '[F_STR] Koordinator Pengawasan'],
            ['kategori' => '[F_STR] SubKoordinator'],

            // step 3b
            ['jenis' => 'Peralihan'], // Pemberhentian Jab Administrator dan Pengawas serta Pengangkatan Kembali Jab Fungsional
            // step 4b
            ['jenis' => 'Administrator ke Jabatan Fungsional / Jabatan Pelaksana'],
            ['jenis' => 'Pengawas ke Jabatan Fungsional / Jabatan Pelaksana'],
            ['jenis' => 'Koordinator ke Jabatan Fungsional / Jabatan Pelaksana'],
            ['jenis' => 'Koordinator Pengawasan ke Jabatan Fungsional / Jabatan Pelaksana'],
            ['jenis' => 'SubKoordinator ke Jabatan Fungsional / Jabatan Pelaksana'],

            // step 3c
            ['jenis' => 'Tugas Belajar (Tubel)'],
            // step 4a
            ['kategori' => '[STR] Eselon I / JPTM'],
            ['kategori' => '[STR] Eselon II / JPTP'],
            ['kategori' => '[STR] Administrator (KabBag Umum di Pw)'], // Eselon III
            ['kategori' => '[STR] Pengawas (KaSubBag)'], // Eselon IV
            ['kategori' => '[F_STR] Koordinator'],
            ['kategori' => '[F_STR] Koordinator Pengawasan'],
            ['kategori' => '[F_STR] SubKoordinator'],

            // step 2b
            ['jenis' => 'PNS'], // bisa jabfung dan jabpelak
            // step 2b.3a
            ['jenis' => 'JFA'], // Jabatan Fungsional Auditor
            ['jenis' => 'non-JFA'], // Jabatan Pelaksana dan Fungsional
            ['jenis' => 'Tugas Belajar'],
            ['jenis' => 'Biro SDM Tubel (Re-Entry)'], // definitive
            // step 2b.3a.4a
            ['jenis' => 'Pemindahan Golongan IV'],
            ['jenis' => 'Pemindahan Golongan III'],
            ['jenis' => 'Pemindahan Golongan II'],

            /**************************************************************************** */
            // Opt 1b
            ['jenis' => 'Atas Permintaan Sendiri (APS)'], //Main
            // step 2
            ['jenis' => 'Pemindahan Golongan IV'],
            ['jenis' => 'Pemindahan Golongan III'],
            ['jenis' => 'Pemindahan Golongan II'],
            // step 3
            ['jenis' => 'Reguler'], //1
            ['jenis' => 'Alasan Khusus'], //2
            ['jenis' => 'Mendekati Batas Usia Pensiun (BUP)'], //3
            ['jenis' => 'Suami BPKP'], //4

        ];
        foreach ($datas as $data) {
            JenisSk::factory()->create($data);
        }
    }
}
