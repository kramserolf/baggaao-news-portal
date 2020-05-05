<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\News;
use DataTables;
use Validator;

class NewsController extends Controller
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
            $data = DB::table('news')->latest();
            return DataTables::of($data)
                ->addColumn('action', function($data){
                   $button = '<div class="text-center"><button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-warning btn-sm"><i class="fa fa-pencil"></i></button>';
                    $button .= '&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="btn-delete btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button></div>';
                        return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin/news');
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
        $image_name = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs(
            'public/images/news', $image_name
        );
         News::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $image_name
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
            $data = News::findOrFail($id);
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
         $image_name = $request->file('update_image')->getClientOriginalName();
         $request->file('update_image')->storeAs(
             'public/images/news', $image_name
         );
        News::whereId($request->hidden_id)
         ->update([
             'title' => $request->update_title,
             'content' => $request->update_content,
             'image' => $image_name,

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
        $data = News::findOrFail($id);
        $data->delete();
        return response()->json([
            'success' => 'Successfully deleted.'
        ]);
    }
}
