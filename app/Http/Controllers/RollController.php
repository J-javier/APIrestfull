<?php

namespace App\Http\Controllers;

use App\Models\Roll;
use Illuminate\Http\Request;

class RollController extends Controller
{
    public function index()
    {
        $rol = new Roll();
        return $rol->all();
    }

    public function create()
    {
         
    }

    public function store(Request $request)
    {
        $rol = new Roll();
        $rol->rol =$request->rol;
        $rol->usuario_creacion =$request->usuario_creacion;
        $rol->usuario_modificacion =$request->usuario_modificacion;
        $rol->save();
        return "Tu consulta ha sido ejecutada";
    }

    public function show(string $id)
    {
        return Roll::where('id',$id)->get();
    }

    public function edit(Roll $pagina)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        $rols = Roll::all();
        $rol = $rols->find($id);
        $rol->rol =$request->rol;
        $rol->usuario_creacion =$request->usuario_creacion;
        $rol->usuario_modificacion =$request->usuario_modificacion;
        $rol->save();
        return 'El rol ha sido modificado';
    }

    public function destroy(string $id)
    {
        $rols = Roll::all();
        $rol = $rols->find($id);
        $rol->delete();
        return "El rol ha sido eliminado";
    }
}
