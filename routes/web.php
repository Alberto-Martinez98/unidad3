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

Route::get('/', function () {
    return view('principal');
});

Route::get('/login', function () {
    return view('login');
})->name('login')->middleware('guest');

Route::post('/validar',"UsuarioController@validar");
Route::post('/salir',"UsuarioController@salir");

Route::get('/dashboard', function () {
    return view('layouts.plantilla');
})->middleware('auth');


Route::resource('usuario',"UsuarioController")->middleware('auth');

