<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use App;
use App\Books;

class BooksController extends Controller
{

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

	public function index()
	{
		return Books::all();
	}

	public function store(BookRequest $request)
	{
		$do = Books::create($request->validated());
		return $do;
	}

	public function show(Books $book)
	{
		return $book = Books::findOrFail($book);
	}

	public function update(BookRequest $request, $id)
	{
		$book = Books::findOrFail($id);
		$book->fill($request->except(['id']));
		$book->save();
		return response()->json($book);
	}

	public function destroy(BookRequest $request, $id)
	{
		$book = Books::findOrFail($id);
		if($book->delete()) return response(null, 204);
	}

}
