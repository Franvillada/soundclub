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

Route::get('/perfil/{name}', 'UserController@show')->name('perfil.show')->middleware('auth');
Route::post('/perfil/{name}', 'MessageController@store')->middleware('auth');
Route::get('/perfil/{name}/editar', 'UserController@edit')->name('perfil.edit')->middleware('auth');
Route::put('/perfil/{name}/editar', 'UserController@update')->name('perfil.update')->middleware('auth');
Route::get('/perfil', 'UserController@index')->name('perfil')->middleware('auth');


Route::get('/eventos/create','EventController@create')->name('eventos.create')->middleware('auth');
Route::post('/eventos/create','EventController@store')->name('eventos.store')->middleware('auth');
Route::get('/eventos/{name}', 'EventController@show')->name('eventos.show')->middleware('auth');
Route::get('/eventos', 'EventController@index')->name('eventos')->middleware('auth');


Route::get('/musicos', 'BandController@index')->name('musicos')->middleware('auth');
Route::post('/musicos', 'BandController@find')->middleware('auth');

Route::get('/mensajes', 'MessageController@index')->name('messages.index')->middleware('auth');
