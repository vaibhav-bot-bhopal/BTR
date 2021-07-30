@extends('admin.layouts.admin')

@push('css')
    <style>
        .error{
            color:red;
        }
    </style>
@endpush

@section('content')

@if (session('locale') == 'en')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Document</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Document</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-8 offset-lg-2 offset-md-2">

                    <form action="{{ url('admin/document-update/'.$data->id) }}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="ten_title">Title</label>
                            <input type="text" class="form-control" id="docs_title" name="docs_title" value="{{ $data->title }}" >
                            @error('docs_title')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <input type="hidden" name="old_img" value="{{$data->image}}">

                        <div class="form-group">
                            <label for="docs_image">Last Recent Image</label>
                            <div class="row">
                                <div class="col-lg-12">
                                    <img src="{{asset('public/storage/document/images/'.$data->image)}}" width="250" height="150" class="img-responsive rounded" alt="doc-image">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="docs_file">Last Recent Document</label>
                            <div class="row">
                                <div class="col-lg-12">
                                    @if ($data->file_extension)
                                        @if ($data->file_extension == 'doc' || $data->file_extension == 'docx')
                                            <img src="{{asset('public/assets/images/doc-icon/word.png')}}" width="32" height="32" class="img-responsive rounded" alt="doc-image">
                                            <span style="font-weight: 600; position: relative; top: 4px;">{{ $data->original_filename }}</span>
                                        @endif

                                        @if ($data->file_extension == 'pdf')
                                            <img src="{{asset('public/assets/images/doc-icon/pdf.png')}}" width="32" height="32" class="img-responsive rounded" alt="doc-image">
                                            <span style="font-weight: 600; position: relative; top: 4px;">{{ $data->original_filename }}</span>
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mb-4">Update</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
@endif

@if (session('locale') == 'hi')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">दस्तावेज़ संपादित करें</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">होम</a></li>
                        <li class="breadcrumb-item active">दस्तावेज़ संपादित करें</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-8 offset-lg-2 offset-md-2">

                    <form action="{{ url('admin/document-update/'.$data->id) }}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="ten_title">शीर्षक</label>
                            <input type="text" class="form-control" id="docs_title" name="docs_title" value="{{ $data->title }}" >
                            @error('docs_title')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <input type="hidden" name="old_img" value="{{$data->image}}">

                        <div class="form-group">
                            <label for="docs_image">अंतिम हाल की इमेज</label>
                            <div class="row">
                                <div class="col-lg-12">
                                    <img src="{{asset('public/storage/document/images/'.$data->image)}}" width="250" height="150" class="img-responsive rounded" alt="doc-image">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="docs_file">अंतिम हाल का दस्तावेज़</label>
                            <div class="row">
                                <div class="col-lg-12">
                                    @if ($data->file_extension)
                                        @if ($data->file_extension == 'doc' || $data->file_extension == 'docx')
                                            <img src="{{asset('public/assets/images/doc-icon/word.png')}}" width="32" height="32" class="img-responsive rounded" alt="doc-image">
                                            <span style="font-weight: 600; position: relative; top: 4px;">{{ $data->original_filename }}</span>
                                        @endif

                                        @if ($data->file_extension == 'pdf')
                                            <img src="{{asset('public/assets/images/doc-icon/pdf.png')}}" width="32" height="32" class="img-responsive rounded" alt="doc-image">
                                            <span style="font-weight: 600; position: relative; top: 4px;">{{ $data->original_filename }}</span>
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mb-4">अपडेट करें</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
@endif

@endsection
