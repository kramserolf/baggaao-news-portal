<?php
// if (App::environment('production')) {
//     URL::forceScheme('https');
// }
use Illuminate\Support\Facades\Route;
use App\Event;

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
Route::get('/', 'NewsController@news')->name('page.home');
// see all news page
Route::get('/news/all', 'NewsController@allNews')->name('all.news');
// get current news
Route::get('/news/{news}', 'NewsController@view')->name('view.news');

/*see all reports*/
Route::get('/reports/all', 'ReportController@allReports')
	->name('all.report');

// view mission and vission
Route::get('/baggao/mission&vision', function () {
    $events = Event::orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
     return view('/pages/about/mission')->with('events', $events);
})->name('baggao.mission');

// view history
Route::get('/baggao/history', function () {
    $events = Event::orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
     return view('/pages/about/history')->with('events', $events);
})->name('baggao.history');

// view land
Route::get('/baggao/land', function () {
    $events = Event::orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
     return view('/pages/about/land')->with('events', $events);
})->name('baggao.land');

// view climate
Route::get('/baggao/climate', function () {
    $events = Event::orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
     return view('/pages/about/climate')->with('events', $events);
})->name('baggao.climate');

// view topography
Route::get('/baggao/topography', function () {
    $events = Event::orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
     return view('/pages/about/topography')->with('events', $events);
})->name('baggao.topography');

// view seal
Route::get('/baggao/seal', function () {
    $events = Event::orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
     return view('/pages/about/seal')->with('events', $events);
})->name('baggao.seal');

// view seal
Route::get('/baggao/barangay', function () {
    $events = Event::orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
     return view('/pages/about/barangay')->with('events', $events);
})->name('baggao.barangay');







