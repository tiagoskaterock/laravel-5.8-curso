<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cliente Edit</title>
</head>
<body>
<h1>Edit cliente</h1>
	<form action="{{ route('clientes.update', $cliente['id']) }}" method="POST">
		@csrf
		@method('PUT')
		<input type="text" name="nome" value="{{ $cliente['nome'] }}">
		<input type="submit" value="salvar"></input>
	</form>
</body>
</html>