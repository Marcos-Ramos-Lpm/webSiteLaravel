<?php

use Illuminate\Support\Facades\Route;

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

Route::namespace('site')->group(function(){

Route::get('/', 'HomeController')->name('site.home');
Route::get('produto', 'CategoriaController@index')->name('site.produto');
Route::get('produto/{slug}', 'CategoriaController@show')->name('site.produto.categoria');
Route::get('sobre', 'SobreController@index')->name('site.sobre');
Route::get('contato', 'ContatoController@index')->name('site.contato');

Route::post('contato', 'ContatoController@create')->name('site.contato.form');
});
