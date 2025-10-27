<?php

namespace App\Http\Controllers;

use App\Imports\RecapSkmutImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class RecapSkmutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('recap-skmut.index', ['title' => 'Rekap SK Mutasi']);
    }

    public function uploadForm()
    {
        return view('recap-skmut.upload', ['title' => 'Upload Rekap SK Mutasi']);
    }

    public function uploadStore(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv'
        ]);
        Excel::import(new RecapSkmutImport, $request->file('file'));

        return back()->with('success', 'Data SK berhasil diimport!');
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
