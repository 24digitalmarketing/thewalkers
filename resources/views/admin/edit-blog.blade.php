@extends('admin.main')
@push('title')
    <title>Edit Blog</title>
@endpush

@section('main-section')
    <div class="page-wrapper">
        <div class="page-content">

            <div class="card p-0">
                <div class="card-body p-0">
                    <div class="page-breadcrumb d-none d-sm-flex align-items-center border px-3 pt-2 pb-2 bg-light ">
                        <div class="breadcrumb-title pe-3">Blog</div>
                        <div class="ps-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.indexView') }}"><i
                                                class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Blog</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 p-0 mt-4">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h6 class="text-primary" style="font-size: 16px">Edit Blog</h6>
                    </div>
                    <div class="card-body">

                        <form method="POST" id="blog-form"
                            onsubmit="uploadData2('blog-form','{{ route('admin.updateBlog', $data[0]->id) }}', 'alert-box', 'btn-box-1', event)"
                            class="mx-3 p-3" enctype="multipart/form-data">
                            @csrf
                            <div id="alert-box"></div>
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label class="form-label">Status <span class="text-danger">*</span></label>
                                    <select name="status" class="form-control" required>
                                        <option value="{{ $data[0]->status }}">{{ $data[0]->status }}</option>
                                        <option value="saved">saved</option>
                                        <option value="published">published</option>
                                    </select>
                                    <p class="form-feedback invalid-feedback" data-name="status"></p>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">Category <span class="text-danger">*</span></label>
                                    <select name="category_name" class="form-control" required>
                                        <option value="{{ $data[0]->cat_id }}">{{ getBlogCategoryName($data[0]->cat_id) }}
                                        </option>
                                        @foreach ($blogCategory as $singleblogCat)
                                            <option value="{{ $singleblogCat->cat_id }}">{{ $singleblogCat->cat_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <p class="form-feedback invalid-feedback" data-name="category_name"></p>

                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label"> Title <span class="text-danger">*</span></label>
                                    <input type="text" name="title" class="form-control" required
                                        placeholder="Enter Blog Title" value="{{ $data[0]->title }}">
                                    <p class="form-feedback invalid-feedback" data-name="title"></p>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label"> Slug <span class="text-danger">*</span></label>
                                    <input type="text" name="slug" class="form-control" required placeholder="Slug"
                                        value="{{ $data[0]->slug }}">
                                    <p class="form-feedback invalid-feedback" data-name="slug"></p>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label"> Popular ( 0 : not popular, 1 : popular ) <span
                                            class="text-danger">*</span></label>
                                    <input type="number" name="popular" value="{{ $data[0]->popular }}"
                                        class="form-control" required placeholder="0 or 1">
                                    <p class="form-feedback invalid-feedback" data-name="popular"></p>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label class="form-label"> Related Blogs <span class="text-danger">*</span></label>
                                    <div style="max-height: 300px" class="overflow-auto">
                                        <div class="list-group">
                                            @php
                                                $blogs = DB::table('blogs')
                                                    ->where('status', '=', 'published')
                                                    ->orderBy('title', 'asc')
                                                    ->get();
                                            @endphp
                                            @if (count($blogs) > 0)

                                                @if (!is_null($data[0]->related) && $data[0]->related != '')
                                                    @php
                                                        $selected_blogs = json_decode($data[0]->related, true);
                                                    @endphp
                                                    @foreach ($blogs as $single_blog)
                                                        @if (!in_array($single_blog->id, $selected_blogs))
                                                            <div class="list-group">
                                                                <label class="list-group-item">
                                                                    <input class="form-check-input me-1"
                                                                        name="blogCheckbox[]" type="checkbox"
                                                                        value="{{ $single_blog->id }}">
                                                                    {{ $single_blog->title }}
                                                                </label>

                                                            </div>
                                                        @else
                                                            <div class="list-group">
                                                                <label class="list-group-item">
                                                                    <input class="form-check-input me-1"
                                                                        name="blogCheckbox[]" type="checkbox" checked
                                                                        value="{{ $single_blog->id }}">
                                                                    {{ $single_blog->title }}
                                                                </label>

                                                            </div>
                                                        @endif
                                                    @endforeach
                                                @else
                                                    @php
                                                        echo blogCheckbox();
                                                    @endphp
                                                @endif

                                            @endif
                                        </div>
                                    </div>

                                </div>

                                <div class="col-12 mb-3">
                                    <label class="form-label">Feature Image<span class="text-danger">*</span></label>

                                    <div class="border border-dashed p-3">
                                        <div class="selected-media-box" id="selected-media-box">
                                            <input type="hidden" id="final-selected-media-input" name="file"
                                                value="">
                                            @php
                                                echo getMediaFile($data[0]->main_pic);
                                            @endphp
                                        </div>
                                        <div class="d-flex justify-content-center align-items-center mt-2">
                                            <a style="background-color: transparent" href="javascript:;"
                                                data-bs-toggle="modal" data-bs-target="#media-modal-one"
                                                onclick="setMediaSelection('final-selected-media-input','selected-media-box',false)">
                                                <img src="{{ asset('admin-assets/assets/images/icons/attachment.png') }}">
                                            </a>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-12 mb-3">
                                    <label class="form-label"> Short Description ( Max: 255 ) <span
                                            class="text-danger">*</span></label>
                                    <textarea name="short_description" rows="5" class="form-control" maxlength="255"
                                        placeholder="Short Description">{{ $data[0]->short_des }} </textarea>
                                    <p class="form-feedback invalid-feedback" data-name="short_description"></p>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <label class="form-label"> Blog Content <span class="text-danger">*</span></label>
                                    <textarea name="blog_content" id="editor" cols="30" rows="10" class="form-control">
                                    {{ html_entity_decode($data[0]->blog_content) }}
                                </textarea>
                                    <p class="form-feedback invalid-feedback" data-name="blog_content"></p>
                                </div>
                            </div>

                            <div class="mb-3" id="btn-box-1">
                                <button class="btn btn-primary" type="submit" name="create"
                                    style="width:100% ; font-size:15px"> Update </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>

    @push('scripts')
    @endpush
@endsection
