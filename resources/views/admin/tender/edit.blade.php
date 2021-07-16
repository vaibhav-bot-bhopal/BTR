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
        <div class="row">
            <div class="col-lg-8 col-md-8 offset-2">

                <form action="{{ url('admin/tender-update/'.$data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="n_title">Title</label>
                        <input type="text" class="form-control" id="n_title" name="n_title" value="{{$data->title}}" >
                        @error('n_title')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="n_desc">Description</label>
                        <textarea class="ckeditor form-control" rows="5" id="n_desc" name="n_desc">{{$data->description}}</textarea>
                        @error('n_desc')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>

            </div>
        </div>
    </div>
    <!-- /.content-header -->
@endif

@if (session('locale') == 'hi')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="row">
            <div class="col-lg-8 col-md-8 offset-2">

                <form action="{{ url('admin/tender-update/'.$data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="n_title">शीर्षक</label>
                        <input type="text" class="form-control" id="n_title" name="n_title" value="{{$data->title}}" >
                        @error('n_title')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="n_desc">विवरण</label>
                        <textarea class="ckeditor form-control" rows="5" id="n_desc" name="n_desc">{{$data->description}}</textarea>
                        @error('n_desc')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">अपडेट करें</button>
                </form>

            </div>
        </div>
    </div>
    <!-- /.content-header -->
@endif

@endsection
