<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
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
            $usuarios = User::where('name','LIKE','%'.$consulta.'%')
            ->orderBy('id','asc')
            ->get();

        return view("supervisor.usuarios.index",compact("consulta","usuarios"));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("supervisor.usuarios.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuarios = request()->except('_token');
        if($usuarios['password']!=$usuarios['password2']){
            return redirect()->back()->with('error','La contraseña no esta bien confirmado');
        }
        $usuarios = request()->except('_token','password2');
        $usuarios['password'] = Hash::make($usuarios['password']);

        if ($request -> hasFile('imagen')) {
            $usuarios['imagen']=$request->file('imagen')->store('uploads','public');
        }

        User::insert($usuarios);
      //  return response()->json($usuarios);
        return redirect('/usuario');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = User::find($id);
        return view ("supervisor.usuarios.show",compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = User::find($id);
        return view ("supervisor.usuarios.edit",compact('usuario'));
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
        $usuarios = request()->except(['_token','_method']);
      // return response()->json($usuarios);
        if ($request -> hasFile('imagen')) {

            $usuario = User::findOrFail($id);
            Storage::delete('public/'.$usuario->imagen);
            $usuarios['imagen']=$request->file('imagen')->store('uploads','public');
        }
        User::where('id','=',$id)->update($usuarios);
        return redirect('/usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::findOrFail($id);
        Storage::delete('public/'.$usuario->imagen);
        User::destroy($id);
        return redirect('/usuario');
    }


    public function validar(Request $request){
         $credenciales = request()->except('_token');
         if(Auth::attempt($credenciales)){
            request()->session()->regenerate();
            return redirect('/dashboard');
         }
           return redirect()->back()->with('error', 'ERROR DE USUARIO');
    }

    public function salir(Request $request){
        
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function perfil(){
        return view("perfil.perfil");
    }

    public function perfil2(Request $request, $id)
    {
        $usuarios = request()->except(['_token','_method']);
      // return response()->json($usuarios);
        if ($request -> hasFile('imagen')) {

            $usuario = User::findOrFail($id);
            Storage::delete('public/'.$usuario->imagen);
            $usuarios['imagen']=$request->file('imagen')->store('uploads','public');
        }
        User::where('id','=',$id)->update($usuarios);
        return redirect('/perfil');
    }
    public function password(Request $request, $id)
    {
        $usuario = User::find($id);
        $contra = $usuario->password;
        $usuarios = request()->except(['_token','_method']);
      // return response()->json($usuarios);
        if(Hash::check($usuarios['passwordactual'], $contra)){
            $usuarios = request()->except(['_token','_method','passwordactual']);
            $usuarios['password'] = Hash::make($usuarios['password']);

             User::where('id','=',$id)->update($usuarios);
            return redirect('/perfil');
        }else   
            return redirect()->back()->with('error','contraseña incorrecta');
        
    }
    public function restablecerPassword(Request $request, $id)
    {
         $usuarios = request();
         if($usuarios['password']!=$usuarios['password2']){
            return redirect()->back()->with('error','La contraseña no esta bien confirmado');
        }
        $usuarios = request()->except('_token','password2','_method');
        $usuarios['password'] = Hash::make($usuarios['password']);

         User::where('id','=',$id)->update($usuarios);
        return redirect('/perfil');
    }
}