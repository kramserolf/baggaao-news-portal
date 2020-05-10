<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
	protected $dates = ['created_at'];
    protected $fillable = [
    	'title', 'content', 'image'
    ];
}
