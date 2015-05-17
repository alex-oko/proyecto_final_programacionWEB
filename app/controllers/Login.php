<?php
class Login extends BaseController{
	public function postUser(){
		//get POST data
		$userdate = array(
			'email'=> Input::get('email'),
			'password'=> Input::get('pass')
		);

		if(Auth::attempt($userdate)){
			//este mensaje puede ser cambiado por una redireccion o por una vista
			return View::make('hello');
			//return "Usuario logeado correctamente.";
		}
		else{
			return "Error de datos no validos.";
		}
	}
}