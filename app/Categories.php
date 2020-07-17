<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
	protected $fillable = ['name'];
	protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
