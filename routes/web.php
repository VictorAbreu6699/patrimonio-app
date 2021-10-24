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


Route::get('/', 'App\Http\Controllers\Site\GraficoController');

/*Patrimonio*/

Route::get('/patrimonio', 'App\Http\Controllers\Site\PatrimonioController@index');

Route::get('/patrimonio/{slug}', 'App\Http\Controllers\Site\PatrimonioController@show');

Route::post('/patrimonio', 'App\Http\Controllers\Site\PatrimonioController@create');

/*Patrimonio*/

/*Fundos*/

Route::get('/fundo', 'App\Http\Controllers\Site\FundoController@index');

Route::get('/fundo/{slug}', 'App\Http\Controllers\Site\FundoController@show');

Route::post('/fundo', 'App\Http\Controllers\Site\FundoController@create');


/*Fundos*/


