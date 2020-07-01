<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;

class BooksController extends Controller
{

	public function index() 
	{
		return Books::all();
	}

	public function show(string $alias)
	{
		return Books::getAlias($alias);
	}

	public function save()
	{
		//
	}

	public function remove()
	{

	}

	/*public function view($alias)
	{
		$book = App\Books::getAlias($alias);
		$chapters = App\Chapters::getAll($book->id);
		$category = App\Categories::find($book->category);

		return view('book.view', [
			'book' => $book,
			'category' => $category,
			'chapters' => $chapters
		]);
	}

	public function read($alias, $chap)
	{
		$book = App\Books::getAlias($alias);
		$chapter = App\Chapters::getOne($book->id, $chap);
		$prev = App\Chapters::getPrev($book->id, $chapter->ord);
		$next = App\Chapters::getNext($book->id, $chapter->ord);
		
		return view('book.read', [
			'book' => $book,
			'chapter' => $chapter,
			'prev' => '/book' . ($prev ? "/read/$book->alias/$prev->id" : "/view/$book->alias"),
			'next' => '/book' . ($next ? "/read/$book->alias/$next->id" : "/view/$book->alias"),
		]);
	}*/

}
