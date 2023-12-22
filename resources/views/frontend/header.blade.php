<!DOCTYPE html>
<html class="no-js" lang="en">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" />

    {{-- ------- Dynamic Meta Started ------------  --}}
    @php
        // Program to display URL of current page.
        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
            $link = 'https';
        } else {
            $link = 'http';
        }
        
        // Here append the common URL characters.
        $link .= '://';
        
        // Append the host(domain name, ip) to the URL.
        $link .= $_SERVER['HTTP_HOST'];
        
        // Append the requested resource location to the URL
        $link .= $_SERVER['REQUEST_URI'];
        
        $metaData = DB::table('meta')
            ->where('url', '=', "$link")
            ->get();
        
    @endphp
    @if (count($metaData) != 0)
        <title>{{ $metaData[0]->title }}</title>
        <meta name="keywords" content="{{ $metaData[0]->keywords }}">
        <meta name="description" content="{{ $metaData[0]->description }}">
        <meta property="og:title" content="{{ $metaData[0]->og_title }}" />
        <meta property="og:description" content="{{ $metaData[0]->og_description }}" />
        <meta property="og:url" content="{{ $metaData[0]->og_url }}" />
        <meta property="og:image" content="{{ $metaData[0]->og_image_url }}">
        <meta name="twitter:title" content="{{ $metaData[0]->twitter_title }}">
        <meta name="twitter:description" content="{{ $metaData[0]->twitter_des }}">
        <meta name="twitter:image" content="{{ $metaData[0]->twitter_img_url }}">
        <meta property="og:type" content="{{ $metaData[0]->page_topic }}" />
        <link rel="canonical" href="{{ $link }}" />



    @endif

    @php
        if (count($metaData) != 0) {
            echo $metaData[0]->js_schema;
        }
    @endphp


    <meta property="site_name" content="The Walkers" />
    <meta property="og:site_name" content="The Walkers" />

    <meta name="domainType" content=".com" />
    <meta name="Googlebot" content="Index, Follow" />
    <meta name="YahooSeeker" content="INDEX, FOLLOW" />
    <meta name="msnbot" content="INDEX, FOLLOW" />
    <meta name="rating" content="Safe For Kids" />
    <meta name="robots" content="all" />
    <meta name="revisit-after" content="daily" />
    <meta name="classification" content="Online Betting" />
    <meta name="distribution" content="Global" />
    <meta name="copyright" content="Copyright 2023 thewalkers.org - All Rights Reserved" />

    <meta http-equiv='Expires' content='0'>
    <meta http-equiv='Pragma' content='no-cache'>
    <meta http-equiv='Cache-Control' content='no-cache'>
    <meta name='fb:page_id' content=''>
    <meta name="twitter:card" content="summery_large_image" />
    <meta name="twitter:site" content="" />
    <meta name="twitter:creator" content="" />

    <meta name="author" content="thewalkers.org">
    <meta name="publisher" content="thewalkers.org">

    {{-- ------- Dynamic Meta End ------------  --}}

    {{-- css  --}}

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/colorbox.css') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,500,600,700,800&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,500,600,700,800&amp;display=swap"
        rel="stylesheet">

    @stack('style')

</head>


<body>

    <div class="body-inner">
        <!-- Topbar Start -->
        {{-- <div id="top-bar" class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <ul class="unstyled top-nav">
                            <li class="mx-2"><i class="fa fa-map-marker"></i> Lorem ipsum dolor sit
                            </li>
                            <li class="mx-2"><i class="fa fa-phone"></i> +91123456789
                            </li>
                            <li class="mx-2"><i class="fa fa-envelope"></i> example@gmail.com
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 top-social text-lg-right text-md-center">
                        <ul class="unstyled">
                            <li> <a title="Facebook" href="#"> <span class="social-icon"><i
                                            class="fa fa-facebook"></i></span> </a> <a title="Twitter"
                                    href="#"> <span class="social-icon"><i class="fa fa-twitter"></i></span>
                                </a> <a title="Google+" href="#"> <span class="social-icon"><i
                                            class="fa fa-google-plus"></i></span> </a> <a title="Linkdin"
                                    href="#"> <span class="social-icon"><i class="fa fa-linkedin"></i></span>
                                </a> <a title="Rss" href="#"> <span class="social-icon"><i
                                            class="fa fa-rss"></i></span> </a> <a title="Skype" href="#">
                                    <span class="social-icon"><i class="fa fa-skype"></i></span> </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Topbar End -->


        <!-- Header start -->
        <header id="header" class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 text-center">
                        <div class="logo"> <a href="{{ route('frontend.index') }}">
                                <img src="{{ asset('assets/images/logo.webp') }}" alt=""
                                    style="max-height: 100px">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->

        <!-- Main Nav Start -->
        <div class="utf_main_nav_area clearfix utf_sticky">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand-lg col">
                        <div class="utf_site_nav_inner float-left">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="true" aria-label="Toggle navigation"> <span
                                    class="navbar-toggler-icon"></span> </button>
                            <div id="navbarSupportedContent"
                                class="collapse navbar-collapse navbar-responsive-collapse">
                                <ul class="nav navbar-nav">
                                    <li> <a href="{{ route('frontend.blog') }}">Blog</a> </li>
                                    <li> <a href="{{ route('frontend.webstory') }}">Webstories</a> </li>

                                    @php
                                        $head_category = DB::table('blog_category')
                                            ->orderBy('cat_name', 'asc')
                                            ->get();
                                    @endphp
                                    @if (count($head_category) > 0)
                                        @foreach ($head_category as $single_head_category)
                                            <li><a
                                                    href="{{ route('frontend.blogCategory', $single_head_category->slug) }}">
                                                    {{ $single_head_category->cat_name }}</a></li>
                                        @endforeach
                                    @endif

                                </ul>
                            </div>
                        </div>
                    </nav>

                </div>
            </div>
        </div>
