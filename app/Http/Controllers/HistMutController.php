<?php

namespace App\Http\Controllers;

use App\Models\HistMut;
use Illuminate\Http\Request;

class HistMutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = HistMut::with(['histMutRecSk', 'histMutEmp', 'histMutUKBef', 'histMutUKAft', 'histMutJenMut'])->orderBy('id')->paginate(100);
        // dd(HistMut::with('histMutRecSk')->first()->toArray());
        return view('hist-mut.index', ['title' => 'History Mutation', 'datas' => $data]);
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
    public function show(HistMut $histMut)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HistMut $histMut)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HistMut $histMut)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HistMut $histMut)
    {
        //
    }
}
