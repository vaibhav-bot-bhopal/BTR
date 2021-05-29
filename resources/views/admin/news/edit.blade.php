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

                <form action="{{ url('admin/news-update/'.$data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="n_title">News Title</label>
                        <input type="text" class="form-control" id="n_title" name="n_title" value="{{$data->news_title}}" >
                        @error('n_title')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="n_data">News Date</label>
                        <input type="date" class="form-control" id="n_date" name="n_date" value="{{$data->news_date}}" >
                        @error('n_date')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="n_disc">News Description</label>
                        <textarea class="ckeditor form-control" rows="5" id="n_disc" name="n_disc">{{$data->news_discription}}</textarea>
                        @error('n_disc')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <input type="hidden" name="h_file" value="{{$data->news_image}}">

                    <div class="form-group">
                        <input type="file" class="form-control-file border" name="n_file">
                        @error('n_file')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
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

                <form action="{{ url('admin/news-update/'.$data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="n_title">न्यूज़ शीर्षक</label>
                        <input type="text" class="form-control" id="n_title" name="n_title" value="{{$data->news_title}}" >
                        @error('n_title')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="n_data">न्यूज़ तारीख</label>
                        <input type="date" class="form-control" id="n_date" name="n_date" value="{{$data->news_date}}" >
                        @error('n_date')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="n_disc">न्यूज़ विवरण</label>
                        <textarea class="ckeditor form-control" rows="5" id="n_disc" name="n_disc">{{$data->news_discription}}</textarea>
                        @error('n_disc')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <input type="hidden" name="h_file" value="{{$data->news_image}}">

                    <div class="form-group">
                        <input type="file" class="form-control-file border" name="n_file">
                        @error('n_file')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">सबमिट</button>
                </form>

            </div>
        </div>
    </div>
    <!-- /.content-header -->
@endif

@endsection
