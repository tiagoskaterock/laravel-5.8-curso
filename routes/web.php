<?php

Route::get('/', function () {
    return view('welcome');
});

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

Route::prefix('/app')->group(function(){
		Route::get('/', function() {
			return view('/app');
		});
		Route::get('/docs', function() {
			return view('docs');
		});
		Route::get('/users', function() {
			return view('users');
		});
});
