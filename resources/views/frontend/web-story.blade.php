@extends('frontend.main')
@section('main-sec')
    <!-- 1rd Block Wrapper Start -->
    <section class="utf_block_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-3 sidebar utf_sidebar_right">
                    <div class="widget widget-tags">
                        <h3 class="utf_block_title"><span>{{ $category }}</span></h3>
                        <ul class="unstyled clearfix">
                            @if ($category == 'All')
                                <li><a href="{{ route('frontend.webstory') }}" class="cat_active">
                                        All</a></li>
                            @else
                                <li><a href="{{ route('frontend.webstory') }}">
                                        All</a></li>
                            @endif

                            @php
                                $category_data = DB::table('webstories_categories')
                                    ->orderBy('cat_name', 'asc')
                                    ->get();
                            @endphp
                            @if (count($category_data) > 0)
                                @foreach ($category_data as $single_category)
                                    @if ($category == $single_category->cat_name)
                                        <li><a href="{{ route('frontend.webstoryCategory', $single_category->slug) }}"
                                                class="cat_active">
                                                {{ $single_category->cat_name }}</a></li>
                                    @else
                                        <li><a href="{{ route('frontend.webstoryCategory', $single_category->slug) }}">
                                                {{ $single_category->cat_name }}</a></li>
                                    @endif
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
                @if (count($data) > 0)
                    @foreach ($data as $single_data)
                        <div class="col-lg-3">
                            <a href="{{ route('frontend.webstoryView', $single_data->slug) }}" target="blank">
                                <div class="web-story-container">
                                    <div class="web-story-img">
                                        @php
                                            $cover = json_decode($single_data->cover, true);
                                            $cover_img = getMediaUrl($cover[0]['file_id']);
                                        @endphp
                                        <img src="{{ $cover_img['src'] }}" alt="{{ $cover_img['alt'] }}"
                                            title="{{ $cover_img['title'] }}">
                                    </div>
                                    <div class="web-story-title">
                                        <p>{{ $single_data->title }}</p>
                                    </div>
                                </div>

                            </a>
                        </div>
                    @endforeach
                @else
                    <div class="d-flex justify-content-center align-items-center py-5">
                        <h2>No Webstories Found</h2>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <!-- 1rd Block Wrapper End -->
@endsection
