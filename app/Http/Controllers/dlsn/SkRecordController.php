<?php

namespace App\Http\Controllers;

use App\Models\SkRecord;
use Illuminate\Http\Request;

class SkRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $model = SkRecord::with('skRecJenJab')->get();
        // dd($model);
        return view('skrec', ['title' => 'Daftar Seluruh SK', 'dataAllSK' => $model]);
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
