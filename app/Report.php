<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
	protected $dates = ['created_at'];
    protected $fillable = [
    	'title', 'content', 'image'
    ];
}
