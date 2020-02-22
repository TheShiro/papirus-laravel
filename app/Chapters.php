<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapters extends Model
{
    public static function getAll($bid)
    {
    	return static::where('book_id', $bid)->select('id', 'name', 'ord')->get();
    }

    public static function getOne($bid, $cid)
    {
    	return static::where([
    		['book_id', $bid],
    		['id', $cid]
    	])->first();
    }

    public static function getPrev($bid, $ord)
    {
    	return static::where([
    		['book_id', '=', $bid],
    		['ord', '<', $ord]
    	])->select('id', 'ord')->orderBy('ord', 'desc')->first();
    }

    public static function getNext($bid, $ord)
    {
    	return static::where([
    		['book_id', '=', $bid],
    		['ord', '>', $ord]
    	])->select('id', 'ord')->first();
    }
}
