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

	public function save()
	{
		//
	}

	public function remove()
	{

	}

}
