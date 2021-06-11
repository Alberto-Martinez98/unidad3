<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Compra;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ComprarController extends Controller
{
    public function index($id)
    {
        $producto = Producto::find($id);
        return view('compra.compra',compact('producto'));
    }

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
    public function guardarcompra(Request $request, $id){
        $productos = request()->except('_token','credito');
        if ($request -> hasFile('imagen')) {
            $productos['imagen']=$request->file('imagen')->store('uploads','public');
        }
        $productos['user_id']=Auth::user()->id;
        $productos['producto_id'] = $id;
        $productos['comprado'] = 1;
       
        Compra::insert($productos);//7
        //return redirect('/pagos');
        return redirect('/comprar')->with('success','Compra realizada con exito');
    }   
}
