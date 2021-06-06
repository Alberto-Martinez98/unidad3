<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class BuscarController extends Controller
{
    public function ver($id){
        //procesamos la cadena buscar
        $categoria = Categoria::find($id);
        if (is_null($categoria)){
            $productos = array();
            $nombre = "Categoria no encontrada";
        }else{
            $productos = $categoria->productos;
            $nombre = $categoria->nombre;
        }
        return view('anonimo.producto',compact('nombre','productos'));
    }
}
