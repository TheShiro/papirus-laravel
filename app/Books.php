<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{

	protected $fillable = ['title', 'description', 'author', 'page_count', 'category', 'image', 'alias'];
	protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    public static function getAlias(string $alias)
    {
    	return static::where('alias', $alias)->first();
    }
}
