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

Route::group(['prefix' => 'admin'], function() {
     Route::resource('users','UsersController');
     Route::get('users/{id}/destroy', [
        'uses' => 'UsersController@destroy',
        'as'   => 'admin.users.destroy'
     ]);

     Route::resource('creyentes','NuevoCreyenteController');
     Route::get('creyentes/{cedula}/destroy', [
     	'uses' => 'NuevoCreyenteController@destroy',
     	'as'   => 'admin.creyentes.destroy'
     ]);

    /*Route::resource('maestros','MaestrosController');
     Route::get('maestros/{id}/destroy', [
        'uses' => 'MaestrosController@destroy',
        'as'   => 'admin.maestros.destroy'
     ]); */   


    /* Route::resource('servidores','ServidoresController');

    Route::group(['prefix' => 'servidores'], function() {
     	Route::resource('enlaces', 'EnlacesController');
     	Route::resource('afirmadores', 'AfirmadoresController');

        Route::get('servidores/enlaces/{id}/destroy', [
        'uses' => 'EnlacesController@destroy',
        'as'   => 'admin.servidores.enlaces.destroy'
        ]);

        Route::get('servidores/afirmadores/{id}/destroy', [
        'uses' => 'AfirmadoresController@destroy',
        'as'   => 'admin.servidores.afirmadores.destroy'
        ]);
    });*/

});