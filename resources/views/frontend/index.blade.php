@extends('frontend.main')
@section('main-sec')

    @if (!is_null($section1))
        @php
            $section_1_data = json_decode($section1->data, true);
            $sec_1_slider = $section_1_data['blogCheckbox'];
            
            $sliderSectionItem1 = $section_1_data['sliderSectionItem1'];
            $sliderSectionItem2 = $section_1_data['sliderSectionItem2'];
        @endphp
        <section class="utf_featured_post_area pt-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 pad-r">
                        <div id="utf_featured_slider" class="owl-carousel owl-theme utf_featured_slider content-bottom">

                            @foreach ($sec_1_slider as $single_sec_1_slider)
                                {{-- blog data  --}}
                                @php
                                    $sec_1_slider_data = blogData($single_sec_1_slider);
                                @endphp
                                @if ($sec_1_slider_data)
                                    @php
                                        // media
                                        $sec_i_slider_img = getMediaUrl($sec_1_slider_data->main_pic);
                                    @endphp
                                    <div class="item" style="background-image:url({{ $sec_i_slider_img['src'] }})">
                                        <div class="utf_featured_post">
                                            <div class="utf_post_content"> <a class="utf_post_cat"
                                                    href="{{ route('frontend.blogCategory', getBlogCategorySlug($sec_1_slider_data->cat_id)) }}">
                                                    @php
                                                        echo getBlogCategoryName($sec_1_slider_data->cat_id);
                                                    @endphp
                                                </a>
                                                <h2 class="utf_post_title title-extra-large"> <a
                                                        href="{{ route('frontend.blogDetails', $sec_1_slider_data->slug) }}">{{ $sec_1_slider_data->title }}</a>
                                                </h2>

                                                <span class="utf_post_date"><i class="fa fa-clock-o"></i>
                                                    {{ showDateTime($sec_1_slider_data->created_at) }} </span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 pad-l">
                        <div class="row">
                            <div class="col-md-12">
                                @php
                                    $sliderSectionItem1_blog_data = blogData($sliderSectionItem1);
                                    // media file
                                    $sliderSectionItem1_img = getMediaUrl($sliderSectionItem1_blog_data->main_pic);
                                @endphp
                                <div class="utf_post_overaly_style text-center first clearfix">
                                    <div class="utf_post_thumb"> <img class="img-fluid"
                                            src="{{ $sliderSectionItem1_img['src'] }}"
                                            alt="{{ $sliderSectionItem1_img['alt'] }}"
                                            title="{{ $sliderSectionItem1_img['title'] }}" /> </div>
                                    <div class="utf_post_content"> <a class="utf_post_cat"
                                            href="{{ route('frontend.blogCategory', getBlogCategorySlug($sliderSectionItem1_blog_data->cat_id)) }}">{{ getBlogCategoryName($sliderSectionItem1_blog_data->cat_id) }}</a>
                                        <h2 class="utf_post_title title-medium">
                                            <a
                                                href="{{ route('frontend.blogDetails', $sliderSectionItem1_blog_data->slug) }}">{{ $sliderSectionItem1_blog_data->title }}
                                            </a>
                                        </h2>
                                        <div class="utf_post_meta"> <span class="utf_post_date"><i
                                                    class="fa fa-clock-o"></i>
                                                {{ showDateTime($sliderSectionItem1_blog_data->created_at) }}</span> </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                @php
                                    $sliderSectionItem2_blog_data = blogData($sliderSectionItem2);
                                    // media file
                                    $sliderSectionItem2_img = getMediaUrl($sliderSectionItem2_blog_data->main_pic);
                                @endphp
                                <div class="utf_post_overaly_style text-center first clearfix">
                                    <div class="utf_post_thumb"> <img class="img-fluid"
                                            src="{{ $sliderSectionItem2_img['src'] }}"
                                            alt="{{ $sliderSectionItem2_img['alt'] }}"
                                            title="{{ $sliderSectionItem2_img['title'] }}" /> </div>
                                    <div class="utf_post_content"> <a class="utf_post_cat"
                                            href="{{ route('frontend.blogCategory', getBlogCategorySlug($sliderSectionItem2_blog_data->cat_id)) }}">{{ getBlogCategoryName($sliderSectionItem2_blog_data->cat_id) }}</a>
                                        <h2 class="utf_post_title title-medium">
                                            <a
                                                href="{{ route('frontend.blogDetails', $sliderSectionItem2_blog_data->slug) }}">{{ $sliderSectionItem2_blog_data->title }}
                                            </a>
                                        </h2>
                                        <div class="utf_post_meta"> <span class="utf_post_date"><i
                                                    class="fa fa-clock-o"></i>
                                                {{ showDateTime($sliderSectionItem2_blog_data->created_at) }}</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- Feature area end -->


    <section class="web-stories-container">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="utf_block_title"><span>Webstories</span></h3>

                    <div class="webstories-slider owl-carousel owl-theme">
                        @php
                            $webdata = DB::table('webstories')
                                ->limit(15)
                                ->orderBy('id', 'desc')
                                ->get();
                        @endphp
                        @foreach ($webdata as $single_webdata)
                            <div class="item">
                                <div class="web-story-container">

                                    <a href="{{ route('frontend.webstoryView', $single_webdata->slug) }}" target="blank">
                                        <span class="web-story-icon">
                                            <svg width="43.087" height="38.762" viewBox="0 0 43.087 38.762">
                                                <defs>
                                                    <filter id="Rectangle_9411" x="6.921" y="0" width="29.246"
                                                        height="38.762" filterUnits="userSpaceOnUse">
                                                        <feOffset dy="3" input="SourceAlpha"></feOffset>
                                                        <feGaussianBlur stdDeviation="3" result="blur"></feGaussianBlur>
                                                        <feFlood flood-opacity="0.361"></feFlood>
                                                        <feComposite operator="in" in2="blur"></feComposite>
                                                        <feComposite in="SourceGraphic"></feComposite>
                                                    </filter>
                                                    <filter id="Rectangle_9412" x="19.897" y="1.73" width="19.73"
                                                        height="35.302" filterUnits="userSpaceOnUse">
                                                        <feOffset dy="3" input="SourceAlpha"></feOffset>
                                                        <feGaussianBlur stdDeviation="3" result="blur-2"></feGaussianBlur>
                                                        <feFlood flood-opacity="0.161"></feFlood>
                                                        <feComposite operator="in" in2="blur-2"></feComposite>
                                                        <feComposite in="SourceGraphic"></feComposite>
                                                    </filter>
                                                    <filter id="Rectangle_9413" x="3.46" y="1.73" width="19.73"
                                                        height="35.302" filterUnits="userSpaceOnUse">
                                                        <feOffset dy="3" input="SourceAlpha"></feOffset>
                                                        <feGaussianBlur stdDeviation="3" result="blur-3"></feGaussianBlur>
                                                        <feFlood flood-opacity="0.161"></feFlood>
                                                        <feComposite operator="in" in2="blur-3"></feComposite>
                                                        <feComposite in="SourceGraphic"></feComposite>
                                                    </filter>
                                                    <filter id="Rectangle_9414" x="0" y="3.46"
                                                        width="19.73" height="30.976" filterUnits="userSpaceOnUse">
                                                        <feOffset dy="3" input="SourceAlpha"></feOffset>
                                                        <feGaussianBlur stdDeviation="3" result="blur-4"></feGaussianBlur>
                                                        <feFlood flood-opacity="0.161"></feFlood>
                                                        <feComposite operator="in" in2="blur-4"></feComposite>
                                                        <feComposite in="SourceGraphic"></feComposite>
                                                    </filter>
                                                    <filter id="Rectangle_9415" x="23.357" y="3.46"
                                                        width="19.73" height="30.976" filterUnits="userSpaceOnUse">
                                                        <feOffset dy="3" input="SourceAlpha"></feOffset>
                                                        <feGaussianBlur stdDeviation="3" result="blur-5"></feGaussianBlur>
                                                        <feFlood flood-opacity="0.161"></feFlood>
                                                        <feComposite operator="in" in2="blur-5"></feComposite>
                                                        <feComposite in="SourceGraphic"></feComposite>
                                                    </filter>
                                                </defs>
                                                <g id="Group_5176" data-name="Group 5176" transform="translate(9 6)">
                                                    <g transform="matrix(1, 0, 0, 1, -9, -6)"
                                                        filter="url(#Rectangle_9411)">
                                                        <rect id="Rectangle_9411-2" data-name="Rectangle 9411"
                                                            width="11.246" height="20.762" transform="translate(15.92 6)"
                                                            fill="#fff">
                                                        </rect>
                                                    </g>
                                                    <g transform="matrix(1, 0, 0, 1, -9, -6)"
                                                        filter="url(#Rectangle_9412)">
                                                        <rect id="Rectangle_9412-2" data-name="Rectangle 9412"
                                                            width="1.73" height="17.302"
                                                            transform="translate(28.9 7.73)" fill="#fff">
                                                        </rect>
                                                    </g>
                                                    <g transform="matrix(1, 0, 0, 1, -9, -6)"
                                                        filter="url(#Rectangle_9413)">
                                                        <rect id="Rectangle_9413-2" data-name="Rectangle 9413"
                                                            width="1.73" height="17.302"
                                                            transform="translate(12.46 7.73)" fill="#fff">
                                                        </rect>
                                                    </g>
                                                    <g transform="matrix(1, 0, 0, 1, -9, -6)"
                                                        filter="url(#Rectangle_9414)">
                                                        <rect id="Rectangle_9414-2" data-name="Rectangle 9414"
                                                            width="1.73" height="12.976" transform="translate(9 9.46)"
                                                            fill="#fff">
                                                        </rect>
                                                    </g>
                                                    <g transform="matrix(1, 0, 0, 1, -9, -6)"
                                                        filter="url(#Rectangle_9415)">
                                                        <rect id="Rectangle_9415-2" data-name="Rectangle 9415"
                                                            width="1.73" height="12.976"
                                                            transform="translate(32.36 9.46)" fill="#fff">
                                                        </rect>
                                                    </g>
                                                </g>
                                            </svg>
                                        </span>
                                        <div class="web-story-img">
                                            @php
                                                $cover = json_decode($single_webdata->cover, true);
                                                $cover_img = getMediaUrl($cover[0]['file_id']);
                                            @endphp
                                            <img src="{{ $cover_img['src'] }}" alt="{{ $cover_img['alt'] }}"
                                                title="{{ $cover_img['title'] }}">
                                        </div>
                                        <div class="web-story-title">
                                            <p>{{ $single_webdata->title }}</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </section>


    <!-- 1rd Block Wrapper Start -->
    @if (!is_null($section2))
        <section class="utf_block_wrapper pb-top-0">
            <div class="container">
                <div class="row">

                    @php
                        $section2_data = json_decode($section2->data, true);
                        $section2_category1 = $section2_data['category1'];
                        $section2_category2 = $section2_data['category2'];
                        $section2_category3 = $section2_data['category3'];
                    @endphp

                    {{-- column 1  --}}
                    <div class="col-lg-4 col-md-12">
                        @php
                            $section2_category1_data = blogCategoryData($section2_category1);
                        @endphp

                        @if ($section2_category1_data)
                            @php
                                $section2_category1_blog_data = blogDataUsingCategory($section2_category1_data->cat_id);
                            @endphp
                            @if ($section2_category1_blog_data)
                                <div class="block color-dark-blue">

                                    <h3 class="utf_block_title"><span> {{ $section2_category1_data->cat_name }} </span>
                                    </h3>
                                    {{-- first blog  --}}

                                    {{-- first media  --}}
                                    @php
                                        $section2_category1_blog_data_first_media = getMediaUrl($section2_category1_blog_data[0]->main_pic);
                                    @endphp
                                    <div class="utf_post_overaly_style clearfix">
                                        <div class="utf_post_thumb"> <img class="img-fluid"
                                                src="{{ $section2_category1_blog_data_first_media['src'] }}"
                                                alt="{{ $section2_category1_blog_data_first_media['alt'] }}"
                                                title="{{ $section2_category1_blog_data_first_media['title'] }}" />

                                        </div>
                                        <div class="utf_post_content">
                                            <h2 class="utf_post_title"> <a
                                                    href="{{ route('frontend.blogDetails', $section2_category1_blog_data[0]->slug) }}">
                                                    {{ $section2_category1_blog_data[0]->title }}</a>
                                            </h2>
                                            <div class="utf_post_meta"> <span class="utf_post_date"><i
                                                        class="fa fa-clock-o"></i>
                                                    {{ showDateTime($section2_category1_blog_data[0]->created_at) }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="utf_list_post_block">
                                        <ul class="utf_list_post">
                                            @for ($i = 1; $i < count($section2_category1_blog_data); $i++)
                                                @php
                                                    // media
                                                    $section2_category1_blog_data_list_media = getMediaUrl($section2_category1_blog_data[$i]->main_pic);
                                                @endphp
                                                <li class="clearfix">
                                                    <div class="utf_post_block_style post-float clearfix">
                                                        <div class="utf_post_thumb"> <img class="img-fluid"
                                                                src="{{ $section2_category1_blog_data_list_media['src'] }}"
                                                                alt="{{ $section2_category1_blog_data_list_media['alt'] }}"
                                                                title="{{ $section2_category1_blog_data_list_media['title'] }}" />
                                                        </div>
                                                        <div class="utf_post_content">
                                                            <h2 class="utf_post_title title-small"> <a
                                                                    href="{{ route('frontend.blogDetails', $section2_category1_blog_data[$i]->slug) }}">
                                                                    {{ $section2_category1_blog_data[$i]->title }} </a>
                                                            </h2>
                                                            <div class="utf_post_meta">
                                                                <span class="utf_post_date"><i class="fa fa-clock-o"></i>
                                                                    {{ showDateTime($section2_category1_blog_data[$i]->created_at) }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endfor


                                        </ul>
                                    </div>
                                </div>
                            @endif
                        @endif
                    </div>

                    {{-- column 2  --}}
                    <div class="col-lg-4 col-md-12">
                        @php
                            $section2_category2_data = blogCategoryData($section2_category2);
                        @endphp

                        @if ($section2_category2_data)
                            @php
                                $section2_category2_blog_data = blogDataUsingCategory($section2_category2_data->cat_id);
                            @endphp
                            @if ($section2_category2_blog_data)
                                <div class="block color-aqua">

                                    <h3 class="utf_block_title"><span> {{ $section2_category2_data->cat_name }} </span>
                                    </h3>
                                    {{-- first blog  --}}

                                    {{-- first media  --}}
                                    @php
                                        $section2_category2_blog_data_first_media = getMediaUrl($section2_category2_blog_data[0]->main_pic);
                                    @endphp
                                    <div class="utf_post_overaly_style clearfix">
                                        <div class="utf_post_thumb"> <img class="img-fluid"
                                                src="{{ $section2_category2_blog_data_first_media['src'] }}"
                                                alt="{{ $section2_category2_blog_data_first_media['alt'] }}"
                                                title="{{ $section2_category2_blog_data_first_media['title'] }}" />

                                        </div>
                                        <div class="utf_post_content">
                                            <h2 class="utf_post_title"> <a
                                                    href="{{ route('frontend.blogDetails', $section2_category2_blog_data[0]->slug) }}">
                                                    {{ $section2_category2_blog_data[0]->title }}</a>
                                            </h2>
                                            <div class="utf_post_meta"> <span class="utf_post_date"><i
                                                        class="fa fa-clock-o"></i>
                                                    {{ showDateTime($section2_category2_blog_data[0]->created_at) }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="utf_list_post_block">
                                        <ul class="utf_list_post">
                                            @for ($i = 1; $i < count($section2_category2_blog_data); $i++)
                                                @php
                                                    // media
                                                    $section2_category2_blog_data_list_media = getMediaUrl($section2_category2_blog_data[$i]->main_pic);
                                                @endphp
                                                <li class="clearfix">
                                                    <div class="utf_post_block_style post-float clearfix">
                                                        <div class="utf_post_thumb"> <img class="img-fluid"
                                                                src="{{ $section2_category2_blog_data_list_media['src'] }}"
                                                                alt="{{ $section2_category2_blog_data_list_media['alt'] }}"
                                                                title="{{ $section2_category2_blog_data_list_media['title'] }}" />
                                                        </div>
                                                        <div class="utf_post_content">
                                                            <h2 class="utf_post_title title-small"> <a
                                                                    href="{{ route('frontend.blogDetails', $section2_category2_blog_data[$i]->slug) }}">
                                                                    {{ $section2_category2_blog_data[$i]->title }} </a>
                                                            </h2>
                                                            <div class="utf_post_meta">
                                                                <span class="utf_post_date"><i class="fa fa-clock-o"></i>
                                                                    {{ showDateTime($section2_category2_blog_data[$i]->created_at) }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endfor


                                        </ul>
                                    </div>
                                </div>
                            @endif
                        @endif
                    </div>

                    {{-- column 3  --}}

                    <div class="col-lg-4 col-md-12">
                        @php
                            $section2_category3_data = blogCategoryData($section2_category3);
                        @endphp

                        @if ($section2_category3_data)
                            @php
                                $section2_category3_blog_data = blogDataUsingCategory($section2_category3_data->cat_id);
                            @endphp
                            @if ($section2_category3_blog_data)
                                <div class="block color-violet">

                                    <h3 class="utf_block_title"><span> {{ $section2_category3_data->cat_name }} </span>
                                    </h3>
                                    {{-- first blog  --}}

                                    {{-- first media  --}}
                                    @php
                                        $section2_category3_blog_data_first_media = getMediaUrl($section2_category3_blog_data[0]->main_pic);
                                    @endphp
                                    <div class="utf_post_overaly_style clearfix">
                                        <div class="utf_post_thumb"> <img class="img-fluid"
                                                src="{{ $section2_category3_blog_data_first_media['src'] }}"
                                                alt="{{ $section2_category3_blog_data_first_media['alt'] }}"
                                                title="{{ $section2_category3_blog_data_first_media['title'] }}" />

                                        </div>
                                        <div class="utf_post_content">
                                            <h2 class="utf_post_title"> <a
                                                    href="{{ route('frontend.blogDetails', $section2_category3_blog_data[0]->slug) }}">
                                                    {{ $section2_category3_blog_data[0]->title }}</a>
                                            </h2>
                                            <div class="utf_post_meta"> <span class="utf_post_date"><i
                                                        class="fa fa-clock-o"></i>
                                                    {{ showDateTime($section2_category3_blog_data[0]->created_at) }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="utf_list_post_block">
                                        <ul class="utf_list_post">
                                            @for ($i = 1; $i < count($section2_category3_blog_data); $i++)
                                                @php
                                                    // media
                                                    $section2_category3_blog_data_list_media = getMediaUrl($section2_category3_blog_data[$i]->main_pic);
                                                @endphp
                                                <li class="clearfix">
                                                    <div class="utf_post_block_style post-float clearfix">
                                                        <div class="utf_post_thumb"> <img class="img-fluid"
                                                                src="{{ $section2_category3_blog_data_list_media['src'] }}"
                                                                alt="{{ $section2_category3_blog_data_list_media['alt'] }}"
                                                                title="{{ $section2_category3_blog_data_list_media['title'] }}" />
                                                        </div>
                                                        <div class="utf_post_content">
                                                            <h2 class="utf_post_title title-small"> <a
                                                                    href="{{ route('frontend.blogDetails', $section2_category3_blog_data[$i]->slug) }}">
                                                                    {{ $section2_category3_blog_data[$i]->title }} </a>
                                                            </h2>
                                                            <div class="utf_post_meta">
                                                                <span class="utf_post_date"><i class="fa fa-clock-o"></i>
                                                                    {{ showDateTime($section2_category3_blog_data[$i]->created_at) }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endfor


                                        </ul>
                                    </div>
                                </div>
                            @endif
                        @endif
                    </div>

                </div>
            </div>
        </section>
    @endif
    <!-- 1rd Block Wrapper End -->




    <!-- 2rd Block Wrapper Start -->
    @if (!is_null($section3))
        <section class="utf_block_wrapper solid-bg">
            <div class="container">
                <div class="row">

                    @php
                        $section3_data = json_decode($section3->data, true);
                        $section3_blog_1_data = blogData($section3_data['blog1']);
                        $section3_blog_2_data = blogData($section3_data['blog2']);
                        $section3_blog_3_data = blogData($section3_data['blog3']);
                    @endphp

                    {{-- blog 1 --}}
                    {{-- media  --}}
                    @php
                        $section3_blog_1_data_img = getMediaUrl($section3_blog_1_data->main_pic);
                    @endphp
                    <div class="col-md-4">
                        <div class="utf_post_overaly_style text-center first clearfix mb-3 mb-md-0">
                            <div class="utf_post_thumb"> <img class="img-fluid"
                                    src="{{ $section3_blog_1_data_img['src'] }}"
                                    alt="{{ $section3_blog_1_data_img['alt'] }}"
                                    title="{{ $section3_blog_1_data_img['title'] }}" />
                            </div>
                            <div class="utf_post_content"> <a class="utf_post_cat"
                                    href="{{ route('frontend.blogCategory', getBlogCategorySlug($section3_blog_1_data->cat_id)) }}">{{ getBlogCategoryName($section3_blog_1_data->cat_id) }}</a>
                                <h2 class="utf_post_title"> <a
                                        href="{{ route('frontend.blogDetails', $section3_blog_1_data->slug) }}">{{ $section3_blog_1_data->title }}</a>
                                </h2>
                                <div class="utf_post_meta"> <span class="utf_post_date"><i class="fa fa-clock-o"></i>
                                        {{ showDateTime($section3_blog_1_data->created_at) }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- blog 2 --}}
                    {{-- media  --}}
                    @php
                        $section3_blog_3_data_img = getMediaUrl($section3_blog_3_data->main_pic);
                    @endphp
                    <div class="col-md-4">
                        <div class="utf_post_overaly_style text-center first clearfix mb-3 mb-md-0">
                            <div class="utf_post_thumb"> <img class="img-fluid"
                                    src="{{ $section3_blog_3_data_img['src'] }}"
                                    alt="{{ $section3_blog_3_data_img['alt'] }}"
                                    title="{{ $section3_blog_3_data_img['title'] }}" />
                            </div>
                            <div class="utf_post_content"> <a class="utf_post_cat"
                                    href="{{ route('frontend.blogCategory', getBlogCategorySlug($section3_blog_3_data->cat_id)) }}">{{ getBlogCategoryName($section3_blog_3_data->cat_id) }}</a>
                                <h2 class="utf_post_title"> <a
                                        href="{{ route('frontend.blogDetails', $section3_blog_3_data->slug) }}">{{ $section3_blog_3_data->title }}</a>
                                </h2>
                                <div class="utf_post_meta"> <span class="utf_post_date"><i class="fa fa-clock-o"></i>
                                        {{ showDateTime($section3_blog_3_data->created_at) }}</span>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{-- blog 3 --}}
                    {{-- media  --}}
                    @php
                        $section3_blog_3_data_img = getMediaUrl($section3_blog_3_data->main_pic);
                    @endphp
                    <div class="col-md-4">
                        <div class="utf_post_overaly_style text-center first clearfix mb-3 mb-md-0">
                            <div class="utf_post_thumb"> <img class="img-fluid"
                                    src="{{ $section3_blog_3_data_img['src'] }}"
                                    alt="{{ $section3_blog_3_data_img['alt'] }}"
                                    title="{{ $section3_blog_3_data_img['title'] }}" />
                            </div>
                            <div class="utf_post_content"> <a class="utf_post_cat"
                                    href="{{ route('frontend.blogCategory', getBlogCategorySlug($section3_blog_3_data->cat_id)) }}">{{ getBlogCategoryName($section3_blog_3_data->cat_id) }}</a>
                                <h2 class="utf_post_title"> <a
                                        href="{{ route('frontend.blogDetails', $section3_blog_3_data->slug) }}">{{ $section3_blog_3_data->title }}</a>
                                </h2>
                                <div class="utf_post_meta"> <span class="utf_post_date"><i class="fa fa-clock-o"></i>
                                        {{ showDateTime($section3_blog_3_data->created_at) }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    @endif

    <!-- 2rd Block Wrapper End -->


    <!-- 3rd Block Wrapper Start -->


    <section class="utf_block_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="utf_more_news block color-default">
                        <h3 class="utf_block_title"><span>View More News</span></h3>

                        @if (!is_null($section4))
                            <div id="utf_more_news_slide" class="owl-carousel owl-theme utf_more_news_slide">

                                @php
                                    $section4_data = json_decode($section4->data, true);
                                    $section4_blog_list_data = $section4_data['blogCheckbox'];
                                @endphp

                                <div class="item">

                                    @foreach ($section4_blog_list_data as $section4_key => $section4_single_data)
                                        @if ($section4_key % 4 == 0 && $section4_key != 0)
                                </div>
                                <div class="item">
                                @elseif($section4_key == count($section4_blog_list_data) - 1)
                        @endif

                        @php
                            $section4_blog_data = blogData($section4_single_data);
                            // media
                            $section4_blog_data_img = getMediaUrl($section4_blog_data->main_pic);
                        @endphp

                        <div class="utf_post_block_style utf_post_float_half clearfix">
                            <div class="utf_post_thumb"> <img class="img-fluid"
                                    src="{{ $section4_blog_data_img['src'] }}"
                                    alt="{{ $section4_blog_data_img['alt'] }}"
                                    title="{{ $section4_blog_data_img['title'] }}" />
                            </div>
                            <a class="utf_post_cat"
                                href="{{ route('frontend.blogCategory', getBlogCategorySlug($section4_blog_data->cat_id)) }}">{{ getBlogCategoryName($section4_blog_data->cat_id) }}</a>
                            <div class="utf_post_content">
                                <h2 class="utf_post_title"> <a
                                        href="{{ route('frontend.blogDetails', $section4_blog_data->slug) }}">
                                        {{ $section4_blog_data->title }}</a> </h2>
                                <div class="utf_post_meta">
                                    <span class="utf_post_date"><i class="fa fa-clock-o"></i>
                                        {{ showDateTime($section4_blog_data->created_at) }}</span>
                                </div>
                                <p>{{ $section4_blog_data->short_des }}</p>
                            </div>
                        </div>
                        @endforeach

                    </div>

                </div>
                @endif

            </div>
        </div>

        <div class="col-lg-4 col-md-12">

            @if (!is_null($section5))
                <div class="sidebar utf_sidebar_right">
                    <div class="widget color-default">
                        <h3 class="utf_block_title"><span>Popular News</span></h3>


                        @php
                            $section5_data = json_decode($section5->data, true);
                            $section5_blog_list = $section5_data['blogCheckbox'];
                        @endphp
                        @foreach ($section5_blog_list as $section5_key => $section5_single_blog_list)
                            @if ($section5_key == 0)
                                @php
                                    $section5_single_blog_data = blogData($section5_single_blog_list);
                                    // media
                                    $section5_single_blog_media = getMediaUrl($section5_single_blog_data->main_pic);
                                @endphp
                                <div class="utf_post_overaly_style clearfix">
                                    <div class="utf_post_thumb"> <img class="img-fluid"
                                            src="{{ $section5_single_blog_media['src'] }}"
                                            alt="{{ $section5_single_blog_media['alt'] }}"
                                            title="{{ $section5_single_blog_media['title'] }}" />

                                    </div>
                                    <div class="utf_post_content"> <a class="utf_post_cat"
                                            href="{{ route('frontend.blogCategory', getBlogCategorySlug($section5_single_blog_data->cat_id)) }}">{{ getBlogCategoryName($section5_single_blog_data->cat_id) }}</a>
                                        <h2 class="utf_post_title"> <a
                                                href="{{ route('frontend.blogDetails', $section5_single_blog_data->slug) }}">
                                                {{ $section5_single_blog_data->title }}</a>
                                        </h2>
                                        <div class="utf_post_meta"> <span class="utf_post_date"><i
                                                    class="fa fa-clock-o"></i>
                                                {{ showDateTime($section5_single_blog_data->created_at) }}</span> </div>
                                    </div>
                                </div>
                            @endif
                        @break
                    @endforeach


                    <div class="utf_list_post_block">
                        <ul class="utf_list_post">

                            @foreach ($section5_blog_list as $section5_key => $section5_single_blog_list)
                                @if ($section5_key != 0)
                                    @php
                                        $section5_single_blog_data = blogData($section5_single_blog_list);
                                        // media
                                        $section5_single_blog_media = getMediaUrl($section5_single_blog_data->main_pic);
                                    @endphp
                                    <li class="clearfix">
                                        <div class="utf_post_block_style post-float clearfix">
                                            <div class="utf_post_thumb"> <img class="img-fluid"
                                                    src="{{ $section5_single_blog_media['src'] }}"
                                                    alt="{{ $section5_single_blog_media['alt'] }}"
                                                    title="{{ $section5_single_blog_media['title'] }}" /> <a
                                                    class="utf_post_cat"
                                                    href="{{ route('frontend.blogCategory', getBlogCategorySlug($section5_single_blog_data->cat_id)) }}">{{ $section5_single_blog_data->cat_id }}</a>
                                            </div>
                                            <div class="utf_post_content">
                                                <h2 class="utf_post_title title-small"> <a
                                                        href="{{ route('frontend.blogDetails', $section5_single_blog_data->slug) }}">{{ $section5_single_blog_data->title }}</a>
                                                </h2>
                                                <div class="utf_post_meta">
                                                    <span class="utf_post_date"><i class="fa fa-clock-o"></i>
                                                        {{ showDateTime($section5_single_blog_data->created_at) }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif

    </div>

</section>
<!-- 3rd Block Wrapper End -->
@endsection
