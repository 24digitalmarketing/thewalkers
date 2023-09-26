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
                        <div class="col-lg-3 mb-3">
                            <a href="{{ route('frontend.webstoryView', $single_data->slug) }}" target="blank">
                                <div class="web-story-container">
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
                                                <filter id="Rectangle_9414" x="0" y="3.46" width="19.73"
                                                    height="30.976" filterUnits="userSpaceOnUse">
                                                    <feOffset dy="3" input="SourceAlpha"></feOffset>
                                                    <feGaussianBlur stdDeviation="3" result="blur-4"></feGaussianBlur>
                                                    <feFlood flood-opacity="0.161"></feFlood>
                                                    <feComposite operator="in" in2="blur-4"></feComposite>
                                                    <feComposite in="SourceGraphic"></feComposite>
                                                </filter>
                                                <filter id="Rectangle_9415" x="23.357" y="3.46" width="19.73"
                                                    height="30.976" filterUnits="userSpaceOnUse">
                                                    <feOffset dy="3" input="SourceAlpha"></feOffset>
                                                    <feGaussianBlur stdDeviation="3" result="blur-5"></feGaussianBlur>
                                                    <feFlood flood-opacity="0.161"></feFlood>
                                                    <feComposite operator="in" in2="blur-5"></feComposite>
                                                    <feComposite in="SourceGraphic"></feComposite>
                                                </filter>
                                            </defs>
                                            <g id="Group_5176" data-name="Group 5176" transform="translate(9 6)">
                                                <g transform="matrix(1, 0, 0, 1, -9, -6)" filter="url(#Rectangle_9411)">
                                                    <rect id="Rectangle_9411-2" data-name="Rectangle 9411" width="11.246"
                                                        height="20.762" transform="translate(15.92 6)" fill="#fff">
                                                    </rect>
                                                </g>
                                                <g transform="matrix(1, 0, 0, 1, -9, -6)" filter="url(#Rectangle_9412)">
                                                    <rect id="Rectangle_9412-2" data-name="Rectangle 9412" width="1.73"
                                                        height="17.302" transform="translate(28.9 7.73)" fill="#fff">
                                                    </rect>
                                                </g>
                                                <g transform="matrix(1, 0, 0, 1, -9, -6)" filter="url(#Rectangle_9413)">
                                                    <rect id="Rectangle_9413-2" data-name="Rectangle 9413" width="1.73"
                                                        height="17.302" transform="translate(12.46 7.73)" fill="#fff">
                                                    </rect>
                                                </g>
                                                <g transform="matrix(1, 0, 0, 1, -9, -6)" filter="url(#Rectangle_9414)">
                                                    <rect id="Rectangle_9414-2" data-name="Rectangle 9414" width="1.73"
                                                        height="12.976" transform="translate(9 9.46)" fill="#fff">
                                                    </rect>
                                                </g>
                                                <g transform="matrix(1, 0, 0, 1, -9, -6)" filter="url(#Rectangle_9415)">
                                                    <rect id="Rectangle_9415-2" data-name="Rectangle 9415" width="1.73"
                                                        height="12.976" transform="translate(32.36 9.46)" fill="#fff">
                                                    </rect>
                                                </g>
                                            </g>
                                        </svg>
                                    </span>
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
