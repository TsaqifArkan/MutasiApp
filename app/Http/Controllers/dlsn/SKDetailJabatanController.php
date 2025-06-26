<?php

namespace App\Http\Controllers;

use App\Models\SKDetailJabatan;
use Illuminate\Http\Request;

class SKDetailJabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $model = SKDetailJabatan::with(['skDetJab', 'skJenJab'])->get();
        // dd($model);
        return view('skjab', ['title' => 'Daftar Seluruh SK beserta Jabatan', 'dataSKJab' => $model]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
