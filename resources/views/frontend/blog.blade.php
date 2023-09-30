@extends('frontend.main')
@section('main-sec')

    @push('style')
        <style>
            .widget-tags ul>li {
                float: none;
            }
        </style>
    @endpush
    <!-- 1rd Block Wrapper Start -->
    <section class="utf_block_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="block category-listing">

                        <div class="row">

                            @if (count($blogData) > 0)
                                <div class="col-12">
                                    <h3 class="utf_block_title"><span>{{ getBlogCategoryName($blogData[0]->cat_id) }}</span>
                                    </h3>
                                </div>
                                @foreach ($blogData as $single_blog)
                                    @php
                                        // media
                                        $blog_img = getMediaUrl($single_blog->main_pic);
                                    @endphp
                                    <div class="col-md-6">
                                        <div class="utf_post_block_style post-grid clearfix">
                                            <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                        src="{{ $blog_img['src'] }}" alt="{{ $blog_img['alt'] }}"
                                                        title="{{ $blog_img['title'] }}" /> </a>
                                            </div>
                                            <a class="utf_post_cat"
                                                href="{{ route('frontend.blogCategory', getBlogCategorySlug($single_blog->cat_id)) }}">{{ getBlogCategoryName($single_blog->cat_id) }}</a>
                                            <div class="utf_post_content">
                                                <h2 class="utf_post_title title-large"> <a
                                                        href="{{ route('frontend.blogDetails', $single_blog->slug) }}">{{ $single_blog->title }}</a>
                                                </h2>
                                                <div class="utf_post_meta"> <span class="utf_post_date"><i
                                                            class="fa fa-clock-o"></i>
                                                        {{ showDateTime($single_blog->created_at) }}</span> </div>
                                                <p> {{ $single_blog->short_des }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="d-flex justify-content-center align-items-center py-5 w-100">
                                    <strong style="font-size: 20px">Not Found</strong>
                                </div>
                            @endif

                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="sidebar utf_sidebar_right">


                        <div class="widget widget-tags">
                            <h3 class="utf_block_title"><span>Category</span></h3>
                            <ul class="unstyled clearfix">
                                @php
                                    $category = DB::table('blog_category')
                                        ->orderBy('cat_name', 'asc')
                                        ->get();
                                @endphp
                                @if (count($category) > 0)
                                    @foreach ($category as $single_category)
                                        <li><a href="{{ route('frontend.blogCategory', $single_category->slug) }}">
                                                {{ $single_category->cat_name }}</a></li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                        <div class="widget color-default">
                            <h3 class="utf_block_title"><span>Popular News</span></h3>
                            <div class="utf_list_post_block">
                                <ul class="utf_list_post">

                                    @if (count($popularBlogData) > 0)
                                        @foreach ($popularBlogData as $single_popular)
                                            @php
                                                // media
                                                $popular_media = getMediaUrl($single_popular->main_pic);
                                            @endphp
                                            <li class="clearfix">
                                                <div class="utf_post_block_style post-float clearfix">
                                                    <div class="utf_post_thumb"> <img class="img-fluid"
                                                            src="{{ $popular_media['src'] }}"
                                                            alt="{{ $popular_media['alt'] }}"
                                                            title="{{ $popular_media['title'] }}" />
                                                        <a class="utf_post_cat"
                                                            href="#">{{ getBlogCategoryName($single_popular->cat_id) }}</a>
                                                    </div>
                                                    <div class="utf_post_content">
                                                        <h2 class="utf_post_title title-small"> <a
                                                                href="{{ route('frontend.blogDetails', $single_popular->slug) }}">{{ $single_popular->title }}</a>
                                                        </h2>
                                                        <div class="utf_post_meta">
                                                            <span class="utf_post_date"><i
                                                                    class="fa fa-clock-o"></i>{{ showDateTime($single_popular->created_at) }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    @endif

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 1rd Block Wrapper End -->
@endsection
