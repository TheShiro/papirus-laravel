<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    public static function getAlias($alias)
    {
    	return static::where('alias', $alias)->first();
    }
}
