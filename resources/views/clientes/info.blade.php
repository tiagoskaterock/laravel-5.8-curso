@extends('layouts.principal')

@section('titulo', 'Info')

@section('conteudo')
	<h1>Info</h1>

	<p>ID: {{ $cliente['id'] }}</p>
	<p>Nome: {{ $cliente['nome'] }}</p>

	<a href="{{ route('clientes.index') }}">Voltar</a>
@endsection