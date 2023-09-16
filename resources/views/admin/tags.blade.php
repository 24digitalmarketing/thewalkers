@extends('admin.main')
@push('title')
    <title>Tags</title>
@endpush

@section('main-section')
    <div class="page-wrapper">
        <div class="page-content">

            <div class="card p-0">
                <div class="card-body p-0">
                    <div class="page-breadcrumb d-none d-sm-flex align-items-center border px-3 pt-2 pb-2 bg-light ">
                        <div class="breadcrumb-title pe-3">Tags</div>
                        <div class="ps-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.indexView') }}"><i
                                                class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Tags</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12 p-0 mt-4">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h6 class="text-primary" style="font-size: 16px">Add Tags</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-12 mb-3">

                                        <form method="POST" id="blog-cat-form"
                                            onsubmit="uploadData1('blog-cat-form', '{{ route('admin.saveTag') }}', 'alert-box', 'btn-box-1', event)"
                                            class="shadow mx-3 p-3">
                                            @csrf
                                            <div id="alert-box"></div>
                                            <div class="mb-3">
                                                <label for="academic-session" class="form-label">Tag Name</label>
                                                <input type="text" name="tag_name" class="form-control" required
                                                    placeholder="Tag Name">
                                                <p class="form-feedback invalid-feedback" data-name="tag_name"></p>
                                            </div>
                                            <div class="mb-3">
                                                <label for="academic-session" class="form-label">Tag Slug</label>
                                                <input type="text" name="slug" class="form-control" required
                                                    placeholder="Slug" maxlength="255">
                                                <p class="form-feedback invalid-feedback" data-name="slug"></p>
                                            </div>
                                            <div class="mb-3" id="btn-box-1">
                                                <button class="btn btn-primary " type="submit" name="create"
                                                    style="width:100% ; font-size:15px"> Add </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 p-0 mt-4">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <div class="row">
                                    <div
                                        class="col-md-4 mb-md-0 mb-2 d-flex justify-content-md-start justify-content-center align-items-center">
                                        <h6 class="text-primary" style="font-size: 16px">All Tags</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="mt-2 mx-2 mb-3">
                                    <table id="tag-table" class="table table-hover table-borderless w-100 border-bottom"
                                        style="min-width: 500px">
                                        <thead class="bg-light border-0">
                                            <tr>
                                                <th class="sort text-nowrap">Tag Name</th>
                                                <th class="sort text-nowrap">Slug</th>
                                                <th class="sort text-nowrap">Updated At</th>
                                                <th class="sort text-nowrap">Created At</th>
                                                <th class="sort text-nowrap">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $single_data)
                                                <tr>
                                                    <td>{{ $single_data->tag }}</td>
                                                    <td>{{ $single_data->slug }}</td>
                                                    <td>{{ showDateTime($single_data->created_at) }}</td>
                                                    <td>{{ showDateTime($single_data->updated_at) }}</td>
                                                    <td>
                                                        <div class='font-sans-serif position-static d-inline-block'>
                                                            <button class='btn text-600 btn-sm dropdown-toggle'
                                                                type='button' data-bs-toggle='dropdown'>
                                                                <span class='fas fa-ellipsis-h fs--1 text-primary'></span>
                                                            </button>
                                                            <div class='dropdown-menu border py-2'>
                                                                <a class='dropdown-item'
                                                                    href='{{ route('admin.editTag', $single_data->id) }}'><i
                                                                        class='fas fa-edit text-primary'></i> Edit</a>
                                                                <a class='dropdown-item' href='#!'
                                                                    onclick="single_deleteConfirm('tags',[{{ $single_data->id }}],'false','','')"><i
                                                                        class='fas fa-trash text-danger'></i>
                                                                    Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
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
