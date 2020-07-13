<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chapters;
use App\Books;

class ChaptersController extends Controller
{
    
	public function index() 
	{
		return Chapters::all();
	}

	public function show(string $book)
	{
		$bid = Books::getAlias($book);
		$chapters = Chapters::getAll($bid['id']);

		foreach ($chapters as $key => &$value) {
			$value['path'] = '/read/' . $book . "/" . $value['id'];
		}

		return $chapters;
	}

	public function read(string $book, int $chapter)
	{
		$chap = Chapters::getOne($chapter);
		$next = Chapters::getNext($chap['book_id'], $chap['ord']);
		$prev = Chapters::getPrev($chap['book_id'], $chap['ord']);
		$bibl = Books::getAlias($book);
		$chap['next'] = $next;
		$chap['prev'] = $prev;
		$chap['book'] = $bibl;

		return $chap;
	}

	public function save()
	{
		//
	}

	public function remove()
	{

	}

}
