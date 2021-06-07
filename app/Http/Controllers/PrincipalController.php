<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class PrincipalController extends Controller
{
    public function index(Request $request)
    {
        if($request){
        	$consulta = trim($request->get('buscador'));
        	$categorias = Categoria::where('nombre','LIKE','%'.$consulta.'%')
        	->orderBy('id','asc')
        	->get();
        	return view('principal',compact('categorias','consulta'));
        }
    }
}
