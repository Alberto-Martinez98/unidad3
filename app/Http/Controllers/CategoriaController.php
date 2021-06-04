<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use Illuminate\Support\Facades\Storage;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request){
            $query = trim($request->get('search'));
            $categoria = Categoria::where('nombre', 'LIKE', '%' .$query . '%')
            ->orderBy('id', 'asc')
            ->get();
            return view('supervisor.categoria.index',['categorias' =>$categoria, 'search' => $query]);
        }

       // $categorias = Categoria::all();
        //return view("supervisor.categoria.index",compact("categorias"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("supervisor.categoria.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categorias = request()->except('_token');
        if ($request -> hasFile('imagen')) {
            $categorias['imagen']=$request->file('imagen')->store('uploads','public');
        }

        Categoria::insert($categorias);
      //  return response()->json($usuarios);
        return redirect('/categoria');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoria = Categoria::find($id);
        return view ("supervisor.categoria.show",compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = Categoria::find($id);
        return view ("supervisor.categoria.edit",compact('categoria'));
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
        $categorias = request()->except(['_token','_method']);
      // return response()->json($usuarios);
        if ($request -> hasFile('imagen')) {

            $categoria = Categoria::findOrFail($id);
            Storage::delete('public/'.$categoria->imagen);
            $categorias['imagen']=$request->file('imagen')->store('uploads','public');
        }
        Categoria::where('id','=',$id)->update($categorias);
        return redirect('/categoria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = Categoria::findOrFail($id);
        Storage::delete('public/'.$categoria->imagen);
        Categoria::destroy($id);
        return redirect('/categoria');
    }
}
