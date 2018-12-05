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

Route::get('/perfil', 'UserController@index')->name('perfil');
Route::get('/perfil/editar', 'UserController@edit')->name('perfil.edit');
Route::put('/perfil/editar', 'UserController@update')->name('perfil.update');
Route::get('/perfil/{name}', 'UserController@show')->name('perfil.show');

Route::get('/eventos', 'EventController@index')->name('eventos');

Route::get('/musicos', 'BandController@index')->name('musicos');
