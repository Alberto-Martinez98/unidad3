<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Support\Facades\Storage;

class ComprarController extends Controller
{
    public function inicioEncargado(Request $request){
        if($request){
            $consulta = trim($request->get('buscador'));
            $categorias = Categoria::where('nombre','LIKE','%'.$consulta.'%')
            ->orderBy('id','asc')
            ->get();
            return view('buscar.bcategoria',compact('categorias','consulta'));
        }
    }
    public function ver(Request $request, $id){
        $categoria = Categoria::find($id);
        if($request){
            $consulta = trim($request->get('buscador'));
            $productos = Producto::where('categoria_id','=',$id)
            ->where('nombre','LIKE','%'.$consulta.'%')
            ->orderBy('id','asc')
            ->get();
            $nombre = $categoria->nombre;
            return view('buscar.bproducto',compact('nombre','productos','consulta'));
        }
    }	
}
