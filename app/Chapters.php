<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapters extends Model
{
    public static function getAll($bid)
    {
    	return static::where('book_id', $bid)->select('id', 'name', 'ord')->get();
    }

    public static function getOne(int $bid, int $cid)
    {
    	return static::where([
    		['book_id', $bid],
    		['id', $cid]
    	])->first();
    }

    public static function getPrev(int $bid, int $ord)
    {
    	return static::where([
    		['book_id', '=', $bid],
    		['ord', '<', $ord]
    	])->select('id', 'ord')->orderBy('ord', 'desc')->first();
    }

    public static function getNext(int $bid, int $ord)
    {
    	return static::where([
    		['book_id', '=', $bid],
    		['ord', '>', $ord]
    	])->select('id', 'ord')->first();
    }
}
