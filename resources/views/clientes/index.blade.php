@extends('layouts.principal')

@section('header')
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Principal</title>
	<style type="text/css">
		ul { list-style: none; }
	</style>
</head>
<body>
@endsection

@section('conteudo')
	<h1>{{ $titulo }}</h1>
	<a href="{{ route('clientes.create') }}">Create</a>

	@if(!empty($clientes))
	<ul>
		@foreach ($clientes as $c)
		<li>
			{{ $c['id'] }} - {{ $c['nome'] }} | 
			<a href="{{ route('clientes.edit', $c['id']) }}">Edit | </a>

			<a href="{{ route('clientes.show', $c['id']) }}">Show | </a>

			<form  style="display: inline;" action="{{ route('clientes.destroy', $c['id']) }}" method="POST">
				@csrf
				@method('DELETE')
				<input type="submit" value="Apagar"></input>
			</form>

		</li>
		@endforeach
	</ul>

	@else

	<h4>Não há clientes cadastrados em {{ $titulo }}</h4>

	@endif
@endsection

</body>
</html>