<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{	
	/*$user= new User;
	$user->name="Alexis31";
	$user->email="alex-oko2@hotmail.com";
	$user->password = Hash::make('123');
	$user->save();*/
	return View::make('login');
});

/*ruta hacia un controlador*/
Route::controller('check','Login');

//destruye el evento y sale de la app o deslogearnos
Route::get('salir', function(){
	Auth::logout();
});