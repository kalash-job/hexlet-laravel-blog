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

Route::get('/articles/{id}', 'App\Http\Controllers\ArticleController@show')->name('articles.show');
