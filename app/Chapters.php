<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapters extends Model
{
    protected $fillable = ['book_id', 'name', 'text', 'ord'];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
    
    public static function getAll(int $bid)
    {
    	return static::where('book_id', $bid)->select('id', 'name', 'ord')->get();
    }

    public static function getOne(int $cid)
    {
    	return static::where([
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
