<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return view("usuario.index", compact('usuarios'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $usuario = new Usuario;
        $usuario->Documento = $request->input('Documento');
        $usuario->Nombres = $request->input('Nombres');
        $usuario->Correo = $request->input('Correo');
        $usuario->Telefono = $request->input('Telefono');
        $usuario->Direccion = $request->input('Direccion');
        $usuario->save();

        return redirect()->back();
    }

    public function show(Usuario $usuario)
    {
        //
    }

    public function edit($Documento)
    {
        $usuario = Usuario::find($Documento);
        return view('usuario.modal-info', compact('usuario'));
    }

    public function update(Request $request, $Documento)
    {
        $usuario = Usuario::find($Documento);
        $usuario->Documento = $request->input('Documento');
        $usuario->Nombres = $request->input('Nombres');
        $usuario->Correo = $request->input('Correo');
        $usuario->Telefono = $request->input('Telefono');
        $usuario->Direccion = $request->input('Direccion');
        $usuario->update();

        return redirect()->back();
    }

    public function destroy($Documento)
    {
        $usuario = Usuario::find($Documento);
        $usuario -> delete();

        return redirect() -> back();
    }
}
