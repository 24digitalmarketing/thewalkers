<?php

namespace App\Http\Controllers;

use App\Models\TagsModel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TagsModelController extends Controller
{
    public function addTag()
    {
        $data = TagsModel::orderBy('id', 'desc')->get();
        return view('admin.tags')->with(compact('data'));
    }
    public function saveTag(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tag_name' => 'required|unique:tags,tag',
            'slug' => 'required|unique:tags,slug'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
                'message' => 'Failed to add tag. Please try again',
                'redirect' => '0'
            ]);
        } else {

            $data = new TagsModel();
            $data->tag =  Str::lower(sanitizeInput($request->tag_name));
            $data->slug =  Str::lower(sanitizeInput($request->slug));

            try {
                $data->save();
                return response()->json([
                    'status' => true,
                    'errors' => "",
                    'message' => 'Tag added successfully.',
                    'redirect' => '0'
                ]);
            } catch (\Throwable $th) {
                return response()->json([
                    'status' => false,
                    'errors' => $th,
                    'errors_type' => "Throwable",
                    'message' => 'Failed to add tag. Please try again.',
                    'redirect' => '0'
                ]);
            }
        }
    }

    public function editTag($id)
    {
        $data = TagsModel::find($id);
        if (!is_null($data)) {
            return view('admin.edit-tag')->with(compact('data'));
        } else {
            abort(404, 'Data not found');
        }
    }

    public function updateTag(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'tag_name' => "required|unique:tags,tag, $id",
            'slug' => "required|unique:tags,slug, $id"
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
                'message' => 'Failed to update tag. Please try again',
                'redirect' => '0'
            ]);
        } else {
            $data =   TagsModel::find($id);
            $data->tag =  Str::lower(sanitizeInput($request->tag_name));
            $data->slug =  Str::lower(sanitizeInput($request->slug));

            try {
                $data->save();
                return response()->json([
                    'status' => true,
                    'errors' => "",
                    'message' => 'Tag updated successfully.',
                    'redirect' => '0'
                ]);
            } catch (\Throwable $th) {
                return response()->json([
                    'status' => false,
                    'errors' => $th,
                    'errors_type' => "Throwable",
                    'message' => 'Failed to update tag. Please try again.',
                    'redirect' => '0'
                ]);
            }
        }
    }
}
