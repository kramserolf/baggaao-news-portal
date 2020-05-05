<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Announcement;
use App\News;
use App\Report;

class HomepageController extends Controller
{
    public function home(){
    	$news = DB::table('news')
    	    ->latest()
    	    ->limit(5)
    	    ->get();
    	$reports = DB::table('reports')
    	    ->latest()
    	    ->limit(4)
    	    ->get();
    	$announcements = DB::table('announcements')
    	    ->latest()
    	    ->limit(3)
    	    ->get();
    	return view('index', ['news' => $news, 'reports' => $reports, 'announcements' => $announcements]);
    }
    public function allNews(){
    	$news = DB::table('news')
    	    ->latest()
    	    ->simplePaginate(10);
    	$announcements = DB::table('announcements')
    	    ->latest()
    	    ->limit(3)
    	    ->get();
    	return view('pages.all_news', ['news'=> $news, 'announcements'=> $announcements]);
    }
    public function allReports() {
    	$reports = DB::table('reports')
    	    ->latest()
    	    ->simplePaginate(10);
    	$announcements = DB::table('announcements')
    	    ->latest()
    	    ->limit(3)
    	    ->get();
    	return view('pages.all_reports', ['reports'=> $reports, 'announcements' => $announcements]);
    }
    public function viewNews($id){
    	$news = DB::table('news')->find($id);
        $announcements = DB::table('announcements')
            ->latest()
            ->limit(3)
            ->get();
    	return view('pages/news', ['news' => $news, 'announcements' => $announcements]);
    }
    public function viewMission(){
    	$announcements = Announcement::orderBy('created_at', 'desc')
    	        ->limit(3)
    	        ->get();
    	 return view('/pages/about/mission')->with('announcements', $announcements);
    }
    public function viewHistory(){
    	$announcements = Announcements::orderBy('created_at', 'desc')
    	        ->limit(3)
    	        ->get();
    	 return view('/pages/about/history')->with('announcements', $announcements);
    }
    public function viewLand(){
    	$announcements = Announcement::orderBy('created_at', 'desc')
    	        ->limit(3)
    	        ->get();
    	 return view('/pages/about/land')->with('announcements', $announcements);
    }
    public function viewClimate(){
    	$announcements = Announcement::orderBy('created_at', 'desc')
    	        ->limit(3)
    	        ->get();
    	 return view('/pages/about/climate')->with('announcements', $announcements);
    }
    public function viewTopography(){
    	$announcements = Announcement::orderBy('created_at', 'desc')
    	        ->limit(3)
    	        ->get();
    	 return view('/pages/about/topography')->with('announcements', $announcements);
    }
    public function viewSeal(){
    	$announcements = Announcement::orderBy('created_at', 'desc')
    	        ->limit(3)
    	        ->get();
    	 return view('/pages/about/seal')->with('announcements', $announcements);
    }
    public function viewBrgy(){
    	$announcements = Announcement::orderBy('created_at', 'desc')
    	        ->limit(3)
    	        ->get();
    	 return view('/pages/about/barangay')->with('announcements', $announcements);
    }
}
