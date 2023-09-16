<?php

namespace App\Http\Controllers;

use App\Models\HomeModel;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $section1 = HomeModel::where('section', '=', 'section-1')->first();
        $section2 = HomeModel::where('section', '=', 'section-2')->first();
        $section3 = HomeModel::where('section', '=', 'section-3')->first();
        $section4 = HomeModel::where('section', '=', 'section-4')->first();
        $section5 = HomeModel::where('section', '=', 'section-5')->first();

        return view('frontend.index')->with(compact('section1', 'section2', 'section3', 'section4', 'section5'));
    }
}
