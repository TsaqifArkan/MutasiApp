<?php

namespace App\Http\Controllers;

use View;
use App\Models\SkDetail;
use App\Models\SkRecord;
use Illuminate\Http\Request;
use App\Models\SKDetailJabatan;


class DashboardController extends Controller
{
    function index()
    {
        // Chart untuk jumlah SK per tahun
        $skPeriode = SkRecord::selectRaw('YEAR(tgl_sk) as tahun, COUNT(*) as jml')
            ->groupBy('tahun')->orderBy('tahun', 'asc')->get();

        // Chart untuk jumlah SK per Jenis SK
        // $jmlPerSK = SKDetailJabatan::selectRaw('sk_rec_id as id, SUM(jumlah) as tot')
        //     ->groupBy('sk_rec_id')->get();
        $jmlPerSK = SkDetail::with('skDetJenJab:id,no_sk')
            ->selectRaw('sk_rec_id, SUM(jumlah) as tot')->groupBy('sk_rec_id')->get();
        // dd($jmlPerSK);

        return view('home', [
            'title' => 'Dashboard',
            'skPer' => $skPeriode,
            'jmlPerSK' => $jmlPerSK,
        ]);
    }
}
