@extends('layouts.principal')

@section('conteudo')
<h1>Create cliente</h1>
	<form action="{{ route('clientes.store') }}" method="POST">
		@csrf
		<input type="text" name="nome">
		<input type="submit" value="salvar"></input>
	</form>
@endsection