<?php

use Faker\Factory;

// Create a static Faker instance
if (! function_exists('_faker')) {
    function _faker()
    {
        static $faker = null;
        if (!$faker) {
            $faker = Factory::create();
        }
        return $faker;
    }
}

if (! function_exists('generate_nip')) {
    function generate_nip()
    {
        $faker = _faker();

        $yearLahir  = $faker->numberBetween(1965, 2002);
        $monthLahir = str_pad($faker->numberBetween(1, 12), 2, '0', STR_PAD_LEFT);
        $dayLahir   = str_pad($faker->numberBetween(1, 30), 2, '0', STR_PAD_LEFT);

        $yearAngkat = $faker->numberBetween($yearLahir + 18, 2025);
        $monthAngkat = str_pad($faker->numberBetween(1, 12), 2, '0', STR_PAD_LEFT);

        $gender = $faker->randomElement([1, 2]);
        $urut   = str_pad($faker->numberBetween(1, 15), 3, '0', STR_PAD_LEFT);

        $nip = $faker->unique()->lexify("{$yearLahir}{$monthLahir}{$dayLahir}{$yearAngkat}{$monthAngkat}{$gender}{$urut}");
        $nip_spasi = $faker->unique()->lexify("{$yearLahir}{$monthLahir}{$dayLahir} {$yearAngkat}{$monthAngkat} {$gender} {$urut}");

        return [
            'nip'        => $nip,
            'nip_spasi'  => $nip_spasi,
            'gender'     => $gender,
            'ttl'        => "{$yearLahir}-{$monthLahir}-{$dayLahir}",
            'tahun_ang'  => $yearAngkat,
        ];
    }
}

if (! function_exists('decode_nip')) {
    function decode_nip($nip)
    {
        $nip = str_replace(' ', '', $nip);

        return [
            'tanggal_lahir' => substr($nip, 0, 8),
            'pengangkatan'  => substr($nip, 8, 6),
            'gender'        => substr($nip, 14, 1),
            'urut'          => substr($nip, 15, 3),
        ];
    }
}

if (! function_exists('generate_no_sk')) {
    function generate_no_sk()
    {
        $faker = _faker();

        // angka acak 1–3000
        $nomor = $faker->unique()->numberBetween(1, 3000);

        // bagian tengah terkait penandatangan SK
        $segmen = $faker->randomElement([
            "K.SU02/3",
            "K.SU02/4",
            "K.SU/02",
            "K/SU"
        ]);

        // tahun SK Suffix
        $tahun = $faker->numberBetween(2020, 2025);

        // Tanggal penerbitan SK (random valid date)
        $date = $faker->dateTimeBetween("{$tahun}-01-01", "{$tahun}-12-31")->format('Y-m-d');

        return [
            'no_sk' => $nomor,
            'full_no_sk' => "KP.01.03/KEP-{$nomor}/{$segmen}/{$tahun}",
            'tgl_sk' => $date,
        ];
    }
}

if (! function_exists('generate_ttg_sk')) {
    function generate_ttg_sk()
    {
        $faker = _faker();
        $prefixes = $faker->randomElement(
            [
                "Pemindahan Pegawai Negeri Sipil",
                "Pemindahan Pegawai Negeri Sipil Atas Permintaan Sendiri",
                "Pengangkatan dan Pemindahan Pejabat Pimpinan Tinggi Pratama",
                "Pengangkatan dan Pemindahan Pejabat Administrator",
                "Pemberhentian dari Jabatan Administrator dan Jabatan Pengawas serta Pengangkatan ke dalam Jabatan Fungsional",
                "Pemberhentian dari Jabatan Administrator dan Pengangkatan ke dalam Jabatan Fungsional Auditor",
                "Pemberhentian dari Jabatan Administrator dan Pengangkatan ke dalam Jabatan Fungsional",
                "Pemberhentian Koordinator dan Subkoordinator serta Pengangkatan ke dalam Jabatan Fungsional",
                "Pemberhentian Pejabat Fungsional selaku Koordinator serta Pengangkatan ke dalam Jabatan Fungsional",
            ]
        );
        $suffixes = "di Lingkungan BPKP";

        return "{$prefixes} {$suffixes}";
    }
}
