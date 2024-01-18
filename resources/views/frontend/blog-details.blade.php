@extends('frontend.main')
@section('main-sec')

    @push('style')
        <style>
            .widget-tags ul>li {
                float: none;
            }

            .entry-content {
                max-width: 100%;
            }

            .entry-content img {
                max-width: 100%
            }

            a.utf_post_cat {
                padding: 5px 10px;
                height: auto;
                font-size: 15px;
                color: #000;
                font-weight: bold;
            }

            .btn-primary {
                color: #000;
                font-weight: bold;
            }

            @media screen and (max-width:600px) {
                h2 {
                    font-size: 18px;
                    line-height: 26px
                }

                .entry-content h3 {
                    font-size: 16px;
                    line-height: 26px
                }

                p {
                    text-align: justify;
                }
            }

            .form-control {
                color: #000;
            }
        </style>
    @endpush
    <!-- 1rd Block Wrapper Start -->
    <section class="utf_block_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="single-post">

                        <div class="utf_post_title-area"> <a class="utf_post_cat"
                                href="#">{{ getBlogCategoryName($blogData->cat_id) }}</a>
                            <h1 class="utf_post_title"> {{ $blogData->title }}</h1>
                            <div class="utf_post_meta"> <span class="utf_post_date"><i class="fa fa-clock-o"></i>
                                    {{ showDateTime($blogData->created_at) }}</span> </div>
                        </div>
                        @php
                            // media
                            $blogMedia = getMediaUrl($blogData->main_pic);
                        @endphp
                        <div class="utf_post_content-area">
                            <div class="post-media post-featured-image"> <a href="{{ $blogMedia['src'] }}"
                                    class="gallery-popup"><img src="{{ $blogMedia['src'] }}" class="img-fluid"
                                        alt="{{ $blogMedia['alt'] }}" title="{{ $blogMedia['title'] }}"></a> </div>
                            <div class="entry-content">
                                @php
                                    echo html_entity_decode($blogData->blog_content);
                                @endphp
                            </div>



                        </div>
                    </div>

                    <nav class="post-navigation clearfix">
                        @php
                            $next_prev = getNexPrevBlogUrl($blogData->id);
                        @endphp
                        @if ($next_prev['prev'] != 0)
                            <div class="post-previous">
                                <a href="{{ $next_prev['prev'] }}"> <span><i class="fa fa-angle-left"></i>Previous
                                        Post</span>
                                    <h3>{{ $next_prev['prevTitle'] }}</h3>
                                </a>
                            </div>
                        @endif
                        @if ($next_prev['next'] != 0)
                            <div class="post-next">
                                <a href="{{ $next_prev['next'] }}"> <span>Next Post <i class="fa fa-angle-right"></i></span>
                                    <h3>{{ $next_prev['nextTitle'] }}</h3>
                                </a>
                            </div>
                        @endif

                    </nav>


                    @if (!is_null($blogData->related) && $blogData->related != '')
                        <div class="related-posts block">
                            <h3 class="utf_block_title"><span>Related Posts</span></h3>
                            <div id="utf_latest_news_slide" class="owl-carousel owl-theme utf_latest_news_slide">

                                @if ($blogData->related != 'null')
                                    @php
                                        $related_blog = json_decode($blogData->related, true);
                                    @endphp
                                    @foreach ($related_blog as $single_related_blog)
                                        @php
                                            $relatedBlogData = blogData($single_related_blog);

                                        @endphp

                                        @if ($relatedBlogData)
                                            @php
                                                $related_media = getMediaUrl($relatedBlogData->main_pic);
                                            @endphp
                                            <div class="item">
                                                <div class="utf_post_block_style clearfix">
                                                    <div class="utf_post_thumb"> <img class="img-fluid"
                                                            src="{{ $related_media['src'] }}"
                                                            alt="{{ $related_media['alt'] }}"
                                                            title="{{ $related_media['title'] }}" />
                                                    </div>
                                                    <a class="utf_post_cat"
                                                        href="#">{{ getBlogCategoryName($relatedBlogData->cat_id) }}</a>
                                                    <div class="utf_post_content">
                                                        <h2 class="utf_post_title title-medium"> <a
                                                                href="{{ route('frontend.blogDetails', $relatedBlogData->slug) }}">
                                                                {{ $relatedBlogData->title }}</a> </h2>
                                                        <div class="utf_post_meta"> <span class="utf_post_date"><i
                                                                    class="fa fa-clock-o"></i>
                                                                {{ showDateTime($relatedBlogData->created_at) }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif



                            </div>
                        </div>
                    @endif

                    <!-- Post comment start -->
                    <div id="comments" class="comments-area block">
                        <strong class="utf_block_title d-block"><span>Comments</span></strong>
                        @php
                            echo showComments($blogData->id);
                        @endphp
                    </div>
                    <!-- Post comment end -->

                    <!-- Comments Form Start -->
                    <div class="comments-form">
                        <h3 class="title-normal">Leave a comment</h3>
                        <form method="POST"
                            onsubmit="uploadData1('comment-form', '{{ route('frontend.addComment') }}', 'comment-alert','comment-alert-btn', event)"
                            id="comment-form">
                            @csrf
                            <input type="hidden" name="blog_id" value="{{ $blogData->id }}">
                            <div class="row">
                                <div class="col-12" id="comment-alert"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" name="name" placeholder="Name" type="text"
                                            required>
                                        <p class="form-feedback invalid-feedback" data-name="name"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" name="email" placeholder="Email" type="email"
                                            required>
                                        <p class="form-feedback invalid-feedback" data-name="email"></p>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control required-field" name="comment" placeholder="Comment" rows="10" required></textarea>
                                        <p class="form-feedback invalid-feedback" data-name="comment"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix" id="comment-alert-btn">
                                <button class="comments-btn btn btn-primary" type="submit">
                                    Post Comment
                                </button>

                            </div>
                        </form>
                    </div>
                    <!-- Comments form end -->
                </div>

                {{-- <div class="col-lg-4 col-md-12">
                    <div class="sidebar utf_sidebar_right">

                        <div class="widget widget-tags">
                            <strong class="utf_block_title"><span>Category</span></strong>
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
                </div> --}}
            </div>
        </div>
    </section>
    <!-- 1rd Block Wrapper End -->
@endsection
