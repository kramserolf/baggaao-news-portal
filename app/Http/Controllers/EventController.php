<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    public function show(){
    	$events = Event::orderBy('created_at', 'desc')->paginate(5);
    	return view('/pages/news/{news}')with('events', $events)
    }
}
