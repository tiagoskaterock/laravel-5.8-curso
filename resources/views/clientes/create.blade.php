<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cliente Create</title>
</head>
<body>
<h1>Create cliente</h1>
	<form action="{{ route('clientes.store') }}" method="POST">
		@csrf
		<input type="text" name="nome">
		<input type="submit" value="salvar"></input>
	</form>
</body>
</html>