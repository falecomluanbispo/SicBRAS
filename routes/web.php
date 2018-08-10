<?php

$this->group(['middleware' => ['auth'], 'namespace' => 'Estoque'], function(){

    Route::resource('estoque', 'EstoqueController');
});

$this->group(['middleware' => ['auth'], 'namespace' => 'Treinamento'], function(){

    Route::resource('treinamento', 'TreinamentoController');
});

$this->group(['middleware' => ['auth'], 'namespace' => 'Qualidade'], function(){

    Route::resource('qualidade', 'QualidadeController');
});

Route::resource('home', 'HomeController');
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
