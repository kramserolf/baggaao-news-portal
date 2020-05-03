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

// Route::get('/', function () {
//     return view('index');
// });
// home view
// Route::get('/baggao', 'NewsController@news');
Route::get('/', 'NewsController@news');
// see all news page
Route::get('/news/all', 'NewsController@allNews')->name('all.news');
// get current news
Route::get('/news/{news}', 'NewsController@view')->name('view.news');

/*see all reports*/
Route::get('/reports/all', 'ReportController@allReports')
	->name('all.report');

// view galleries
Route::get('/gallery/photos', function () {
	$events = App\Event::orderBy('created_at', 'desc')->limit(3)->get();
    return view('pages/gallery')
    	->with('events', $events);
});