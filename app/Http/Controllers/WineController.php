<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wine;
use ReturnTypeWillChange;

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
        $wine = new Wine();
        return view("wines.create", compact('wine'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $wine = new Wine();
        $wine->fill($data);
        $wine->save();

        return redirect()->route("wines.index");
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
    public function edit(Wine $wine)
    {
        return view('wines.edit', compact('wine'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Wine $wine)
    {
        $data = $request->all();

        $wine->update($data);

        Return redirect()->route('wines.show');
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
