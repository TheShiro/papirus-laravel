<?php

use Illuminate\Http\Request;
use Http\Controllers\BooksController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Methods: ', 'POST, GET, PUT, DELETE, OPTIONS');

Route::get('/books', 'BooksController@index');
Route::get('/books/{alias}', 'BooksController@show');
Route::get('/books/search/{str}', 'BooksController@search');
Route::post('/books', 'BooksController@store');
Route::post('/books/update', 'BooksController@update');
Route::post('/books/delete', 'BooksController@delete');

Route::get('/chapters', 'ChaptersController@index');
Route::get('/chapters/{book}', 'ChaptersController@show');
Route::get('/chapters/{book}/{chapter}', 'ChaptersController@read');
Route::post('/chapters', 'ChaptersController@store');
Route::post('/chapters/update', 'ChaptersController@update');
Route::post('/chapters/delete', 'ChaptersController@delete');

Route::get('/category', 'CategoriesController@index');
Route::post('/category', 'CategoriesController@store');
Route::post('/category/update', 'CategoriesController@update');
Route::post('/category/delete', 'CategoriesController@delete');

Route::post('/file/upload', 'FileController@upload');