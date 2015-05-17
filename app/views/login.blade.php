@extends('layouts.master')
@section('content')
	<div class="col s12 m12 l12" style="margin-top:52px;">
		<!--<img src="img/logo_bau.png"id="logo_empresa">-->
		<h4 class="center" id="titulo_login">Gestiona tus pedidos</h4>
		<p class="center" id="subtitulo_login">Inicia sesión con tu cuenta de Baú</p>
	</div>
	<div class="card content_login">
		<div class="row">
			<div class="col s12 m12 l12" id="content_imagen_login">
				<p id="titulo_login_content">Iniciar sesión</p>
				<img src="img/avatar.png" id="img_login" alt="">
			</div>
			<form class="login" action="check/user" method="POST">
				<div class="col s12 m12 l12" style="margin-top: 20px; margin-bottom: 20px;">
					<div class="col s12 m12 l12">
						<div class="input-field col s12">
			          		<i class="mdi-communication-email prefix"></i>
			          		<input id="email" name="email" type="text" class="validate">
			          		<label for="email">Email</label>
			        	</div>
			        	<div class="input-field col s12">
			          		<i class="mdi-action-lock prefix"></i>
			          		<input id="pass" name="pass" type="password" class="validate">
	          				<label for="password">Password</label>
			        	</div>
					</div>
				</div>
				<div class="col s12 m12 l12">
					<button class="btn waves-effect waves-light" id="btn_login" type="submit" name="action">Entrar</button>
				</div>
			</form>
		</div>
	</div>
@stop