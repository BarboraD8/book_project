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
});

Route::get('/faq', 'App\Http\Controllers\FAQController@index');

Route::get('/books', 'App\Http\Controllers\BookController@index');
Route::get('/books/create', 'App\Http\Controllers\BookController@create');
Route::post('/books', 'App\Http\Controllers\BookController@store');
Route::get('/books/{id}', 'App\Http\Controllers\BookController@show');

Route::get('/authors', 'App\Http\Controllers\AuthorController@index');
Route::get('/authors/create', 'App\Http\Controllers\AuthorController@create');
Route::post('/authors', 'App\Http\Controllers\AuthorController@store');
Route::get('/authors/{id}', 'App\Http\Controllers\AuthorController@show');
