<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;

class CategoriesController extends Controller
{

    public function index() 
	{
		return Categories::all();
	}

	public function store(Request $request)
	{
		$cat = Categories::create($request->all());
		return response()->json($cat, 201);
	}

	public function update(Request $request)
	{
		$book = Categories::where('id', $request->all()['id'])->update($request->all());
		return response()->json($book, 201);
	}

	public function delete(Request $request)
	{
		$book = Categories::where('id', $request->all()['id'])->delete();
		return response()->json($book, 201);
	}

}
