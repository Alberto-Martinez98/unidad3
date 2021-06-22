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

//comentario de prubea




Route::get('/login', function () {
    return view('login');
})->name('login')->middleware('guest');

Route::get('/',"PrincipalController@index")->middleware('guest');
Route::get('bcategoria/{id}','BuscarController@ver');

Route::get('/cte',"CategoriaController@inicioEncargado")->middleware('auth');
Route::get('bcte/{id}','CategoriaController@ver');

Route::get('/comprar',"ComprarController@inicioEncargado")->middleware('auth');
Route::get('comprar/{id}','ComprarController@ver');



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
Route::resource('revisar',"RevisarController")->middleware('auth');
Route::resource('preguntar',"PreguntaController")->middleware('auth');
Route::get('misproductos',"PreguntaController@index2")->middleware('auth');
Route::put('responder/{id}',"PreguntaController@respuesta")->middleware('auth');
Route::resource('registro',"RegistroController");






//ARCOS


Route::get('/detalles',"CategoriaController@inicioEncargado")->middleware('auth');
Route::get('detalles/{id}','PreguntaController@detalles')->middleware('auth');
Route::get('pregunta/{id}','PreguntaController@misproductos')->middleware('auth');

Route::get('compra/{id}','ComprarController@index');
Route::post('compra/{id}','ComprarController@guardarcompra');








//ruta de prueba de valida correo existente en ajax

//Route::get('/email_available', 'UsuarioController@index')->middleware('auth');;
//Route::resource('usuario',"UsuarioController@check'")->name('email_available.check');
Route::post('usuario/check', 'UsuarioController@check')->name('email_available.check')->middleware('auth');
