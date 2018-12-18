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

/* Necesitamos usuarios
   Los usuarios van a poder compartir su musica, publicar eventos, comentar publicaciones
*/

Route::get('/', 'WelcomeController@index')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/perfil/{name}', 'UserController@show')->name('perfil.show');
Route::post('/perfil/{name}', 'MessageController@store');
Route::get('/perfil/{name}/editar', 'UserController@edit')->name('perfil.edit');
Route::put('/perfil/{name}/editar', 'UserController@update')->name('perfil.update');
Route::get('/perfil', 'UserController@index')->name('perfil');


Route::get('/eventos/create','EventController@create')->name('eventos.create');
Route::post('/eventos/create','EventController@store')->name('eventos.store');
Route::get('/eventos/{name}', 'EventController@show')->name('eventos.show');
Route::get('/eventos', 'EventController@index')->name('eventos');


Route::get('/musicos', 'BandController@index')->name('musicos');
Route::post('/musicos', 'BandController@find');

Route::get('/mensajes', 'MessageController@index')->name('messages.index');
