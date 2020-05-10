<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	protected $dates = ['created_at'];
    protected $fillable = [
    	'title', 'content'
    ];
}
