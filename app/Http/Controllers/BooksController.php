<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class BooksController extends Controller
{
    
	public function index() 
	{
		return view('welcome');
	}

	public function book($id)
	{
		$book = App\Books::find($id);
		return view('book.view', [
			'book' => $book
		]);
	}

}
