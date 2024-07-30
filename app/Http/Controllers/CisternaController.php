<?php

namespace App\Http\Controllers;

use App\Models\Cisterna;
use App\Http\Requests\StoreCisternaRequest;
use App\Http\Requests\UpdateCisternaRequest;

class CisternaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registros = Cisterna::all();
        return view('cisternas.index', compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $reg = new Cisterna();
        return view('cisternas.form', compact('reg'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCisternaRequest $request)
    {
        $registros = Cisterna::create($request->all());
        return redirect()->route('cisternas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cisterna $cisterna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cisterna $cisterna)
    {
        $reg = $cisterna;
        return view('cisternas.form', compact('reg'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCisternaRequest $request, Cisterna $cisterna)
    {
        $cisterna->update($request->all());
        return redirect()->route('cisternas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cisterna $cisterna)
    {
        $cisterna->delete();
        return redirect()->route('cisternas.index');
    }
}
