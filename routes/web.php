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

Route::group(['prefix' => 'contatos'], function() {
    Route::get('/', 'ContatoController@index')->name('contatos');
    Route::post('/create_contato', 'ContatoController@createContato')->name('create-contato');
    Route::get('/edit_contato/{id}', 'ContatoController@editContato')->name('edit-contato');
    Route::post('/update_contato/{id}', 'ContatoController@updateContato')->name('update-contato');
    Route::get('/delete_contato/{id}', 'ContatoController@deleteContato')->name('delete-contato');
});
