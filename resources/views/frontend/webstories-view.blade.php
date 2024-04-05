@php
    $title = $data->title;
    $cover = json_decode($data->cover, true);
    $cover_img = getMediaUrl($cover[0]['file_id']);
    $media = json_decode($data->media, true);
    $web_link = $data->link;
    $id = $data->id;

@endphp

<!doctype html>
<html ⚡>

<head>
    <meta charset="utf-8">
    <link rel="canonical" href="{{ route('frontend.webstoryView', $data->slug) }}">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

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
        <title>@php echo  $metaData[0]->title @endphp</title>
        <meta name="keywords" content="@php echo  $metaData[0]->keywords @endphp">
        <meta name="description" content="@php echo  $metaData[0]->description @endphp">
        <meta property="og:title" content="@php echo  $metaData[0]->og_title @endphp" />
        <meta property="og:description" content="@php echo  $metaData[0]->og_description @endphp" />
        <meta property="og:url" content="@php echo  $metaData[0]->og_url @endphp" />
        <meta property="og:image" content="@php echo  $metaData[0]->og_image_url @endphp">
        <meta name="twitter:title" content="@php echo  $metaData[0]->twitter_title @endphp">
        <meta name="twitter:description" content="@php echo  $metaData[0]->twitter_des @endphp">
        <meta name="twitter:image" content="@php echo  $metaData[0]->twitter_img_url @endphp">
        <meta property="og:type" content="@php echo  $metaData[0]->page_topic @endphp" />
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
    <meta name="classification" content="Online Betting" />
    <meta name="distribution" content="Global" />
    <meta name="copyright" content="Copyright 2023 thewalkers.org - All Rights Reserved" />

    <meta name='fb:page_id' content=''>
    <meta name="twitter:card" content="summery_large_image" />
    <meta name="twitter:site" content="" />
    <meta name="twitter:creator" content="" />

    <meta name="author" content="thewalkers.org">
    <meta name="publisher" content="thewalkers.org">

    {{-- ------- Dynamic Meta End ------------  --}}




    <style amp-boilerplate>
        body {
            -webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            -moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            -ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            animation: -amp-start 8s steps(1, end) 0s 1 normal both
        }

        @-webkit-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @-moz-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @-ms-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @-o-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }
    </style><noscript>
        <style amp-boilerplate>
            body {
                -webkit-animation: none;
                -moz-animation: none;
                -ms-animation: none;
                animation: none
            }
        </style>
    </noscript>
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-element="amp-video" src="https://cdn.ampproject.org/v0/amp-video-0.1.js"></script>
    <script async custom-element="amp-story" src="https://cdn.ampproject.org/v0/amp-story-1.0.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400" rel="stylesheet">
    <style amp-custom>
        amp-story-page {
            background-color: #000;
        }

        amp-story {
            font-family: 'Oswald', sans-serif;

        }


        .next-story-btn {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1000000;
            text-align: center;
        }

        .next-story-btn .next-story {
            text-decoration: none;
            padding: 8px 20px;
            font-size: 14px;
            background-color: #fff;
            border-radius: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: black
        }

        .next-story-btn .next-story img {
            height: 20px;
            margin-right: 5px
        }

        .next-story-btn .next-story:hover {
            background-color: #ff0000
        }


        .read-more {
            color: #fff;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: 30px;
            z-index: 1;
            text-decoration: none;
            padding: 5px 25px 8px 25px;
            border-radius: 20px;
            background-color: black;
            display: block;
        }

        .read-more:hover {
            background-color: #ff0000
        }
    </style>
</head>

<body>

    <!-- Cover page -->
    <amp-story standalone title="{{ $title }}" publisher="Thewalkers"
        publisher-logo-src="{{ asset('assets/amp/AMP-Brand-White-Icon.svg') }}"
        poster-portrait-src="{{ $cover_img['src'] }}">
        @foreach ($media as $key => $single_media)
            @php
                $media_img = getMediaUrl($single_media['file_id']);

            @endphp
            <amp-story-page auto-advance-after="10s" id="page{{ $key }}">
                <amp-story-grid-layer template="fill">
                    <amp-img src="{{ $media_img['src'] }}" width="720" height="1280">
                    </amp-img>
                </amp-story-grid-layer>

                @php

                    // next story
                    $next_story = DB::table('webstories')->where('id', '>', $id)->limit(1)->get();

                @endphp
                @if (!is_null($web_link) && $web_link != '')
                    <amp-story-page-outlink layout="nodisplay">
                        <a href="{{ $web_link }}" title="Know More">Know
                            More</a>
                    </amp-story-page-outlink>
                @endif
                {{-- @if ($key == count($media) - 1)
                    @if (count($next_story) > 0)
                        <amp-story-page-outlink layout="nodisplay">
                            <a href="{{ route('frontend.webstoryView', $next_story[0]->slug) }}" title="Next Story">Next
                                Story</a>
                        </amp-story-page-outlink>
                    @endif
                @else
                    @if (!is_null($link) && $link != '')
                        <amp-story-page-outlink layout="nodisplay">
                            <a href="{{ $link }}" title="Know More">Know
                                More</a>
                        </amp-story-page-outlink>
                    @endif
                @endif --}}
            </amp-story-page>
        @endforeach
    </amp-story>
</body>

</html>
