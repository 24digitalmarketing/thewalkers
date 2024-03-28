@extends('admin.main')
@push('title')
    <title>Edit Webstories</title>
@endpush

@section('main-section')
    <div class="page-wrapper">
        <div class="page-content">

            <div class="card p-0">
                <div class="card-body p-0">
                    <div class="page-breadcrumb d-none d-sm-flex align-items-center border px-3 pt-2 pb-2 bg-light ">
                        <div class="breadcrumb-title pe-3">Webstories</div>
                        <div class="ps-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.indexView') }}"><i
                                                class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Webstories</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 p-0 mt-4">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h6 class="text-primary" style="font-size: 16px">Edit Webstories</h6>
                    </div>
                    <div class="card-body">

                        <form method="POST" id="blog-form"
                            onsubmit="uploadData2('blog-form','{{ route('admin.updateWebStories', $data->id) }}', 'alert-box', 'btn-box-1', event)"
                            class="mx-3 p-3" enctype="multipart/form-data">
                            @csrf
                            <div id="alert-box"></div>
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label class="form-label"> Title <span class="text-danger">*</span></label>
                                    <input type="text" name="title" class="form-control" value="{{ $data->title }}"
                                        required placeholder="Title">
                                    <p class="form-feedback invalid-feedback" data-name="title"></p>
                                </div>
                                <div class="col-lg-6 mb-3">

                                    <label class="form-label">Category <span class="text-danger">*</span></label>
                                    <select name="category" class="form-control" required>
                                        <option value="{{ $data->cat_id }}">
                                            {{ $data->webstoryCategory->cat_name }}</option>
                                        @php
                                            echo webCategory();
                                        @endphp
                                    </select>
                                    <p class="form-feedback invalid-feedback" data-name="category"></p>

                                </div>

                                <div class="col-lg-6 mb-3">
                                    <label class="form-label"> Slug <span class="text-danger">*</span></label>
                                    <input type="text" name="slug" class="form-control" required placeholder="Slug"
                                        value="{{ $data->slug }}">
                                    <p class="form-feedback invalid-feedback" data-name="slug"></p>
                                </div>

                                <div class="col-12 mb-3">
                                    <label class="form-label"> Link </label>
                                    <input type="url" name="link" value="{{ $data->link }}" class="form-control"
                                        placeholder="Link">
                                    <p class="form-feedback invalid-feedback" data-name="link"></p>
                                </div>

                                <div class="col-12 mb-3">
                                    <label class="form-label">Cover Image<span class="text-danger">*</span></label>
                                    <div class="border border-dashed p-3">
                                        <div class="selected-media-box" id="selected-media-box">
                                            <input type="hidden" id="final-selected-media-input" name="cover"
                                                value="{{ $data->cover }}">
                                            @if ($data->cover != '')
                                                @php
                                                    $cover = json_decode($data->cover, true);
                                                    echo getMediaFile($cover[0]['file_id']);
                                                @endphp
                                            @endif
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

                                <div class="col-12 mb-3">
                                    <label class="form-label">Media <span class="text-danger">*</span></label>
                                    <div class="border border-dashed p-3">
                                        <div class="selected-media-box" id="selected-media-box2">
                                            <input type="hidden" id="final-selected-media-input2" name="media"
                                                value="{{ $data->media }}">

                                            @php
                                                $media = json_decode($data->media, true);
                                            @endphp
                                            @foreach ($media as $single_media)
                                                @php
                                                    echo getMediaFile($single_media['file_id']);
                                                @endphp
                                            @endforeach

                                        </div>
                                        <div class="d-flex justify-content-center align-items-center mt-2">
                                            <a style="background-color: transparent" href="javascript:;"
                                                data-bs-toggle="modal" data-bs-target="#media-modal-one"
                                                onclick="setMediaSelection('final-selected-media-input2','selected-media-box2',true)">
                                                <img src="{{ asset('admin-assets/assets/images/icons/attachment.png') }}">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="mb-3" id="btn-box-1">
                                <button class="btn btn-primary" type="submit" name="create"
                                    style="width:100% ; font-size:15px"> Save </button>
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
