<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
use App\Event;

class ReportController extends Controller
{
    public function allReports(){
    	$reports = Report::orderBy('created_at', 'desc')
    		->simplePaginate(10);
    	$events = Event::orderBy('created_at', 'desc')->limit(3)
    				->get();
    		return view('pages/all_reports')->withReports( $reports)
    			->withEvents($events);
    }
}
