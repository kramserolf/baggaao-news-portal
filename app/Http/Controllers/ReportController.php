<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Report;
use App\Event;
use Validator;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image_name = $request->file('image')
            ->getClientOriginalName();
        $request->file('image')
            ->storeAs('images/reports', $image_name);
        Report::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $image_name
        ]);
        return response()
            ->json(['success' => 'Added successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Report::findOrFail($id);
        $data->delete();
        return response()->json([
            'success' => 'Successfully deleted.'
        ]);
    }
    public function allReports(){
        $reports = Report::orderBy('created_at', 'desc')
            ->simplePaginate(10);
        $events = Event::orderBy('created_at', 'desc')->limit(3)
                    ->get();
            return view('pages/all_reports')->withReports( $reports)
                ->withEvents($events);
    }
}
