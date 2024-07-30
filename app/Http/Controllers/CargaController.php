<?php

namespace App\Http\Controllers;

use App\Models\Carga;
use App\Http\Requests\StoreCargaRequest;
use App\Http\Requests\UpdateCargaRequest;
use App\Models\Cisterna;
use App\Models\Cliente;
use App\Models\User;

class CargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registros = Carga::all();
        return view('cargas.index', compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Cliente::all();
        $cisternas = Cisterna::all();
        $choferes = User::where('tipo', 'chofer')->get();
        $reg = new Carga();
        return view('cargas.form', compact('clientes', 'cisternas', 'choferes', 'reg'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCargaRequest $request)
    {
        $registros = Carga::create($request->all());
        return redirect()->route('cargas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Carga $carga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carga $carga)
    {
        $clientes = Cliente::all();
        $cisternas = Cisterna::all();
        $choferes = User::where('tipo', 'chofer')->get();
        $reg = $carga;
        return view('cargas.form', compact('clientes', 'cisternas', 'choferes', 'reg'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCargaRequest $request, Carga $carga)
    {
        $carga->update($request->all());
        return redirect()->route('cargas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carga $carga)
    {
        $carga->delete();
        return redirect()->route('cargas.index');
    }
}
