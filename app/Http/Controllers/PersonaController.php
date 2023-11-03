<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index()
    {
        $persona = new Persona();
        return $persona->all();
    }

    public function create()
    {
         
    }

    public function store(Request $request)
    {
        $persona = new Persona();
        $persona->primer_nombre =$request->primer_nombre;
        $persona->segundo_nombre =$request->segundo_nombre;
        $persona->primer_apellido =$request->primer_apellido;
        $persona->segundo_apellido =$request->segundo_apellido;
        $persona->usuario_creacion =$request->usuario_creacion;
        $persona->usuario_modificacion =$request->usuario_modificacion;
        $persona->save();
        return "Tu consulta ha sido ejecutada";
    }

    public function show(string $id)
    {
        return Persona::where('id',$id)->get();
    }

    public function edit(Persona $pagina)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        $personas = Persona::all();
        $persona = $personas->find($id);
        $persona->primer_nombre =$request->primer_nombre;
        $persona->segundo_nombre =$request->segundo_nombre;
        $persona->primer_apellido =$request->primer_apellido;
        $persona->segundo_apellido =$request->segundo_apellido;
        $persona->usuario_creacion =$request->usuario_creacion;
        $persona->usuario_modificacion =$request->usuario_modificacion;
        $persona->save();
        return 'La persona ha sido modificado';
    }

    public function destroy(string $id)
    {
        $personas = Persona::all();
        $persona = $personas->find($id);
        $persona->delete();
        return "El dato ha sido eliminado";
    }
}

