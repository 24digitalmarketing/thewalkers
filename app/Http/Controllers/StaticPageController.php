<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function aboutUs()
    {
        return view('frontend.about-us');
    }

    public function shippingPolicy()
    {
        return view('frontend.shipping-policy');
    }
    public function returnPolicy()
    {
        return view('frontend.return-policy');
    }
    public function termsConditions()
    {
        return view('frontend.terms-conditions');
    }
    public function privacyPolicy()
    {
        return view('frontend.privacy-policy');
    }
}
