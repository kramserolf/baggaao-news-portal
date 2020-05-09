<?php
if (App::environment('production')) {
    URL::forceScheme('https');
}
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// home view
// Route::get('/baggao', 'NewsController@news');
Route::get('/', 'HomepageController@home')->name('page.home');

// Widget All News
Route::get('/news/all', function(){
	return view('pages.all_news');
})->name('all.news');
// Widget All Reports
Route::get('/news/reports', function(){
	return view('pages.all_reports');
})->name('all.reports');
// view selected news
Route::get('/news/{news}', 'HomepageController@viewNews')
    ->name('view.news');


// view mission and vission
Route::get('/about/mission&vision', 'HomepageController@viewMission')->name('about.mission');

// view history
Route::get('/about/history', 'HomepageController@viewHistory')->name('about.history');

// view land
Route::get('/about/land', 'HomepageController@viewLand')->name('about.land');

// view climate
Route::get('/about/climate', 'HomepageController@viewClimate')->name('about.climate');

// view topography
Route::get('/about/topography', 'HomepageController@viewTopography')->name('about.topography');

// view seal
Route::get('/about/seal', 'HomepageController@viewSeal')->name('about.seal');

// view brgy
Route::get('/about/barangay', 'HomepageController@viewBrgy')->name('about.barangay');

// view contact us
Route::get('/contactus', 'HomepageController@viewContact')->name('contact');
Route::post('/contactus', 'HomepageController@sendMessage')->name('send.message');



// admin routes
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// admin reports
Route::resource('admin/reports', 'Admin\ReportController' );
// admin news
Route::resource('admin/news', 'Admin\NewsController' );
// admin announcements
Route::resource('admin/announcements', 'Admin\AnnouncementController' );
// admin events
Route::resource('admin/events', 'Admin\EventController');

// reports delete
Route::get('/admin/reports/{report}', 'Admin\ReportController@destroy');
// announcement delete
Route::get('/admin/announcements/{announcement}', 'Admin\AnnouncementController@destroy');
// news delete
Route::get('/admin/news/{news}', 'Admin\NewsController@destroy');
// events delete
Route::get('/admin/events/{event}', 'Admin\EventController@destroy');



