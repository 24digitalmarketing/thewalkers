<?php

namespace App\Http\Controllers;

use App\Models\HomeModel;
use Illuminate\Http\Request;

class HomeModelController extends Controller
{
    public function homePage(Request $request)
    {
        return view('admin.home-page');
    }
    public function homePageSave(Request $request)
    {
        if (!is_null($request)) {
            $section = $request->section;
            $checkSection = HomeModel::where('section', '=', $section)->count();
            if ($checkSection > 0) {
                // update section
                $data = HomeModel::where('section', '=', $section)->first();
                $data->data = json_encode($request->toArray());
            } else {
                //  add section 
                $data = new HomeModel();
                $data->section = $section;
                $data->section_name = sanitizeInput($request->section_name);
                $data->data =  json_encode($request->toArray());
            }

            try {
                $data->save();
                return response()->json([
                    'status' => true,
                    'errors' => "",
                    'message' => 'Saved.',
                    'redirect' => '0'
                ]);
            } catch (\Throwable $th) {
                return response()->json([
                    'status' => false,
                    'errors' => $th,
                    'errors_type' => "Throwable",
                    'message' => 'Failed to save',
                    'redirect' => '0'
                ]);
            }
        } else {
        }
    }
}

