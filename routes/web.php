<?php

use Illuminate\Support\Facades\Request;

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
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('portfolio', 'ProjectController@index')->name('portfolio');
Route::get('portfolio/{id}', 'ProjectController@show')->name('portfolio.show');
// Route::get('portfolio/tag/{slug?}', 'TagController@show')->name('portfolio.search');

Route::get('sobre-nos', 'AboutController@index')->name('aboutus');

Route::get('solucoes', function(){
    return view('solucoes');
})->name('solucoes');

Route::get('clientes', function(){
    return view('clientes');
})->name('clientes');



Route::get('contato', function(){
    return view('contato');
})->name('contato');

Route::post('contato', 'ContatoController@store');

Route::prefix('dashboard')->group(function(){

    Route::get('/', 'Dashboard\HomeController@index')->name('dashboard.home');

    Route::prefix('projeto')->group(function () {
        Route::get('/create', 'Dashboard\ProjectController@create')->name('projeto.create');
        Route::get('/edit/{project}', 'Dashboard\ProjectController@edit')->name('projeto.edit');
        Route::post('/store', 'Dashboard\ProjectController@store')->name('projeto.store');
    });

    Route::post('/client/store', 'Dashboard\ClientController@store');
});