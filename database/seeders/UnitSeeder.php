<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'nama' => 'Biro Manajemen Kinerja, Organisasi, dan Tata Kelola',
                'skt' => 'MKOT',
                'kode' => ''
            ],
            [
                'nama' => 'Biro Sumber Daya Manusia',
                'skt' => 'SDM',
                'kode' => ''
            ],
            [
                'nama' => 'Biro Keuangan',
                'skt' => 'Rokeu',
                'kode' => ''
            ],
            [
                'nama' => 'Biro Hukum dan Komunikasi',
                'skt' => 'Rokumasi',
                'kode' => ''
            ],
            [
                'nama' => 'Biro Umum dan Pengadaan Barang/Jasa',
                'skt' => 'Romum dan PBJ',
                'kode' => ''
            ],
            [
                'nama' => 'Deputi Bidang Pengawasan Instansi Pemerintah Bidang Perekonomian, Infrastruktur, dan Pembangunan Kewilayahan',
                'skt' => 'D1',
                'kode' => ''
            ],
            [
                'nama' => 'Deputi Bidang Pengawasan Instansi Pemerintah Bidang Politik, Keamanan, Hukum, Pembangunan Manusia, dan Kebudayaan',
                'skt' => 'D2',
                'kode' => ''
            ],
            [
                'nama' => 'Deputi Bidang Pengawasan Instansi Pemerintah Bidang Pemberdayaan Masyarakat dan Pangan',
                'skt' => 'D3',
                'kode' => ''
            ],
            [
                'nama' => 'Deputi Bidang Pengawasan Penyelenggaraan Keuangan Daerah',
                'skt' => 'D4',
                'kode' => ''
            ],
            [
                'nama' => 'Deputi Bidang Akuntan Negara',
                'skt' => 'D5',
                'kode' => ''
            ],
            [
                'nama' => 'Deputi Bidang Investigasi',
                'skt' => 'D6',
                'kode' => ''
            ],
            [
                'nama' => 'Inspektorat',
                'skt' => 'Ins.',
                'kode' => ''
            ],
            [
                'nama' => 'Pusat Pendidikan dan Pelatihan Pengawasan',
                'skt' => 'Diklat',
                'kode' => ''
            ],
            [
                'nama' => 'Pusat Strategi Kebijakan Pengawasan',
                'skt' => 'Pustrajakwas',
                'kode' => ''
            ],
            [
                'nama' => 'Pusat Informasi Pengawasan',
                'skt' => 'Pusinfo',
                'kode' => ''
            ],
            [
                'nama' => 'Pusat Pembinaan Jabatan Fungsional Auditor',
                'skt' => 'Pusbin',
                'kode' => ''
            ],
            ['nama' => 'Perwakilan BPKP Aceh', 'skt' => 'Aceh', 'kode' => 'PW01'],
            ['nama' => 'Perwakilan BPKP Provinsi Sumatera Utara', 'skt' => 'Sumut', 'kode' => 'PW02'],
            ['nama' => 'Perwakilan BPKP Provinsi Sumatera Barat', 'skt' => 'Sumbar', 'kode' => 'PW03'],
            ['nama' => 'Perwakilan BPKP Provinsi Riau', 'skt' => 'Riau', 'kode' => 'PW04'],
            ['nama' => 'Perwakilan BPKP Provinsi Jambi', 'skt' => 'Jambi', 'kode' => 'PW05'],
            ['nama' => 'Perwakilan BPKP Provinsi Bengkulu', 'skt' => 'Bengkulu', 'kode' => 'PW06'],
            ['nama' => 'Perwakilan BPKP Provinsi Sumatera Selatan', 'skt' => 'Sumsel', 'kode' => 'PW07'],
            ['nama' => 'Perwakilan BPKP Provinsi Lampung', 'skt' => 'Lampung', 'kode' => 'PW08'],
            ['nama' => 'Perwakilan BPKP Provinsi Daerah Khusus Ibukota Jakarta', 'skt' => 'DKI', 'kode' => 'PW09'],
            ['nama' => 'Perwakilan BPKP Provinsi Jawa Barat', 'skt' => 'Jabar', 'kode' => 'PW10'],
            ['nama' => 'Perwakilan BPKP Provinsi Jawa Tengah', 'skt' => 'Jateng', 'kode' => 'PW11'],
            ['nama' => 'Perwakilan BPKP Daerah Istimewa Yogyakarta', 'skt' => 'Yogya', 'kode' => 'PW12'],
            ['nama' => 'Perwakilan BPKP Provinsi Jawa Timur', 'skt' => 'Jatim', 'kode' => 'PW13'],
            ['nama' => 'Perwakilan BPKP Provinsi Kalimantan Barat', 'skt' => 'Kalbar', 'kode' => 'PW14'],
            ['nama' => 'Perwakilan BPKP Provinsi Kalimantan Tengah', 'skt' => 'Kalteng', 'kode' => 'PW15'],
            ['nama' => 'Perwakilan BPKP Provinsi Kalimantan Selatan', 'skt' => 'Kalsel', 'kode' => 'PW16'],
            ['nama' => 'Perwakilan BPKP Provinsi Kalimantan Timur', 'skt' => 'Kaltim', 'kode' => 'PW17'],
            ['nama' => 'Perwakilan BPKP Provinsi Sulawesi Utara', 'skt' => 'Sulut', 'kode' => 'PW18'],
            ['nama' => 'Perwakilan BPKP Provinsi Sulawesi Tengah', 'skt' => 'Sulteng', 'kode' => 'PW19'],
            ['nama' => 'Perwakilan BPKP Provinsi Sulawesi Tenggara', 'skt' => 'Sultra', 'kode' => 'PW20'],
            ['nama' => 'Perwakilan BPKP Provinsi Sulawesi Selatan', 'skt' => 'Sulsel', 'kode' => 'PW21'],
            ['nama' => 'Perwakilan BPKP Provinsi Bali', 'skt' => 'Bali', 'kode' => 'PW22'],
            ['nama' => 'Perwakilan BPKP Provinsi Nusa Tenggara Barat', 'skt' => 'NTB', 'kode' => 'PW23'],
            ['nama' => 'Perwakilan BPKP Provinsi Nusa Tenggara Timur', 'skt' => 'NTT', 'kode' => 'PW24'],
            ['nama' => 'Perwakilan BPKP Provinsi Maluku', 'skt' => 'Maluku', 'kode' => 'PW25'],
            ['nama' => 'Perwakilan BPKP Provinsi Papua', 'skt' => 'Papua', 'kode' => 'PW26'],
            ['nama' => 'Perwakilan BPKP Provinsi Papua Barat', 'skt' => 'Pabar', 'kode' => 'PW27'],
            ['nama' => 'Perwakilan BPKP Provinsi Kepulauan Riau', 'skt' => 'Kepri', 'kode' => 'PW28'],
            ['nama' => 'Perwakilan BPKP Provinsi Kepulauan Bangka Belitung', 'skt' => 'Babel', 'kode' => 'PW29'],
            ['nama' => 'Perwakilan BPKP Provinsi Banten', 'skt' => 'Banten', 'kode' => 'PW30'],
            ['nama' => 'Perwakilan BPKP Provinsi Gorontalo', 'skt' => 'Gorontalo', 'kode' => 'PW31'],
            ['nama' => 'Perwakilan BPKP Provinsi Sulawesi Barat', 'skt' => 'Sulbar', 'kode' => 'PW32'],
            ['nama' => 'Perwakilan BPKP Provinsi Maluku Utara', 'skt' => 'Malut', 'kode' => 'PW33'],
            ['nama' => 'Perwakilan BPKP Provinsi Kalimantan Utara', 'skt' => 'Kaltara', 'kode' => 'PW34'],
            ['nama' => 'Perwakilan BPKP Provinsi Papua Barat Daya', 'skt' => 'Pabarda', 'kode' => 'PW35'],
            ['nama' => 'Perwakilan BPKP Provinsi Papua Tengah', 'skt' => 'Pateng', 'kode' => 'PW36'],
            ['nama' => 'Kantor Pusat BPKP', 'skt' => 'BPKP Pusat', 'kode' => ''],
        ];
        foreach ($datas as $data) {
            Unit::factory()->create($data);
        }
    }
}
