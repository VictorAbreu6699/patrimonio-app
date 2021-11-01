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


Route::get('/', 'App\Http\Controllers\Site\HistoricoController@index')->name('site.infos');
Route::post('/', 'App\Http\Controllers\Site\HistoricoController@filter')->name('site.infos.filter');

/*Patrimonio*/

Route::get('/patrimonio', 'App\Http\Controllers\Site\PatrimonioController@index')->name('site.patrimonio');

Route::post('/patrimonio', 'App\Http\Controllers\Site\PatrimonioController@store')->name('site.patrimonio.store');

/*Patrimonio*/

/*Fundos*/

Route::get('/fundo', 'App\Http\Controllers\Site\FundoController@index')->name('site.fundo');

Route::post('/fundo', 'App\Http\Controllers\Site\FundoController@store')->name('site.fundo.store');

Route::get('/fundo/{id}/edit', 'App\Http\Controllers\Site\FundoController@edit')->name('site.fundo.edit');

Route::post('/fundo/{id}/edit', 'App\Http\Controllers\Site\FundoController@update')->name('site.fundo.update');

Route::get('/fundo/{id}/delete', 'App\Http\Controllers\Site\FundoController@delete')->name('site.fundo.delete');

Route::post('/fundo/{id}/delete', 'App\Http\Controllers\Site\FundoController@destroy')->name('site.fundo.destroy');
/*Fundos*/


