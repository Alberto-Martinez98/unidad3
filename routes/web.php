<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/prueba', function () {

	$user=Auth::user();
	if($user->esSupervisor()){
		echo "eres supervisor";
	}else
	{
		echo "eres otro";
	}




    return view('principal');
});


Route::get('/login', function () {
    return view('login');
})->name('login')->middleware('guest');

Route::get('/',"PrincipalController@index")->middleware('guest');
Route::get('bcategoria/{id}','BuscarController@ver');


Route::post('/validar',"UsuarioController@validar");
Route::post('/salir',"UsuarioController@salir");

Route::get('/dashboard', function () {
    return view('layouts.plantilla');
})->middleware('auth');



Route::resource('usuario',"UsuarioController")->middleware('auth');
Route::get('/perfil',"UsuarioController@perfil")->middleware('auth');
Route::put('/updateperfil/{id}/',"UsuarioController@perfil2")->middleware('auth');
Route::put('/password/{id}/',"UsuarioController@password")->middleware('auth');//cambia paswword
Route::put('/updatepassword/{id}/',"UsuarioController@restablecerPassword")->middleware('auth');
Route::resource('categoria',"CategoriaController")->middleware('auth');
Route::resource('producto',"ProductoController")->middleware('auth');
Route::resource('registro',"RegistroController");
