<?php

namespace App\Imports;

use App\Models\RecapSkmut;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class RecapSkmutImport implements ToModel, WithHeadingRow, WithCalculatedFormulas
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        if (empty($row['nomor_sk'])) {
            dd('BARIS KOSONG DITEMUKAN', $row);
        }
        // ubah semua key jadi lowercase
        $row = array_change_key_case($row, CASE_LOWER);

        // Ubah Serial Tanggal Excel ke Format Tanggal
        $tglExcel = is_numeric($row['tanggal']) ? Date::excelToDateTimeObject($row['tanggal'])->format('Y-m-d') : $row['tanggal'];
        $path = $row['filename'] . '.pdf';

        return new RecapSkmut([
            'no_sk'     => $row['nomor_sk'] ?? null,
            'full_no_sk' => $row['nomor_sk_lengkap'] ?? null,
            'tgl_sk'    => $tglExcel,
            'ttg_sk'    => $row['tentang'] ?? null,
            'file_sk'   => $path ?? null,
            'jml_peg'   => $row['jml_peg'] ?? null,
        ]);
    }
}
