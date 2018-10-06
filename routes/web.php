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

Route::get('/welcome', 'DigitalController@welcome');

Route::get('/', 'DigitalController@index');

Route::get('/pepeguapo', function () {
    return 'Pepe es guapo';
});

Route::get('/guapo', function () {
    return "Todos son guapos";
});

Route::get('/whatever/{name}', 'DigitalController@guapo');

Route::get('/post/{post_id}/comments/{comment_id?}', function ($post_id, $comment_id = null) {
    return $comment_id ?: 'No hay comentarios';
});

Route::get('/resultado/{numero}/{numero2?}', 'DigitalController@resultado');

Route::get('peliculas', 'PeliculasController@index');

Route::get('peliculas/{id}', 'PeliculasController@buscarPeliculaId');

Route::get('/peliculas/buscar/{nombre}', 'PeliculasController@buscarPeliculaNombre');

Route::get('/peliculas/buscar/{nombre}/for', 'PeliculasController@buscarPeliculaNombreFor');

Route::get('/blade', 'DigitalController@blade');