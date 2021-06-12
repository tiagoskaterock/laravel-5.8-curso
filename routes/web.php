<?php

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('produtos', function(){
	return view('outros.produtos');
})->name('produtos');

Route::get('departamentos', function(){
	return view('outros.departamentos');
})->name('departamentos');

Route::get('nome', 'MeuControllador@getNome');
Route::get('idade', 'MeuControllador@getIdade');
Route::get('multiplicar/{n1}/{n2}', 'MeuControllador@multiplicar');

Route::resource('clientes', 'ClienteControlador');

/*
Route::get('/hello', function() {
	return 'Hello world!!!';
});

Route::get('/oi/{nome}/{sobrenome}', function($nome, $sobrenome) {
	return "Oi, $nome $sobrenome!!!";
});

Route::get('/rota_com_regras/{nome}/{n}', function($nome, $n) {
	echo "<p>Seja bem vindo</p>";
	for ($i=0; $i < $n; $i++) { 
		echo "<p>$nome</p>";
	}
})->where('nome', '[A-Za-z]+')
	->where('n', '[1-9]+');

Route::get('/seunome/{nome?}', function($nome = null) {
	if (isset($nome)) {
		$nome = ucfirst($nome);
		return 'Seja bem vindo ' . $nome . '!';
	}
	else {
		return 'Olá!';
	}
});

Route::prefix('/aplication')->group(function(){

		Route::get('/', function() {
			return view('/app');
		})->name('app');

		Route::get('/docs', function() {
			return view('docs');
		})->name('app.docs');

		Route::get('/users', function() {
			return view('users');
		})->name('app.users');

});

Route::get('/produtos', function() {
	return view('produtos');
})->name('produtos');

Route::get('/budega', function() {
	return view('budega');
})->name('budega');

Route::redirect('budega', 'produtos', 301);

Route::redirect('/', 'aplication', 301);

Route::get('todosprodutos', function() {
	return redirect()->route('produtos');
});




Route::get('/porcaria', function() {
	return 'Oi porcaria!';
});

Route::post('/porcaria', function() {
	return 'Oi porcaria!';
});

Route::put('/porcaria', function() {
	return 'Oi porcaria!';
});

Route::delete('/porcaria', function() {
	return 'Oi porcaria!';
});

Route::patch('/porcaria', function() {
	return 'Oi porcaria!';
});

Route::options('/porcaria', function() {
	return 'Oi porcaria!';
});
*/
