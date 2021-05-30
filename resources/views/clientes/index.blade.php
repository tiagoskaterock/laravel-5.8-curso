<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Clientes</title>
</head>
<body>
	<h1>Clientes</h1>
	<a href="{{ route('clientes.create') }}">Create</a>
	<ul>
		@foreach ($clientes as $c)
		<li>
			{{ $c['nome'] }} | 
			<a href="{{ route('clientes.edit', $c['id']) }}">Edit | </a>
			<a href="{{ route('clientes.show', $c['id']) }}">Show</a>
		</li>
		@endforeach
	</ul>
</body>
</html>