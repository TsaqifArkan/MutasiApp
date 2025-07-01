<?php

namespace App\Http\Controllers;

use App\Models\ApsReason;
use App\Models\SkType;
use App\Models\OrgCateg;
use App\Models\OrgSubcateg;
use Illuminate\Http\Request;

class SkTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skTyp = SkType::orderBy('id')->get();
        $orgCat = OrgCateg::orderBy('id')->get();
        $orgSubC = OrgSubcateg::orderBy('id')->get();
        $apsRsn = ApsReason::orderBy('id')->get();

        return view('sk-type.index', ['title' => 'Jenis SK', 'datas' => compact('skTyp', 'orgCat', 'orgSubC', 'apsRsn')]);
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
