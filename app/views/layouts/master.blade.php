<html>
	<head>
		<title>Bau</title>
		<!-- para incluir las librerias css y javascript del famework-->
		{{HTML::style('css/materialize.css')}}
		{{HTML::style('css/materialize.min.css')}}
		{{HTML::style('css/login.css')}}
	</head>
    <body>
        @section('sidebar')
           <!-- seccion para la barra de navegacion del sitio -->
        @show

        <div class="container">
            @yield('content')
        </div>
		
		{{HTML::script('https://code.jquery.com/jquery-2.1.1.min.js')}}
		{{HTML::script('js/materialize.js')}}
    </body>
</html>