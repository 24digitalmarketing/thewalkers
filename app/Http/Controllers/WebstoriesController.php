<?php

namespace App\Http\Controllers;

use App\Models\Webstories;
use App\Models\WebstoriesCategory;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class WebstoriesController extends Controller
{


    // forontend 
    public function webstory()
    {
        $category = "All";
        $data = Webstories::with('webstoryCategory')->orderBy('id', 'desc')->get();
        return view('frontend.web-story')->with(compact('data', 'category'));
    }

    public function webstoryCategory($slug)
    {
        $getCategory_id  = WebstoriesCategory::where('slug', '=', $slug)->first();
        if (!is_null($getCategory_id)) {
            $cat_id = $getCategory_id->id;
            $category = $getCategory_id->cat_name;
            // all blog  
            $data =  Webstories::with('webstoryCategory')->where([
                ['cat_id', '=', $cat_id],
            ])->orderBy('id', 'desc')->get();

            return view('frontend.web-story')->with(compact('data', 'category'));
        } else {
            abort(404, 'Data not found');
        }
    }

    public function webstoryView($slug)
    {
        $data = Webstories::where('slug', '=', $slug)->first();
        if (!is_null($data)) {
            return view('frontend.webstories-view')->with(compact('data'));
        } else {
            return abort(404, 'Webstory Not Found');
        }
    }

    public function index()
    {

        return view('admin.add-webstories');
    }
    public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category' => 'required',
            'cover' => 'required',
            'media' => 'required',
            'title' => 'required',
            'slug' => 'required|unique:webstories,slug'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
                'message' => 'Failed to add webstory. Please try again',
                'redirect' => '0'
            ]);
        } else {

            $data = new Webstories();
            $data->cat_id =   sanitizeInput($request->category);
            $data->cover =   $request->cover;
            $data->media =   $request->media;
            $data->title =   sanitizeInput($request->title);
            $data->slug =    sanitizeInput($request->slug);
            $data->link =     $request->link;

            try {
                $data->save();
                return response()->json([
                    'status' => true,
                    'errors' => "",
                    'message' => 'Webstory added successfully.',
                    'redirect' => '0'
                ]);
            } catch (\Throwable $th) {
                return response()->json([
                    'status' => false,
                    'errors' => $th,
                    'errors_type' => "Throwable",
                    'message' => 'Failed to add webstory. Please try again.',
                    'redirect' => '0'
                ]);
            }
        }
    }

    public function editWebStories($id)
    {
        $data = Webstories::find($id);
        if (!is_null($data)) {
            return view('admin.edit-webstories')->with(compact('data'));
        } else {
            abort(404, 'Data not found');
        }
    }

    public function updateWebStories(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'category' => 'required',
            'cover' => 'required',
            'media' => 'required',
            'title' => 'required',
            'slug' => "required|unique:webstories,slug,$id"
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
                'message' => 'Failed to update webstory. Please try again',
                'redirect' => '0'
            ]);
        } else {

            $data =  Webstories::find($id);
            $data->cat_id =   sanitizeInput($request->category);
            $data->cover =   $request->cover;
            $data->media =   $request->media;
            $data->title =   sanitizeInput($request->title);
            $data->slug =   $request->slug;
            $data->link =     $request->link;

            try {
                $data->save();
                return response()->json([
                    'status' => true,
                    'errors' => "",
                    'message' => 'Webstory updated successfully.',
                    'redirect' => '0'
                ]);
            } catch (\Throwable $th) {
                return response()->json([
                    'status' => false,
                    'errors' => $th,
                    'errors_type' => "Throwable",
                    'message' => 'Failed to update webstory. Please try again.',
                    'redirect' => '0'
                ]);
            }
        }
    }


    public function show(Request $request)
    {


        if ($request->ajax()) {
            $data =  Webstories::with('webstoryCategory')->orderBy('id', 'desc')->get();
            return DataTables::of($data)->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $id = $data->id;
                    $edit_url =  route('admin.editWebStories', $id);
                    $btn = "
                    <div class='dropdown action-dropdown'>
                            <button class='btn dropdown-toggle' type='button'
                                data-bs-toggle='dropdown'>
                                <span class='fas fa-ellipsis-h fs--1 text-primary'></span>
                            </button>
                            <div class='dropdown-menu border py-2'>
                                <a class='dropdown-item'
                                    href='$edit_url'><i
                                        class='fas fa-edit text-primary'></i> Edit</a>
                                <a class='dropdown-item' href='#!'
                                    onclick=single_deleteConfirm('webstories',[$id],'false','','')><i
                                        class='fas fa-trash text-danger'></i>
                                    Delete</a>

                            </div>
                        </div>
                ";
                    return $btn;
                })
                ->addColumn('checkbox', function ($data) {
                    $checkbox = $data->id;
                    return $checkbox;
                })
                ->editColumn('cat_id', function ($data) {
                    if (!is_null($data->webstoryCategory)) {
                        return $data->webstoryCategory->cat_name;
                    } else {
                        return 'Not Found';
                    }
                })
                ->editColumn('cover', function ($data) {
                    $cover = json_decode($data->cover, true);
                    return getMediaFile($cover[0]['file_id']);
                })
                ->editColumn('created_at', function ($data) {
                    return showDateTime($data->created_at);
                })
                ->editColumn('updated_at', function ($data) {
                    return showDateTime($data->updated_at);
                })
                ->rawColumns(['action', 'checkbox', 'cover', 'cat_id'])
                ->toJson();
        }
        return view('admin.show-webstories');
    }
}
