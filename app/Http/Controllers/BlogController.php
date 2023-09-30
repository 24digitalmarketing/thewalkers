<?php

namespace App\Http\Controllers;

use App\Models\BlogModel;
use Illuminate\Http\Request;
use App\Models\BlogCategoryModel;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\TagsModel;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;


class BlogController extends Controller
{
    public function index(Request $request)
    {
        // all blog  
        $blogData =  BlogModel::where([
            ['status', '=', 'published']
        ])->orderBy('id', 'desc')->get();

        // popular blogs 
        $popularBlogData = BlogModel::where([
            ['status', '=', 'published'],
            ['popular', '=', '1']
        ])->orderBy('id', 'desc')->get();

        if (!is_null($blogData)) {
            return view('frontend.blog')->with(compact('blogData', 'popularBlogData'));
        } else {
            abort(404, 'Data not found');
        }
    }
    public function blogDetails($slug)
    {
        //  blogs details 
        $blogData = BlogModel::where([
            ['slug', '=', $slug],
            ['status', '=', 'published']
        ])->first();

        // popular blogs 
        $popularBlogData = BlogModel::where([
            ['status', '=', 'published'],
            ['popular', '=', '1']
        ])->orderBy('id', 'desc')->get();

        if (!is_null($blogData)) {
            return view('frontend.blog-details')->with(compact('blogData', 'popularBlogData'));
        } else {
            abort(404, 'Data not found');
        }
    }

    public function blogCategory($slug)
    {

        $getCategory_id  = BlogCategoryModel::where('slug', '=', $slug)->first();
        if (!is_null($getCategory_id)) {
            $cat_id = $getCategory_id->cat_id;

            // all blog  
            $blogData =  BlogModel::where([
                ['cat_id', '=', $cat_id],
                ['status', '=', 'published']
            ])->orderBy('id', 'desc')->get();

            // popular blogs 
            $popularBlogData = BlogModel::where([
                ['status', '=', 'published'],
                ['popular', '=', '1']
            ])->orderBy('id', 'desc')->get();

            if (!is_null($blogData)) {
                return view('frontend.blog')->with(compact('blogData', 'popularBlogData'));
            } else {
                abort(404, 'Data not found');
            }
        } else {
            abort(404, 'Data not found');
        }
    }

    public function addBlogIndex()
    {
        $blogCategory = BlogCategoryModel::orderBy('cat_name', 'desc')->get();
        return view('admin.add-blogs')->with(compact('blogCategory'));
    }

    public function addBlogSave(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_name' => "required",
            'title' => "required",
            'slug' => "required|unique:blogs,slug",
            'file' => "required",
            'short_description' => "required",
            'popular' => "required",
            'blog_content' => "required"
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
                'message' => 'Failed to add blog',
                'redirect' => '0'
            ]);
        } else {
            $blog_content = htmlentities($request->blog_content);

            $file = json_decode($request->file, true);
            $file_id = $file[0]['file_id'];


            $saveData = new BlogModel();
            $saveData->cat_id = $request->category_name;
            $saveData->blog_id = uid_generator();
            $saveData->slug = trim($request->slug);
            $saveData->title = trim($request->title);
            $saveData->main_pic = $file_id;
            $saveData->short_des = sanitizeInput($request->short_description);
            $saveData->blog_content = $blog_content;
            $saveData->popular = sanitizeInput($request->popular);

            $saveData->related =  json_encode($request->blogCheckbox);
            $saveStatus = $saveData->save();
            if ($saveStatus === true) {
                return response()->json([
                    'status' => true,
                    'errors' => '',
                    'message' => 'Blog added successfully',
                    'redirect' => '0'
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'errors' => '',
                    'message' => 'Failed to add blog',
                    'redirect' => '0'
                ]);
            }
        }
    }

    public function viewBlogs()
    {
        $data = BlogModel::orderBy('id', 'desc')->get();
        return view('admin.view-blog')->with(compact('data'));
    }

    public function editBlog($id)
    {
        $data = BlogModel::where('id', '=', $id)->get();
        $blogCategory = BlogCategoryModel::orderBy('cat_name', 'desc')->get();
        return view('admin.edit-blog')->with(compact('data', 'blogCategory'));
    }

    public function updateBlog(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'category_name' => "required",
            'title' => "required",
            'short_description' => "required",
            'popular' => "required",

            'blogCheckbox' => "required",
            'blog_content' => "required"
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
                'message' => 'Failed to update blog',
                'redirect' => '0'
            ]);
        } else {
            $saveData =  BlogModel::where('id', '=', "$id")->get();
            if ($request->has('file') && $request->file != '') {
                $files = json_decode($request->file, true);
                $file_id = $files[0]['file_id'];
            } else {
                $file_id = $saveData[0]->main_pic;
            }
            $blog_content = htmlentities($request->blog_content);

            $saveData[0]->cat_id = $request->category_name;
            $saveData[0]->slug = trim($request->slug);
            $saveData[0]->title = trim($request->title);
            $saveData[0]->main_pic = $file_id;
            $saveData[0]->blog_content = $blog_content;
            $saveData[0]->short_des = sanitizeInput($request->short_description);
            $saveData[0]->popular = sanitizeInput($request->popular);
            $saveData[0]->related =  json_encode($request->blogCheckbox);
            $saveData[0]->status = $request->status;
            $saveStatus = $saveData[0]->save();

            if ($saveStatus === true) {
                return response()->json([
                    'status' => true,
                    'errors' => '',
                    'message' => 'Blog updated successfully',
                    'redirect' =>  '0'
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'errors' => '',
                    'message' => 'Failed to update blog',
                    'redirect' =>  '0'
                ]);
            }
        }
    }


    function getBlogData(Request $request)
    {

        if ($request->ajax()) {
            $data = DB::table('blogs')->orderBy('id', 'desc')->get();
            return DataTables::of($data)->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $id = $data->id;
                    $edit_url =  route('admin.editBlog', $id);
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
                                    onclick=single_deleteConfirm('blogs',[$id],'false','','')><i
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
                    return getBlogCategoryName($data->cat_id);
                })
                ->editColumn('main_pic', function ($data) {
                    return getMediaFile($data->main_pic);
                })
                ->editColumn('title', function ($data) {
                    $href = route('frontend.blogDetails', $data->slug);
                    return  "<a href='$href' target='_blank' class='text-primary'>$data->title</a>";
                })

                ->rawColumns(['action', 'checkbox', 'main_pic', 'title',])
                ->toJson();
        }

        return view('admin.view-blog');
    }
}
