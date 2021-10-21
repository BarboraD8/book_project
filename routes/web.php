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
Route::get('/', 'App\Http\Controllers\CategoryController@index');
Route::get('/faq', 'App\Http\Controllers\FAQController@index');

Route::get('/books', 'App\Http\Controllers\BookController@index');
Route::get('/books/create', 'App\Http\Controllers\BookController@create');
Route::post('/books', 'App\Http\Controllers\BookController@store');
Route::get('/books/{id}', 'App\Http\Controllers\BookController@show');
Route::delete('/books/{id}', 'App\Http\Controllers\BookController@delete');
Route::get('/books/{id}/edit', 'App\Http\Controllers\BookController@edit');
Route::put('/books/{id}', 'App\Http\Controllers\BookController@update');

Route::get('/authors', 'App\Http\Controllers\AuthorController@index');
Route::get('/authors/create', 'App\Http\Controllers\AuthorController@create');
Route::post('/authors', 'App\Http\Controllers\AuthorController@store');
Route::get('/authors/{id}', 'App\Http\Controllers\AuthorController@show');

Route::get('/categories/{id}', 'App\Http\Controllers\CategoryController@show');
