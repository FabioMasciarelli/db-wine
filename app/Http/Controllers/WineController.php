<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wine;

class WineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wines = Wine::all();
        return view('wines.index', compact('wines'));
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
     * alessio
     */
    public function show(string $id)
    {
        $wines = Wine::findOrFail($id);
        return view('wines.show', compact('wines'));
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
     * alessio
     */
    public function destroy($id)
    {
        $wine = Wine::findOrFail($id);
        $wine->delete();

        return redirect()->route('wines.index')->with('success', 'Wine deleted successfully');
    }
}
