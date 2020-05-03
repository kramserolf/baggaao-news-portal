<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Event;
use App\Report;

class NewsController extends Controller
{
    // see all news
    public function allNews(){
        $news = News::orderBy('created_at', 'desc')
            ->simplePaginate(10);
        $events = Event::orderBy('created_at', 'desc')
                ->limit(3)
                ->get();
        return view('/pages/all_news')->withNews($news)->withEvents($events);
    }
    // summary of news
    public function news(){
    	$news = News::orderBy('created_at', 'desc')
    		->limit(4)
            ->get();
        $events = Event::orderBy('created_at', 'desc')
                ->limit(3)
                ->get();

    	return view('index')->withNews($news)
            ->withEvents($events);
    }
    public function view($id){
    	$news = News::find($id);
        $events = Event::orderBy('created_at', 'desc')
                ->limit(3)
                ->get();
    	return view('pages/news')->withNews($news)
            ->withEvents($events);
    }
}
