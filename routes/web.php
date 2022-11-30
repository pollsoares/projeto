<?php

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/home', 'HomeController@index')->name('home');

//rotas com autenticação
Route::group([

    'prefix'     => 'admin',
    'middleware' => ['auth', 'web'],
    ], function() {

        Route::group(['prefix' => 'pessoas'], function() {
        Route::get('/', 'Admin\PessoasController@index')->name('pessoas.index');
        Route::get('/form', 'Admin\PessoasController@form')->name('pessoas.form');
        Route::post('/store', 'Admin\PessoasController@store')->name('pessoas.store');
        Route::get('/show/{id}', 'Admin\PessoasController@show')->name('pessoas.show');
        Route::get('/edit/{id}', 'Admin\PessoasController@edit')->name('pessoas.edit');
        Route::post('/update', 'Admin\PessoasController@update')->name('pessoas.update');
        Route::get('/delete/{id}', 'Admin\PessoasController@delete')->name('pessoas.delete');
        Route::post('/pesquisar', 'Admin\PessoasController@search')->name('pessoas.pesquisar');
    });

    //sem uso
    //Route::group(['prefix' => 'sexos'], function() {
    //    Route::get('/', 'Admin\SexosController@index')->name('sexos.index');
    //});

});


Auth::routes(['register' => false]);
