<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Info</title>
</head>
<body>
	<h1>Info</h1>

	<p>ID: {{ $cliente['id'] }}</p>
	<p>Nome: {{ $cliente['nome'] }}</p>

	<a href="{{ route('clientes.index') }}">Voltar</a>

</body>
</html>