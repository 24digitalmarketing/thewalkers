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
        <title>@php echo $metaData[0]->title @endphp</title>
        <meta name="keywords" content="@php echo $metaData[0]->keywords @endphp">
        <meta name="description" content="@php echo $metaData[0]->description @endphp">
        <meta property="og:title" content="@php echo $metaData[0]->og_title @endphp" />
        <meta property="og:description" content="@php echo $metaData[0]->og_description @endphp" />
        <meta property="og:url" content="@php echo $metaData[0]->og_url @endphp" />
        <meta property="og:image" content="@php echo $metaData[0]->og_image_url @endphp">
        <meta name="twitter:title" content="@php echo $metaData[0]->twitter_title @endphp">
        <meta name="twitter:description" content="@php echo $metaData[0]->twitter_des @endphp">
        <meta name="twitter:image" content="@php echo $metaData[0]->twitter_img_url @endphp">
        <meta property="og:type" content="@php echo $metaData[0]->page_topic @endphp" />
        <link rel="canonical" href="@php echo $link @endphp" />
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
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}?v={{ time() }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">

    <!-- Google Fonts -->

    @stack('style')

</head>


<body>

    <div class="body-inner">

        <!-- Header start -->
        <header id="header" class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 text-center">
                        <div class="logo"> <a href="{{ route('frontend.index') }}" title="Thewalkers">
                                <img src="{{ asset('assets/images/logo.webp') }}" title="Thewalkers logo"
                                    alt="Thewalkers" style="max-height: 100px">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->

        <!-- Main Nav Start -->
        <div class="utf_main_nav_area clearfix">
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
                                        $head_category = DB::table('blog_category')->orderBy('cat_name', 'asc')->get();
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
