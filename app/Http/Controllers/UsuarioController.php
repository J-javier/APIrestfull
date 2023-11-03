<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuario = new Usuario();
        return $usuario->all();
    }

    public function create()
    {
         
    }

    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->user =$request->user;
        $usuario->clave =$request->clave;
        $usuario->habilitado =$request->habilitado;
        $usuario->fecha =$request->fecha;
        $usuario->id_persona =$request->id_persona;
        $usuario->id_rol =$request->id_rol;
        $usuario->usuario_creacion =$request->usuario_creacion;
        $usuario->usuario_modificacion =$request->usuario_modificacion;
        $usuario->save();
        return "Tu consulta ha sido ejecutada";
    }

    public function show(string $id)
    {
        return Usuario::where('id',$id)->get();
    }

    public function edit(Usuario $pagina)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        $usuarios = Usuario::all();
        $usuario = $usuarios->find($id);
        $usuario->user =$request->user;
        $usuario->clave =$request->clave;
        $usuario->habilitado =$request->habilitado;
        $usuario->fecha =$request->fecha;
        $usuario->id_persona =$request->id_persona;
        $usuario->id_rol =$request->id_rol;
        $usuario->usuario_creacion =$request->usuario_creacion;
        $usuario->usuario_modificacion =$request->usuario_modificacion;
        $usuario->save();
        return 'El usuario ha sido modificado';
    }

    public function destroy(string $id)
    {
        $usuarios = Usuario::all();
        $usuario = $usuarios->find($id);
        $usuario->delete();
        return "El usuario ha sido eliminado";
    }
}
