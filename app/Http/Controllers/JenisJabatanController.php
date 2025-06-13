<?php

namespace App\Http\Controllers;

use App\Models\JenisJabatan;
use Illuminate\Http\Request;

class JenisJabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $model = JenisJabatan::with('skRec')->get();
        // dd($model);
        return view('jen-jabs.index', ['title' => 'Jenis Jabatan', 'dataJenJab' => $model]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $model = JenisJabatan::select('kategori')->distinct()->orderBy('kategori')->pluck('kategori');
        // dd($model);
        return view('jen-jabs.create', ['title' => 'Tambah Data Jenis Jabatan', 'model' => $model]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required|unique:App\Models\JenisJabatan|string|max:70',
        ]);

        JenisJabatan::create([
            'kategori' => $request->kategori,
        ]);
        return redirect()->route('jen-jabs.index')->with('success', 'Data berhasil disimpan!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
