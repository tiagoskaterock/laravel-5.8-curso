<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>POOOOOORRRRRAAAAA!!!</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/principal.css') }}">
</head>

<body>

	<div class="row">
		<div class="col1">

			<div class="menu">
				<ul>
					<li><a class="active" href="{{ route('clientes.index') }}">Clientes</a></li>
					<li><a href="#">Produtos</a></li>
					<li><a href="#">Departamentos</a></li>
				</ul>				
			</div>

		</div>


		<div class="col2">
			@yield('conteudo')
		</div>

	</div>




</body>
</html>