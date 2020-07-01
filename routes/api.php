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

Route::get('/books', 'BooksController@index');
Route::get('/books/{alias}', 'BooksController@show');

Route::get('/chapters/', 'ChaptersController@index');
Route::get('/chapters/{book}', 'ChaptersController@show');