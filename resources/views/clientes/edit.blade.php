@extends('layouts.principal')

@section('titulo', 'Editar Cliente')

@section('conteudo')
	<h1>Edit cliente</h1>
		<form action="{{ route('clientes.update', $cliente['id']) }}" method="POST">
			@csrf
			@method('PUT')
			<input type="text" name="nome" value="{{ $cliente['nome'] }}">
			<input type="submit" value="salvar"></input>
		</form>
@endsection




