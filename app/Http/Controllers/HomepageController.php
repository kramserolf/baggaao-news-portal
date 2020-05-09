<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Announcement;
use App\News;
use App\Report;
use Mailgun\Mailgun;
use RealRashid\SweetAlert\Facades\Alert;
use Validator;

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
    	$announcements = Announcement::orderBy('created_at', 'desc')
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
    public function viewContact(){
        $announcements = Announcement::orderBy('created_at', 'desc')
                ->limit(3)
                ->get();
         return view('/includes/contact')->with('announcements', $announcements);
    }
    public function sendMessage(Request $request){
        // First, instantiate the SDK with your API credentials
        $mg = Mailgun::create('2dbb22684e947ca70b2954bda3b0d451-0afbfc6c-6218b30f'); // For US servers

        // Now, compose and send your message.
        // $mg->messages()->send($domain, $params);
        $validator = Validator::make($request->all(), [
                'email'=>'required|email',
                'subject' => 'required',
                'message' => 'required'
            ]);
        if ($validator->fails()) {
            Alert::error('Invalid email', 'Please enter a valid email');
            return redirect()->back()->withInput();
        } else {
           $mg->messages()->send('sandbox59e39447d8b24ed789376412a8ce9f69.mailgun.org', [
                'from'    => $request->email,
                'to'      => 'serolfkram27@gmail.com',
                'subject' => $request->subject,
                'text'    => $request->message
           ]); 
           Alert::success('Success', 'Your message sent successfully');
           return redirect()->route('contact'); 
        }
          
    }
}