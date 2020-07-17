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

header('Access-Control-Allow-Origin: *');
/*header("Access-Control-Allow-Methods", "GET, PUT, POST, DELETE");
header("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept, Authorization, application/json");*/

Route::get('/books', 'BooksController@index');
Route::get('/books/{alias}', 'BooksController@show');
Route::get('/books/search/{str}', 'BooksController@search');
Route::post('/books', 'BooksController@store');

Route::get('/chapters', 'ChaptersController@index');
Route::get('/chapters/{book}', 'ChaptersController@show');
Route::get('/chapters/{book}/{chapter}', 'ChaptersController@read');
Route::post('/chapters', 'ChaptersController@store');

Route::get('/category', 'CategoriesController@index');
Route::post('/category', 'CategoriesController@store');

Route::post('/file/upload', 'FileController@upload');