<?php

namespace App\Http\Controllers;

use App\Models\Pagina;
use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function index()
    {
        $pagina = new Pagina();
        return $pagina->all();
    }

    public function create()
    {
         
    }

    public function store(Request $request)
    {
        $pagina = new Pagina();
        $pagina->usuario_creacion =$request->usuario_creacion;
        $pagina->usuario_modificacion =$request->usuario_modificacion;
        $pagina->url =$request->url;
        $pagina->estado =$request->estado;
        $pagina->nombre =$request->nombre;
        $pagina->descripcion =$request->descripcion;
        $pagina->icono =$request->icono;
        $pagina->save(); 
        return "Tu consulta ha sido ejecutada";
    }

    public function show(string $id)
    {
        return Pagina::where('id',$id)->get();
    }

    public function edit(Pagina $pagina)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        $paginas = Pagina::all();
        $pagina = $paginas->find($id);
        $pagina->usuario_creacion =$request->usuario_creacion;
        $pagina->usuario_modificacion =$request->usuario_modificacion;
        $pagina->url =$request->url;
        $pagina->estado =$request->estado;
        $pagina->nombre =$request->nombre;
        $pagina->descripcion =$request->descripcion;
        $pagina->icono =$request->icono;
        $pagina->save();
        return 'La pagina ha sido modificado';
    }

    public function destroy(string $id)
    {
        $paginas = Pagina::all();
        $pagina = $paginas->find($id);
        $pagina->delete();
        return "El dato ha sido eliminado";
    }
}
