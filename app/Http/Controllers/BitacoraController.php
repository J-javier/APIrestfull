<?php

namespace App\Http\Controllers;

use App\Models\Bitacora;
use Illuminate\Http\Request;

class BitacoraController extends Controller
{
    public function index()
    {
        $bitacora = new Bitacora();
        return $bitacora->all();
    }

    public function create()
    {
         
    }

    public function store(Request $request)
    {
        $bitacora = new Bitacora();
        $bitacora->bitacora =$request->bitacora;
        $bitacora->fecha =$request->fecha;
        $bitacora->hora =$request->hora;
        $bitacora->ip =$request->ip;
        $bitacora->so =$request->so;
        $bitacora->navegador =$request->navegador;
        $bitacora->id_usuario =$request->id_usuario;
        $bitacora->save();
        return "Tu consulta ha sido ejecutada";
    }

    public function show(string $id)
    {
        return Bitacora::where('id',$id)->get();
    }

    public function edit(Bitacora $pagina)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        $bitacoras = Bitacora::all();
        $bitacora = $bitacoras->find($id);
        $bitacora->bitacora =$request->bitacora;
        $bitacora->fecha =$request->fecha;
        $bitacora->hora =$request->hora;
        $bitacora->ip =$request->ip;
        $bitacora->so =$request->so;
        $bitacora->navegador =$request->navegador;
        $bitacora->id_usuario =$request->id_usuario;
        $bitacora->save();
        return 'La bitacora ha sido modificado';
    }

    public function destroy(string $id)
    {
        $bitacoras = Bitacora::all();
        $bitacora = $bitacoras->find($id);
        $bitacora->delete();
        return "La bitacora ha sido eliminada";
    }
}
