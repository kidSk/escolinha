<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', function () {
	return view('index');
});
Route::get('login', function () {
	return view('login');
});
*/


Route::group(['middleware'=>'cors'],function(){
	Route::post('login','loginController@userAuth');
	Route::resource('departamento','departamentoController');
	Route::resource('cargo','cargoController');
	Route::resource('usuariosRegistados','usuariosRegistadosController');
	Route::resource('mensagemPresidente','mensagemPresidenteController');
	Route::get('users','loginController@index');
	Route::get('users/{id}','loginController@show');
});