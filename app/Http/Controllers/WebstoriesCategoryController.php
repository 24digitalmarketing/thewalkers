<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebstoriesCategory;
use Illuminate\Support\Facades\Validator;

class WebstoriesCategoryController extends Controller
{
    public function index()
    {
        $data = WebstoriesCategory::orderBy('id', 'desc')->get();
        return view('admin.web-story-category')->with(compact('data'));
    }
    public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_name' => 'required',
            'slug' => 'required|unique:webstories_categories,slug'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
                'message' => 'Failed to add webstory category. Please try again',
                'redirect' => '0'
            ]);
        } else {
            $cat_name = trim($request->category_name);
            $checkCat = WebstoriesCategory::where('cat_name', '=', "$cat_name")->get();
            if (count($checkCat) != 0) {
                return response()->json([
                    'status' => false,
                    'errors' => '',
                    'message' => 'This category already added.',
                    'redirect' => '0'
                ]);
            } else {
                $data = new WebstoriesCategory();
              
                $data->cat_name = strtolower(trim($request->category_name));
                $data->slug = strtolower(trim($request->slug));

                $save_status = $data->save();

                if ($save_status === true) {
                    return response()->json([
                        'status' => true,
                        'errors' => "",
                        'message' => 'webstory category added successfully.',
                        'redirect' => '0'
                    ]);
                } else {
                    return response()->json([
                        'status' => false,
                        'errors' => '',
                        'message' => 'Failed to add webstory category. Please try again.',
                        'redirect' => '0'
                    ]);
                }
            }
        }
    }

    public function show($id)
    {
        $data = WebstoriesCategory::where('id', '=', $id)->get();
        return view('admin.edit-web-story-category')->with(compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'category_name' => 'required',
            'slug' => "required|unique:webstories_categories,slug,$id"
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
                'message' => 'Failed to update webstory category. Please try again',
                'redirect' => '0'
            ]);
        } else {
            $data =  WebstoriesCategory::where('id', '=', $id)->get();

            $data[0]->cat_name = strtolower(trim($request->category_name));
            $data[0]->slug = strtolower(trim($request->slug));

            $save_status = $data[0]->save();

            if ($save_status === true) {
                return response()->json([
                    'status' => true,
                    'errors' => "",
                    'message' => 'webstory category updated successfully.',
                    'redirect' => '0'
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'errors' => '',
                    'message' => 'Failed to update webstory category. Please try again.',
                    'redirect' => '0'
                ]);
            }
        }
    }
}
