<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogCategoryModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class BlogCategoryController extends Controller
{
    public function index()
    {
        $data = BlogCategoryModel::orderBy('id', 'desc')->get();
        return view('admin.blog-category')->with(compact('data'));
    }
    public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_name' => 'required',
            'slug' => 'required|unique:blog_category,slug',
            'title' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
                'message' => 'Failed to add blog category. Please try again',
                'redirect' => '0'
            ]);
        } else {
            $cat_name = trim($request->category_name);
            $checkCat = BlogCategoryModel::where('cat_name', '=', "$cat_name")->get();
            if (count($checkCat) != 0) {
                return response()->json([
                    'status' => false,
                    'errors' => '',
                    'message' => 'This category already added.',
                    'redirect' => '0'
                ]);
            } else {
                $data = new BlogCategoryModel();
                $data->cat_id =  uid_generator();
                $data->cat_name = strtolower(trim($request->category_name));
                $data->slug = strtolower(trim($request->slug));
                $data->title = trim($request->title);

                $save_status = $data->save();

                if ($save_status === true) {
                    return response()->json([
                        'status' => true,
                        'errors' => "",
                        'message' => 'Blog category added successfully.',
                        'redirect' => '0'
                    ]);
                } else {
                    return response()->json([
                        'status' => false,
                        'errors' => '',
                        'message' => 'Failed to add blog category. Please try again.',
                        'redirect' => '0'
                    ]);
                }
            }
        }
    }

    public function show($id)
    {
        $data = BlogCategoryModel::where('id', '=', $id)->get();
        return view('admin.blog-edit-category')->with(compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'category_name' => 'required',
            'slug' => "required|unique:blog_category,slug,$id",
            'title' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
                'message' => 'Failed to update blog category. Please try again',
                'redirect' => '0'
            ]);
        } else {
            $data =  BlogCategoryModel::where('id', '=', $id)->get();

            $data[0]->cat_name = strtolower(trim($request->category_name));
            $data[0]->slug = strtolower(trim($request->slug));
            $data[0]->title =  trim($request->title);

            $save_status = $data[0]->save();

            if ($save_status === true) {
                return response()->json([
                    'status' => true,
                    'errors' => "",
                    'message' => 'Blog category updated successfully.',
                    'redirect' => '0'
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'errors' => '',
                    'message' => 'Failed to update blog category. Please try again.',
                    'redirect' => '0'
                ]);
            }
        }
    }
}
