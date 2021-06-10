<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Pregunta;
use App\Models\Respuesta;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class PreguntaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $autenticado = Auth::user()->id;
        if($request){
            $consulta = trim($request->get('buscador'));
            $productos = Producto::where('nombre','LIKE','%'.$consulta.'%')
            ->where('aceptado','=',1)
            ->where('user_id','=',$autenticado)
            ->orderBy('id','asc')
            ->get();
            $nombre = "MIS PRODUCTOS";
            return view('buscar.bproducto',compact('nombre','productos','consulta'));
        }
    }
    public function index2(Request $request)
    {
        $autenticado = Auth::user()->id;
        if($request){
            $consulta = trim($request->get('buscador'));
            $productos = Producto::where('nombre','LIKE','%'.$consulta.'%')
            ->where('aceptado','=',1)
            ->where('user_id','=',$autenticado)
            ->orderBy('id','asc')
            ->get();
            $nombre = "MIS PRODUCTOS";
            return view('buscar.bproductoMis',compact('nombre','productos','consulta'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *///pregunta
    public function update(Request $request, $id)
    {
        $pregunta = request()->except(['_token','_method']);
        $pregunta['quienp_id'] = Auth::user()->id;
        $pregunta['producto_id'] = $id;
        Pregunta::insert($pregunta);
        return redirect()->back();
        //return redirect('/detalles/{$id}');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //arcos seria como el edit
    public function detalles(Request $request, $id){
            //$pregunta = DB('tutabla')->select('tus columnas')->where('tu condicion')
            $preguntas = Pregunta::where('producto_id','=',$id)->get();
            $productos = Producto::where('id','=',$id)->get();
            return view('compra.detallesP',compact('productos','preguntas'));
    }
    public function misproductos(Request $request, $id){
            //$pregunta = DB('tutabla')->select('tus columnas')->where('tu condicion')
            $preguntas = Pregunta::where('producto_id','=',$id)->get();
            $productos = Producto::where('id','=',$id)->get();
            return view('buscar.misProductosPregunta',compact('productos','preguntas'));
    }

    public function respuesta(Request $request, $id)//id del producto
    {
        $respuesta = request()->except(['_token','_method']);
        $respuesta['quienr_id'] = Auth::user()->id;
        $respuesta['pregunta_id'] = $id;
        Respuesta::insert($respuesta);
        return redirect()->back();
    }
}
