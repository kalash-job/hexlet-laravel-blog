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

Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::get('/about', 'App\Http\Controllers\PageController@about')->name('about');

Route::get('/articles', 'App\Http\Controllers\ArticleController@article')->name('articles.index');

Route::get('articles/create', 'App\Http\Controllers\ArticleController@create')->name('articles.create');

Route::post('articles', 'App\Http\Controllers\ArticleController@store')->name('articles.store');

Route::get('articles/{id}/edit', 'App\Http\Controllers\ArticleController@edit')->name('articles.edit');

Route::patch('articles/{id}', 'App\Http\Controllers\ArticleController@update')->name('articles.update');

Route::get('/articles/{id}', 'App\Http\Controllers\ArticleController@show')->name('articles.show');

Route::delete('articles/{id}', 'App\Http\Controllers\ArticleController@destroy')->name('articles.destroy');
