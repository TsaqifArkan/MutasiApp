<?php

namespace Database\Seeders;

use App\Models\JenMut;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenMutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'nama' => 'Atas Permintaan Sendiri secara Reguler',
                'tag' => 'APS_REG',
                'ket' => 'Minimum masa kerja 4 tahun, kuota sebanyak 2 kali, dan dengan Biaya Sendiri (BS).'
            ],
            [
                'nama' => 'Atas Permintaan Sendiri dengan Alasan Khusus',
                'tag' => 'APS_KHS',
                'ket' => 'Tidak ada minimum masa kerja, tidak ada kuota, tidak terpotong kuota pindah APS, dan dengan Biaya Sendiri (BS).'
            ],
            [
                'nama' => 'Atas Permintaan Sendiri Menjelang Batas Usia Pensiun (BUP)',
                'tag' => 'APS_BUP',
                'ket' => 'Minimum pengajuan 2 tahun sebelum Masa Pensiun, kuota hanya 1 kali, dan bisa dibiayai oleh Biaya Sendiri (BS) atau Biaya Negara (BN) sepanjang tersedia anggaran.'
            ],
            [
                'nama' => 'Atas Permintaan Sendiri Mengikuti Penempatan Suami BPKP',
                'tag' => 'APS_SUB',
                'ket' => 'Permohonan pindah bagi istri pegawai BPKP, tidak ada kuota, tidak terpotong kuota pindah APS, dan dengan Biaya Sendiri (BS).'
            ],
            [
                'nama' => 'Organisasi secara Reguler',
                'tag' => 'ORG_REG',
                'ket' => 'Tergantung kebutuhan organisasi, tidak ada kuota, dan dengan Biaya Negara (BN).'
            ],
            [
                'nama' => 'Organisasi Tugas Belajar',
                'tag' => 'ORG_TBL',
                'ket' => 'Pemindahan pegawai reentry ke Unit Kerja baru setelah masa reentry selesai di Unit Kerja Biro Sumber Daya Manusia Tugas Belajar.'
            ],
            [
                'nama' => 'Organisasi Struktural Pemberhentian dan Pengangkatan',
                'tag' => 'ORG_HNT_AKT',
                'ket' => 'Pemberhentian dari suatu Jabatan Struktural dan Pengangkatan kembali ke dalam Jabatan tertentu.'
            ],
            [
                'nama' => 'Organisasi Struktural Pengangkatan dan Pemindahan',
                'tag' => 'ORG_AKT_PDH',
                'ket' => 'Pengangkatan ke dalam suatu Jabatan Struktural dan Pemindahan ke Unit Kerja tertentu.'
            ],
        ];
        foreach ($datas as $data) {
            JenMut::factory()->create($data);
        }
    }
}
