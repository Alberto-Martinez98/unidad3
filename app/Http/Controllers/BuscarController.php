<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class BuscarController extends Controller
{
    public function ver($id){
        //procesamos la cadena buscar
        $categoria = Categoria::find($categoria_id);
        if (is_null($categoria)){
            $productos = array();
            $mensaje = "Categoria no encontrada";
        }else{
            $productos = $categoria->concesionados;
            $mensaje = "Categoria:" . $categoria->nombre;
        }
        $cad = "";
        return view('anonimo.producto',compact('mensaje','productos','cad'));
    }
}
