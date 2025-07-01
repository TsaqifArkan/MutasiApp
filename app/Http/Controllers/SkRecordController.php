<?php

namespace App\Http\Controllers;

use App\Models\SkType;
use App\Models\Jabatan;
use App\Models\Golongan;
use App\Models\OrgCateg;
use App\Models\SkRecord;
use App\Models\ApsReason;
use App\Models\OrgSubcateg;
use Illuminate\Http\Request;

class SkRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(get_class_methods(\App\Models\SkRecord::class));
        $model = SkRecord::with([
            'skRecSkTyp',      // SkType
            'skRecOrgCat',      // OrgCateg
            'skRecApsRsn',      // ApsReason
            'skRecOrgSct',      // OrgSubcateg
            'skRecGol',         // Golongan
            'skRecJab'          // Jabatan
            // ])->orderBy('tgl_sk', 'desc')->paginate(15);
        ])->get();
        return view('sk-rec.index', ['title' => 'Daftar Seluruh SK', 'dataAllSK' => $model]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $skTypes    = SkType::all();
        $orgCategs  = OrgCateg::with('orgCatOrgSct')->get();
        $apsReasons = ApsReason::all();
        $golongans = Golongan::all();
        $jabatans   = Jabatan::all();
        $title = 'Tambah Data SK';
        return view('sk-rec.create', compact('title', 'skTypes', 'orgCategs', 'apsReasons', 'golongans', 'jabatans'));
    }

    /**
     * Validate and clean the request data.
     *
     * @param Request $request
     * @return array
     */
    private function validateAndClean(Request $request): array
    {
        $validated = $request->validate([
            'tgl_sk' => 'required|date',
            'no_sk' => 'required|string|max:50',
            'jml_asn' => 'required|integer|min:1',
            'sk_typ_id' => 'required|exists:sk_types,id',
            'og_cat_id' => 'nullable|required_if:sk_typ_id,1|exists:org_categs,id',
            'og_sct_id' => 'nullable|required_if:sk_typ_id,1|exists:org_subcategs,id',
            'jab_id' => 'nullable|required_if:sk_typ_id,1|exists:jabatans,id',
            'ap_rsn_id' => 'nullable|required_if:sk_typ_id,2|exists:aps_reasons,id',
            'gol_id' => 'nullable|required_if:sk_typ_id,2|exists:golongans,id',
        ]);

        // Logika sanitasi
        if ($validated['sk_typ_id'] == 1) {
            $validated['ap_rsn_id'] = null;
            $validated['gol_id'] = null;
        } else {
            $validated['og_cat_id'] = null;
            $validated['og_sct_id'] = null;
            $validated['jab_id'] = null;
        }

        return $validated;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $this->validateAndClean($request);
        SkRecord::create($validated);

        // SkRecord::create([
        //     'tgl_sk' => $validated['tgl_sk'],
        //     'no_sk' => $validated['no_sk'],
        //     'jml_asn' => $validated['jml_asn'],
        //     'sk_typ_id' => $validated['sk_typ_id'],
        //     'og_cat_id' => $validated['og_cat_id'] ?? null,
        //     'og_sct_id' => $validated['og_sct_id'] ?? null,
        //     'ap_rsn_id' => $validated['ap_rsn_id'] ?? null,
        //     'gol_id' => $validated['gol_id'] ?? null,
        //     'jab_id' => $validated['jab_id'] ?? null,
        // ]);

        return redirect()->route('sk-rec.index')->with('success', 'Data SK berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sk_rec      = SkRecord::findOrFail($id);
        $skTypes     = SkType::all();
        $orgCategs   = OrgCateg::with('orgCatOrgSct')->get();
        $apsReasons  = ApsReason::all();
        $golongans   = Golongan::all();
        $jabatans    = Jabatan::all();
        $title = 'Edit Data SK';

        return view('sk-rec.edit', compact(
            'title',
            'sk_rec',
            'skTypes',
            'orgCategs',
            'apsReasons',
            'golongans',
            'jabatans'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sk_rec = SkRecord::findOrFail($id);
        $validated = $this->validateAndClean($request);
        $sk_rec->update($validated);

        return redirect()->route('sk-rec.index')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = SkRecord::findOrFail($id);
        $model->delete();
        return redirect()->route('sk-rec.index')->with('success', 'Data SK berhasil dihapus.');
    }
}
