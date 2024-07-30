<?php

namespace App\Http\Controllers;

use App\Models\Carga;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;

class ReporteController extends Controller
{
    public function create()
    {
        if (auth()->user()->tipo == 'administrador') {
            $choferes = User::where('tipo', 'chofer')->get();        
        } else {
            $choferes = User::where('id', auth()->user()->id)->get();
        }        
        return view('reportes.create', compact('choferes'));
    }

    public function store(Request $request)
    {
        $chofer = User::findOrFail($request->chofer);
        $desde = $request->inicio;
        $hasta = $request->fin;
        $cargasChofer = Carga::where('user_id', $request->chofer)->get();
        $cargasRango = $cargasChofer->whereBetween('fecha_actual', [$request->inicio, $request->fin]);

        $pdf = FacadePdf::loadView('reportes.cargas', compact('chofer', 'desde', 'hasta', 'cargasRango'));
        /* return $pdf->stream(); */
        return $pdf->download('repcargas.pdf');
        /* return redirect()->route('cargas.index'); */
    }
}
