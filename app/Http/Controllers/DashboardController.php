<?php

namespace App\Http\Controllers;

use View;
use App\Models\SkRecord;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    function index()
    {
        // Chart untuk jumlah SK per tahun & total ASN per tahun
        $skPeriodeRaw = SkRecord::selectRaw('YEAR(tgl_sk) as tahun, COUNT(*) as jml, SUM(jml_asn) as tot_asn')
            ->groupBy('tahun')->orderBy('tahun', 'asc')->get();

        $skPerTahun = [
            'labels' => $skPeriodeRaw->pluck('tahun'),
            'jumlah_sk' => $skPeriodeRaw->pluck('jml'),
            'total_asn' => $skPeriodeRaw->pluck('tot_asn'),
        ];

        // Chart untuk jumlah SK per Jenis SK
        $skPerJenis = SkRecord::with('skRecSkTyp')
            ->selectRaw('sk_typ_id, COUNT(*) as total')->groupBy('sk_typ_id')->get()->map(function ($item) {
                return [
                    'label' => $item->skRecSkTyp->nama ?? 'Tidak Diketahui',
                    'total' => $item->total,
                ];
            });

        // SK Berdasarkan APS Reason
        $skApsReason = SkRecord::with('skRecApsRsn')
            ->whereHas('skRecSkTyp', fn($q) => $q->where('nama', 'like', '%APS%'))
            ->selectRaw('ap_rsn_id, COUNT(*) as total')
            ->groupBy('ap_rsn_id')->get()->map(function ($item) {
                return [
                    'label' => $item->skRecApsRsn->nama ?? 'Tidak Diketahui',
                    'total' => $item->total,
                ];
            });

        // SK Berdasarkan Kategori Organisasi
        $skOrgCateg = SkRecord::with('skRecOrgCat')
            ->whereHas('skRecSkTyp', fn($q) => $q->where('nama', 'like', '%Organisasi%'))
            ->selectRaw('og_cat_id, COUNT(*) as total')
            ->groupBy('og_cat_id')->get()->map(function ($item) {
                return [
                    'label' => $item->skRecOrgCat->nama ?? 'Tidak Diketahui',
                    'total' => $item->total,
                ];
            });

        //SK Berdasarkan Golongan
        $skByGol = SkRecord::with('skRecGol')
            ->whereHas('skRecSkTyp', fn($q) => $q->where('nama', 'like', '%APS%'))
            ->selectRaw('gol_id, COUNT(*) as total')
            ->groupBy('gol_id')->get()->map(function ($item) {
                return [
                    'label' => $item->skRecGol->nama ?? 'Tidak Diketahui',
                    'total' => $item->total,
                ];
            });

        // SK Berdasarkan Jabatan
        $skByJab = SkRecord::with('skRecJab')
            ->whereHas('skRecSkTyp', fn($q) => $q->where('nama', 'like', '%Organisasi%'))
            ->selectRaw('jab_id, COUNT(*) as total')
            ->groupBy('jab_id')->get()->map(function ($item) {
                return [
                    'label' => $item->skRecJab->nama ?? 'Tidak Diketahui',
                    'total' => $item->total,
                ];
            });

        return view(
            'home',
            [
                'title' => 'Dashboard',
                'skPerTahun' => $skPerTahun,
                'skPerJenis' => $skPerJenis,
                'skApsReason' => $skApsReason,
                'skOrgCateg' => $skOrgCateg,
                'skByGol' => $skByGol,
                'skByJab' => $skByJab,
            ]
        );
    }
}
