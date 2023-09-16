@extends('admin.main')
@push('title')
    <title>Home Page</title>
@endpush

@section('main-section')
    <div class="page-wrapper">
        <div class="page-content">

            <div class="card p-0">
                <div class="card-body p-0">
                    <div class="page-breadcrumb d-none d-sm-flex align-items-center border px-3 pt-2 pb-2 bg-light ">
                        <div class="breadcrumb-title pe-3">Home </div>
                        <div class="ps-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.indexView') }}"><i
                                                class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Home Page</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            @php
                $blogData = DB::table('blogs')
                    ->where('status', '=', 'published')
                    ->orderBy('title', 'asc')
                    ->get();
            @endphp

            <div class="container">
                <div class="row">
                    <div class="col-12 p-0 mt-4">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h6 class="text-primary" style="font-size: 16px">Section 1</h6>
                            </div>
                            <div class="card-body">

                                <form method="POST" id="section-form-1"
                                    onsubmit="uploadData1('section-form-1','{{ route('admin.homePageSave') }}', 'section-alert-1', 'section-btn-box-1', event)"
                                    class="mx-3 p-3" enctype="multipart/form-data">
                                    @csrf
                                    <div id="section-alert-1"></div>
                                    <div class="row">
                                        <input type="hidden" name="section" value="section-1">
                                        <input type="hidden" name="section_name" value="slider">




                                        <div class="col-12 mb-3 d-flex justify-content-center">
                                            <img src="{{ asset('assets/images/section-1.webp') }}" style="max-width: 550px">
                                        </div>
                                        @php
                                            $section1 = DB::table('home')
                                                ->where('section', '=', 'section-1')
                                                ->first();
                                        @endphp
                                        @if (!is_null($section1))
                                            @php
                                                $section_1_data = json_decode($section1->data, true);
                                            @endphp
                                            <div class="col-6 mb-3 d-flex align-items-center">
                                                <div style="max-height: 300px;" class="overflow-auto w-100">
                                                    <div class="list-group">
                                                        @php
                                                            $section_1_blog_checkbox = $blogData;
                                                            $section_1_blog_checkbox_selected = $section_1_data['blogCheckbox'];
                                                        @endphp
                                                        @foreach ($section_1_blog_checkbox as $single_section_1_blog_checkbox)
                                                            @if (!in_array($single_section_1_blog_checkbox->id, $section_1_blog_checkbox_selected))
                                                                @php
                                                                    $section_1_blog_checkbox_blogData = blogData($single_section_1_blog_checkbox->id);
                                                                @endphp
                                                                @if ($section_1_blog_checkbox_blogData)
                                                                    <label class='list-group-item'>
                                                                        <input class='form-check-input me-1' type='checkbox'
                                                                            name='blogCheckbox[]'
                                                                            value='{{ $section_1_blog_checkbox_blogData->id }}'>
                                                                        {{ $section_1_blog_checkbox_blogData->title }}
                                                                    </label>
                                                                @endif
                                                            @else
                                                                <label class='list-group-item'>
                                                                    <input class='form-check-input me-1' type='checkbox'
                                                                        name='blogCheckbox[]' checked
                                                                        value='{{ $single_section_1_blog_checkbox->id }}'>
                                                                    {{ $single_section_1_blog_checkbox->title }}
                                                                </label>
                                                            @endif
                                                        @endforeach

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <div class="row">
                                                    <div class="col-12 mb-3 d-flex align-items-center">
                                                        <select name="sliderSectionItem1" class="form-control" required>
                                                            @php
                                                                $section1_sliderSectionItem1 = blogData($section_1_data['sliderSectionItem1']);
                                                            @endphp
                                                            @if ($section1_sliderSectionItem1)
                                                                <option value="{{ $section1_sliderSectionItem1->id }}">
                                                                    {{ $section1_sliderSectionItem1->title }}</option>
                                                            @endif
                                                            @php
                                                                echo blogOption();
                                                            @endphp
                                                        </select>
                                                    </div>
                                                    <div class="col-12 mb-3 d-flex align-items-center">
                                                        <select name="sliderSectionItem2" class="form-control" required>
                                                            @php
                                                                $section1_sliderSectionItem2 = blogData($section_1_data['sliderSectionItem2']);
                                                            @endphp
                                                            @if ($section1_sliderSectionItem2)
                                                                <option value="{{ $section1_sliderSectionItem2->id }}">
                                                                    {{ $section1_sliderSectionItem2->title }}</option>
                                                            @endif
                                                            @php
                                                                echo blogOption();
                                                            @endphp
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <div class="col-6 mb-3 d-flex align-items-center">
                                                <div style="max-height: 300px;" class="overflow-auto w-100">
                                                    <div class="list-group">
                                                        @php
                                                            echo blogCheckbox();
                                                        @endphp
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <div class="row">
                                                    <div class="col-12 mb-3 d-flex align-items-center">
                                                        <select name="sliderSectionItem1" class="form-control" required>
                                                            <option value="">Select</option>
                                                            @php
                                                                echo blogOption();
                                                            @endphp
                                                        </select>
                                                    </div>
                                                    <div class="col-12 mb-3 d-flex align-items-center">
                                                        <select name="sliderSectionItem2" class="form-control" required>
                                                            <option value="">Select</option>
                                                            @php
                                                                echo blogOption();
                                                            @endphp
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="mb-3 d-flex justify-content-center align-items-center"
                                        id="section-btn-box-1">
                                        <div style="width: 200px">
                                            <button class="btn btn-primary" type="submit" name="create"
                                                style="width:100% ; font-size:15px">Save </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 p-0 mt-4">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h6 class="text-primary" style="font-size: 16px">Section 2</h6>
                            </div>
                            <div class="card-body">

                                <form method="POST" id="section-form-2"
                                    onsubmit="uploadData1('section-form-2','{{ route('admin.homePageSave') }}', 'section-alert-2', 'section-btn-box-2', event)"
                                    class="mx-3 p-3" enctype="multipart/form-data">
                                    @csrf
                                    <div id="section-alert-2"></div>
                                    <div class="row">
                                        <input type="hidden" name="section" value="section-2">
                                        <input type="hidden" name="section_name" value="3 Category">




                                        <div class="col-12 mb-3 d-flex justify-content-center">
                                            <img src="{{ asset('assets/images/section-2.webp') }}"
                                                style="max-width: 550px">
                                        </div>
                                        @php
                                            $section2 = DB::table('home')
                                                ->where('section', '=', 'section-2')
                                                ->first();
                                        @endphp
                                        @if (!is_null($section2))
                                            @php
                                                $section_2_data = json_decode($section2->data, true);
                                            @endphp


                                            <div class="col-4 mb-3 d-flex align-items-center">
                                                <select name="category1" class="form-control" required>
                                                    @php
                                                        $section2_category1 = blogCategoryData($section_2_data['category1']);
                                                    @endphp
                                                    @if ($section2_category1)
                                                        <option value="{{ $section2_category1->id }}">
                                                            {{ $section2_category1->cat_name }}</option>
                                                    @endif
                                                    @php
                                                        echo blogCategory();
                                                    @endphp
                                                </select>
                                            </div>
                                            <div class="col-4 mb-3 d-flex align-items-center">
                                                <select name="category2" class="form-control" required>
                                                    @php
                                                        $section2_category2 = blogCategoryData($section_2_data['category2']);
                                                    @endphp
                                                    @if ($section2_category2)
                                                        <option value="{{ $section2_category2->id }}">
                                                            {{ $section2_category2->cat_name }}</option>
                                                    @endif
                                                    @php
                                                        echo blogCategory();
                                                    @endphp
                                                </select>
                                            </div>
                                            <div class="col-4 mb-3 d-flex align-items-center">
                                                <select name="category3" class="form-control" required>
                                                    @php
                                                        $section2_category3 = blogCategoryData($section_2_data['category3']);
                                                    @endphp
                                                    @if ($section2_category3)
                                                        <option value="{{ $section2_category3->id }}">
                                                            {{ $section2_category3->cat_name }}</option>
                                                    @endif
                                                    @php
                                                        echo blogCategory();
                                                    @endphp
                                                </select>
                                            </div>
                                        @else
                                            <div class="col-4 mb-3 d-flex align-items-center">
                                                <select name="category1" class="form-control" required>
                                                    <option value="">Select Category</option>
                                                    @php
                                                        echo blogCategory();
                                                    @endphp
                                                </select>
                                            </div>
                                            <div class="col-4 mb-3 d-flex align-items-center">
                                                <select name="category2" class="form-control" required>
                                                    <option value="">Select Category</option>
                                                    @php
                                                        echo blogCategory();
                                                    @endphp
                                                </select>
                                            </div>
                                            <div class="col-4 mb-3 d-flex align-items-center">
                                                <select name="category3" class="form-control" required>
                                                    <option value="">Select Category</option>
                                                    @php
                                                        echo blogCategory();
                                                    @endphp
                                                </select>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="mb-3 d-flex justify-content-center align-items-center"
                                        id="section-btn-box-1">
                                        <div style="width: 200px">
                                            <button class="btn btn-primary" type="submit" name="create"
                                                style="width:100% ; font-size:15px">Save </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 p-0 mt-4">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h6 class="text-primary" style="font-size: 16px">Section 3</h6>
                            </div>
                            <div class="card-body">

                                <form method="POST" id="section-form-3"
                                    onsubmit="uploadData1('section-form-3','{{ route('admin.homePageSave') }}', 'section-alert-3', 'section-btn-box-3', event)"
                                    class="mx-3 p-3" enctype="multipart/form-data">
                                    @csrf
                                    <div id="section-alert-3"></div>
                                    <div class="row">
                                        <input type="hidden" name="section" value="section-3">
                                        <input type="hidden" name="section_name" value="3 Blog Section">




                                        <div class="col-12 mb-3 d-flex justify-content-center">
                                            <img src="{{ asset('assets/images/section-3.webp') }}"
                                                style="max-width: 550px">
                                        </div>
                                        @php
                                            $section3 = DB::table('home')
                                                ->where('section', '=', 'section-3')
                                                ->first();
                                        @endphp
                                        @if (!is_null($section3))
                                            @php
                                                $section_3_data = json_decode($section3->data, true);
                                            @endphp


                                            <div class="col-4 mb-3 d-flex align-items-center">
                                                <select name="blog1" class="form-control" required>
                                                    @php
                                                        $section3_blog1 = blogData($section_3_data['blog1']);
                                                    @endphp
                                                    @if ($section3_blog1)
                                                        <option value="{{ $section3_blog1->id }}">
                                                            {{ $section3_blog1->title }}</option>
                                                    @endif
                                                    @php
                                                        echo blogOption();
                                                    @endphp
                                                </select>
                                            </div>
                                            <div class="col-4 mb-3 d-flex align-items-center">
                                                <select name="blog2" class="form-control" required>
                                                    @php
                                                        $section3_blog2 = blogData($section_3_data['blog2']);
                                                    @endphp
                                                    @if ($section3_blog2)
                                                        <option value="{{ $section3_blog2->id }}">
                                                            {{ $section3_blog2->title }}</option>
                                                    @endif
                                                    @php
                                                        echo blogOption();
                                                    @endphp
                                                </select>
                                            </div>
                                            <div class="col-4 mb-3 d-flex align-items-center">
                                                <select name="blog3" class="form-control" required>
                                                    @php
                                                        $section3_blog3 = blogData($section_3_data['blog3']);
                                                    @endphp
                                                    @if ($section3_blog3)
                                                        <option value="{{ $section3_blog3->id }}">
                                                            {{ $section3_blog3->title }}</option>
                                                    @endif
                                                    @php
                                                        echo blogOption();
                                                    @endphp
                                                </select>
                                            </div>
                                        @else
                                            <div class="col-4 mb-3 d-flex align-items-center">
                                                <select name="blog1" class="form-control" required>
                                                    <option value="">Select blog</option>
                                                    @php
                                                        echo blogOption();
                                                    @endphp
                                                </select>
                                            </div>
                                            <div class="col-4 mb-3 d-flex align-items-center">
                                                <select name="blog2" class="form-control" required>
                                                    <option value="">Select blog</option>
                                                    @php
                                                        echo blogOption();
                                                    @endphp
                                                </select>
                                            </div>
                                            <div class="col-4 mb-3 d-flex align-items-center">
                                                <select name="blog3" class="form-control" required>
                                                    <option value="">Select blog</option>
                                                    @php
                                                        echo blogOption();
                                                    @endphp
                                                </select>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="mb-3 d-flex justify-content-center align-items-center"
                                        id="section-btn-box-1">
                                        <div style="width: 200px">
                                            <button class="btn btn-primary" type="submit" name="create"
                                                style="width:100% ; font-size:15px">Save </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 p-0 mt-4">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h6 class="text-primary" style="font-size: 16px">Section 4</h6>
                            </div>
                            <div class="card-body">

                                <form method="POST" id="section-form-4"
                                    onsubmit="uploadData1('section-form-4','{{ route('admin.homePageSave') }}', 'section-alert-4', 'section-btn-box-4', event)"
                                    class="mx-3 p-3" enctype="multipart/form-data">
                                    @csrf
                                    <div id="section-alert-4"></div>
                                    <div class="row">
                                        <input type="hidden" name="section" value="section-4">
                                        <input type="hidden" name="section_name" value="More blogs">

                                        <div class="col-12 mb-3 d-flex justify-content-center">
                                            <img src="{{ asset('assets/images/section-4.webp') }}"
                                                style="max-width: 550px">
                                        </div>
                                        @php
                                            $section4 = DB::table('home')
                                                ->where('section', '=', 'section-4')
                                                ->first();
                                        @endphp

                                        @if (!is_null($section4))
                                            @php
                                                $section_4_data = json_decode($section4->data, true);
                                            @endphp
                                            <div class="col-6 mb-3 d-flex align-items-center">
                                                <div style="max-height: 300px;" class="overflow-auto w-100">
                                                    <div class="list-group">
                                                        @php
                                                            $section_4_blog_checkbox = $blogData;
                                                            $section_4_blog_checkbox_selected = $section_4_data['blogCheckbox'];
                                                        @endphp
                                                        @foreach ($section_4_blog_checkbox as $single_section_4_blog_checkbox)
                                                            @if (!in_array($single_section_4_blog_checkbox->id, $section_4_blog_checkbox_selected))
                                                                @php
                                                                    $section_4_blog_checkbox_blogData = blogData($single_section_4_blog_checkbox->id);
                                                                @endphp
                                                                @if ($section_4_blog_checkbox_blogData)
                                                                    <label class='list-group-item'>
                                                                        <input class='form-check-input me-1'
                                                                            type='checkbox' name='blogCheckbox[]'
                                                                            value='{{ $section_4_blog_checkbox_blogData->id }}'>
                                                                        {{ $section_4_blog_checkbox_blogData->title }}
                                                                    </label>
                                                                @endif
                                                            @else
                                                                <label class='list-group-item'>
                                                                    <input class='form-check-input me-1' type='checkbox'
                                                                        name='blogCheckbox[]' checked
                                                                        value='{{ $single_section_4_blog_checkbox->id }}'>
                                                                    {{ $single_section_4_blog_checkbox->title }}
                                                                </label>
                                                            @endif
                                                        @endforeach

                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <div class="col-6 mb-3 d-flex align-items-center">
                                                <div style="max-height: 300px;" class="overflow-auto w-100">
                                                    <div class="list-group">
                                                        @php
                                                            echo blogCheckbox();
                                                        @endphp
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                    </div>
                                    <div class="mb-3 d-flex justify-content-center align-items-center"
                                        id="section-btn-box-1">
                                        <div style="width: 200px">
                                            <button class="btn btn-primary" type="submit" name="create"
                                                style="width:100% ; font-size:15px">Save </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 p-0 mt-4">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h6 class="text-primary" style="font-size: 16px">Section 5</h6>
                            </div>
                            <div class="card-body">

                                <form method="POST" id="section-form-5"
                                    onsubmit="uploadData1('section-form-5','{{ route('admin.homePageSave') }}', 'section-alert-5', 'section-btn-box-5', event)"
                                    class="mx-3 p-3" enctype="multipart/form-data">
                                    @csrf
                                    <div id="section-alert-5"></div>
                                    <div class="row">
                                        <input type="hidden" name="section" value="section-5">
                                        <input type="hidden" name="section_name" value="More blogs">

                                        <div class="col-12 mb-3 d-flex justify-content-center">
                                            <img src="{{ asset('assets/images/section-5.webp') }}"
                                                style="max-width: 550px">
                                        </div>
                                        @php
                                            $section5 = DB::table('home')
                                                ->where('section', '=', 'section-5')
                                                ->first();
                                        @endphp

                                        @if (!is_null($section5))
                                            @php
                                                $section_5_data = json_decode($section5->data, true);
                                            @endphp
                                            <div class="col-6 mb-3 d-flex align-items-center">
                                                <div style="max-height: 300px;" class="overflow-auto w-100">
                                                    <div class="list-group">
                                                        @php
                                                            $section_5_blog_checkbox = $blogData;
                                                            $section_5_blog_checkbox_selected = $section_5_data['blogCheckbox'];
                                                        @endphp
                                                        @foreach ($section_5_blog_checkbox as $single_section_5_blog_checkbox)
                                                            @if (!in_array($single_section_5_blog_checkbox->id, $section_5_blog_checkbox_selected))
                                                                @php
                                                                    $section_5_blog_checkbox_blogData = blogData($single_section_5_blog_checkbox->id);
                                                                @endphp
                                                                @if ($section_5_blog_checkbox_blogData)
                                                                    <label class='list-group-item'>
                                                                        <input class='form-check-input me-1'
                                                                            type='checkbox' name='blogCheckbox[]'
                                                                            value='{{ $section_5_blog_checkbox_blogData->id }}'>
                                                                        {{ $section_5_blog_checkbox_blogData->title }}
                                                                    </label>
                                                                @endif
                                                            @else
                                                                <label class='list-group-item'>
                                                                    <input class='form-check-input me-1' type='checkbox'
                                                                        name='blogCheckbox[]' checked
                                                                        value='{{ $single_section_5_blog_checkbox->id }}'>
                                                                    {{ $single_section_5_blog_checkbox->title }}
                                                                </label>
                                                            @endif
                                                        @endforeach

                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <div class="col-6 mb-3 d-flex align-items-center">
                                                <div style="max-height: 300px;" class="overflow-auto w-100">
                                                    <div class="list-group">
                                                        @php
                                                            echo blogCheckbox();
                                                        @endphp
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                    </div>
                                    <div class="mb-3 d-flex justify-content-center align-items-center"
                                        id="section-btn-box-1">
                                        <div style="width: 200px">
                                            <button class="btn btn-primary" type="submit" name="create"
                                                style="width:100% ; font-size:15px">Save </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    @endpush
@endsection
