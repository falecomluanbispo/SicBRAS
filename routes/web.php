<?php

$this->group(['middleware' => ['auth'], 'namespace' => 'Estoque'], function(){

    Route::resource('estoque', 'EstoqueController');
});

$this->group(['middleware' => ['auth'], 'namespace' => 'Treinamento'], function(){

    Route::resource('treinamento', 'TreinamentoController');
    Route::resource('help', 'HelpController');
    Route::resource('gerenciador', 'GerenciadorController');
    Route::resource('cadtreinamento', 'CadtreinamentoController');
    Route::resource('cadturma', 'CadturmaController');
    Route::resource('cadcargo', 'CadcargoController');
    Route::resource('cadsetor', 'CadsetorController');
    Route::resource('caddepartamento', 'CaddepartamentoController');
    Route::resource('cadfuncionario', 'CadfuncionarioController');
    Route::resource('contreinamento', 'ContreinamentoController');
    Route::resource('condepartamento', 'CondepartamentoController');
    Route::resource('consetor', 'ConsetorController');
    Route::resource('concargo', 'ConcargoController');
    Route::resource('conturma', 'ConturmaController');
    Route::resource('confuncionario', 'ConfuncionarioController');
    Route::resource('relturma', 'RelturmaController');
    Route::resource('relfuncionario', 'RelfuncionarioController');
    Route::resource('reltreinamento', 'ReltreinamentoController');
    Route::resource('relcargo', 'RelcargoController');
    Route::resource('relsetor', 'RelsetorController');
    Route::resource('reldepartamento', 'ReldepartamentoController');
});

$this->group(['middleware' => ['auth'], 'namespace' => 'Qualidade'], function(){

    Route::resource('qualidade', 'QualidadeController');
});

Route::resource('home', 'HomeController');
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
