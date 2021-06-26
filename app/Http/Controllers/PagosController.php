<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compra;
use App\Models\User;
use App\Models\Producto;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class PagosController extends Controller
{
    public function index()
    {
    	$consulta='';
    	$compras = Compra::all();
        return view('contador.index',compact('consulta','compras'));
    }

    public function show($id){
    	$compra = Compra::find($id);
        return view('contador.revisar.show',compact('compra'));
    }
    public function validar(Request $request, $id)
    {
    	$compras = request()->except(['_token','_method']);
        if (!isset($compras['motivo'])) $compras['comprado']=1;
        else $compras['comprado']=0;
        Compra::where('id','=',$id)->update($compras);
        return redirect("/pagos")->with('mensaje','Revision realizada');
    }

    public function indexLista()
    {
      	$clientes = User::where('rol','=','Cliente')
    	->get();
    	return view('contador.lista.lista',compact('clientes'));   
    }
    public function validarLista(Request $request)
    {
    	$cliente = $request->get('cliente');
    	$compras = Compra::where('user_id','=',$cliente)->get();
    	return response(json_encode($compras),200)->header('Content-type','text/plain');
    }

    public function indexListaPagos()
    {
      	$consulta='';
    	$compras = Compra::all();
        return view('contador.listaPagos.lista',compact('consulta','compras')); 
    }
}
