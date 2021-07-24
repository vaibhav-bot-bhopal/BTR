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
                    <h1 class="m-0">Edit Tender</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Tender</li>
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

                    <form action="{{ url('admin/tender-update/'.$data->id) }}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="ten_title">Title</label>
                            <input type="text" class="form-control" id="ten_title" name="ten_title" value="{{$data->title}}" >
                            @error('ten_title')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="ten_desc">Description</label>
                            <textarea class="ckeditor form-control" rows="5" id="ten_desc" name="ten_desc">{{$data->description}}</textarea>
                            @error('ten_desc')
                                <span class="error">{{ $message }}</span>
                            @enderror
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
                    <h1 class="m-0">निविदा संपादित करें</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">होम</a></li>
                        <li class="breadcrumb-item active">निविदा संपादित करें</li>
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

                    <form action="{{ url('admin/tender-update/'.$data->id) }}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="ten_title">शीर्षक</label>
                            <input type="text" class="form-control" id="ten_title" name="ten_title" value="{{$data->title}}" >
                            @error('ten_title')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="ten_desc">विवरण</label>
                            <textarea class="ckeditor form-control" rows="5" id="ten_desc" name="ten_desc">{{$data->description}}</textarea>
                            @error('ten_desc')
                                <span class="error">{{ $message }}</span>
                            @enderror
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
