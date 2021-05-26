<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function() {
	return 'Hello world!!!';
});

Route::get('/oi/{nome}/{sobrenome}', function($nome, $sobrenome) {
	return "Oi, $nome $sobrenome!!!";
});

Route::get('/seunome/{nome?}', function($nome = null) {
	if (isset($nome)) {
		$nome = ucfirst($nome);
		return 'Seja bem vindo ' . $nome . '!';
	}
	else {
		return 'Olá!';
	}
});
