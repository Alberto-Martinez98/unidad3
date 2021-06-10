<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;

class BuscarController extends Controller
{
    public function ver(Request $request, $id){
        $categoria = Categoria::find($id);
        if($request){
            $consulta = trim($request->get('buscador'));
            $productos = Producto::where('categoria_id','=',$id)
            ->where('nombre','LIKE','%'.$consulta.'%')
            ->where('aceptado','=',1)
            ->orderBy('id','asc')
            ->get();
            $nombre = $categoria->nombre;
            return view('anonimo.producto',compact('nombre','productos','consulta'));
        }
    }
}
