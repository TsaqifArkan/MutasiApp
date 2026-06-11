<?php

namespace App\Http\Controllers;

use App\Models\RenPegLast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RenPegLastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = RenPegLast::all()->take(20);
        return view('rpl.index', ['name' => 'アヴェネラー', 'title' => 'Ren-Peg-Last', 'data' => $data]);
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
    public function show(RenPegLast $renPegLast)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RenPegLast $renPegLast)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RenPegLast $renPegLast)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RenPegLast $renPegLast)
    {
        //
    }
}
