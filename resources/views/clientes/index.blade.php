@extends('layouts.principal')

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



@for($i = 0; $i < 10; $i++)
	<p>{{ $i }}</p>
@endfor


@foreach($clientes as $cliente)
	<h2>Total de itens</h2>
	{{ $loop->count }}

	<p>{{ $cliente['nome'] }}</p>

	<p>Índice: {{ $loop->index }}</p>
	<p>Iteração: {{ $loop->iteration }}</p>

	@if($loop->first)
		<h3>Primeiro</h3>
	@endif

	@if($loop->last)
		<h3>Último</h3>
	@endif
@endforeach


