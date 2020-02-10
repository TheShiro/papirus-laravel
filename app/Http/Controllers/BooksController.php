<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class BooksController extends Controller
{

	public function view($id)
	{
		$book = App\Books::find($id);
		return view('book.view', [
			'book' => $book
		]);
	}

	public function read()
	{
		return view('book.read', [ ]);
	}



}
