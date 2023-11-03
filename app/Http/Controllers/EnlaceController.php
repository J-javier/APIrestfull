<?php

namespace App\Http\Controllers;

use App\Models\Enlace;
use Illuminate\Http\Request;

class EnlaceController extends Controller
{
    public function index()
    {
        $enlace = new Enlace();
        return $enlace->all();
    }

    public function create()
    {
         
    }

    public function store(Request $request)
    {
        $enlace = new Enlace();
        $enlace->descripcion =$request->descripcion;
        $enlace->id_pagina =$request->id_pagina;
        $enlace->id_rol =$request->id_rol;
        $enlace->usuario_creacion =$request->usuario_creacion;
        $enlace->usuario_modificacion =$request->usuario_modificacion;
        $enlace->save();
        return "Tu consulta ha sido ejecutada";
    }

    public function show(string $id)
    {
        return Enlace::where('id',$id)->get();
    }

    public function edit(Enlace $pagina)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        $enlaces = Enlace::all();
        $enlace = $enlaces->find($id);
        $enlace->descripcion =$request->descripcion;
        $enlace->id_pagina =$request->id_pagina;
        $enlace->id_rol =$request->id_rol;
        $enlace->usuario_creacion =$request->usuario_creacion;
        $enlace->usuario_modificacion =$request->usuario_modificacion;
        $enlace->save();
        return 'El enlace ha sido modificado';
    }

    public function destroy(string $id)
    {
        $personas = Enlace::all();
        $persona = $personas->find($id);
        $persona->delete();
        return "El enlace ha sido eliminado";
    }
}
