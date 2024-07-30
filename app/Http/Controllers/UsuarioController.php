<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = User::all();
        return view('usuarios.index', compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reg = new User();
        return view('usuarios.form', compact('reg'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevoUsuario = $request->all();
        $nuevoUsuario['password'] = Hash::make($request->password);
        $usuario = User::create($nuevoUsuario);
        return redirect()->route('usuarios.index')->with(
            'info',
            [
                'afirmacion' => 'success',
                'mensaje' => 'Registro creado satisfactoriamente',
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reg = User::findOrFail($id);
        return view('usuarios.form', compact('reg'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario = User::findOrFail($id);
        $usuarioEditado = $request->all();
        if ($usuario->password =! $request->password) {
            $usuarioEditado['password'] = Hash::make($request->password);
        }
        $usuario->update($usuarioEditado);
        return redirect()->route('usuarios.index')->with(
            'info',
            [
                'afirmacion' => 'primary',
                'mensaje' => 'Registro actualizado satisfactoriamente',
            ]
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $result = [
            'afirmacion' => 'danger',
            'mensaje' => 'Registro eliminado satisfactoriamente',
        ];
        try {
            $user->delete();
        } catch (\Throwable $th) {
            $result['afirmacion'] = 'danger';
            $result['mensaje'] = 'No es posible eliminar este registro';
        }
        return redirect()->route('usuarios.index')->with('info', $result);
    }
}
