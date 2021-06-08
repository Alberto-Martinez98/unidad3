<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request){
            $consulta = trim($request->get('buscador'));
            $productos = Producto::where('nombre','LIKE','%'.$consulta.'%')
            ->orderBy('id','asc')
            ->get();

        return view("supervisor.producto.index",compact("consulta","productos"));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view("supervisor.producto.create",compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productos = request()->except('_token');
        if ($request -> hasFile('imagen')) {
            $productos['imagen']=$request->file('imagen')->store('uploads','public');
        }

        Producto::insert($productos);
      //  return response()->json($usuarios);
        return redirect('/producto');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);
        return view ("supervisor.producto.show",compact('producto'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorias = Categoria::all();
        $producto = Producto::find($id);
        return view ("supervisor.producto.edit",compact('producto','categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $productos = request()->except(['_token','_method']);
      // return response()->json($usuarios);
        if ($request -> hasFile('imagen')) {

            $producto = Producto::findOrFail($id);
            Storage::delete('public/'.$producto->imagen);
            $productos['imagen']=$request->file('imagen')->store('uploads','public');
        }
        producto::where('id','=',$id)->update($productos);
        return redirect('/producto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = producto::findOrFail($id);
        Storage::delete('public/'.$producto->imagen);
        producto::destroy($id);
        return redirect('/producto');
    }
}
