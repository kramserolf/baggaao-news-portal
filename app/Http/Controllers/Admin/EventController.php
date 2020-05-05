<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Event;
use DataTables;
use Validator;
class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = DB::table('events')->latest();
            return DataTables::of($data)
                ->addColumn('action', function($data){
                   $button = '<div class="text-center"><button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-warning btn-sm"><i class="fa fa-pencil"></i></button>';
                    $button .= '&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="btn-delete btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button></div>';
                        return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin/events');
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
        Event::create([
           'title' => $request->title,
           'content' => $request->content,
           ]);
        return response()->json(['success' => 'Data Added successfully.']);
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
        if(request()->ajax())
        {
            $data = Event::findOrFail($id);
            return response()->json(['result' => $data]);
        }
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
        Event::whereId($request->hidden_id)
         ->update([
             'title' => $request->update_title,
             'content' => $request->update_content,
         ]);
         return response()->json(['success' => 'Successfully updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Event::findOrFail($id);
        $data->delete();
        return response()->json([
            'success' => 'Successfully deleted.'
        ]);
    }
}
