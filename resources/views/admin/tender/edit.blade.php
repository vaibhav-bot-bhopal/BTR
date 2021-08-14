@extends('admin.layouts.admin')

@push('css')

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
                            <input type="text" class="form-control @error('ten_title') is-invalid @enderror" id="ten_title" name="ten_title" value="{{$data->title}}" placeholder="Enter Tender Title">
                            @error('ten_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="ten_desc">Description</label>
                            <textarea class="ckeditor form-control @error('ten_desc') is-invalid @enderror" rows="5" id="ten_desc" name="ten_desc">{{$data->description}}</textarea>
                            @error('ten_desc')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="ldate">Select Tender Last Date</label>
                            <input type="datetime-local" class="form-control @error('ldate') is-invalid @enderror" id="ldate" name="ldate" value="{{date('Y-m-d\TH:i', strtotime($data->last_date))}}" >
                            @error('ldate')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="docs">Recent Tender Docs</label>
                            <div class="row">
                                <div class="col-lg-12">
                                    @if ($data->file_extension)
                                        @if ($data->file_extension == 'doc' || $data->file_extension == 'docx')
                                            <img src="{{asset('public/assets/images/doc-icon/word.png')}}" width="32" height="32" class="img-responsive rounded" alt="doc-image">
                                            <span style="font-weight: 600; position: relative; top: 4px;">{{ $data->original_filename }}</span>
                                        @endif

                                        @if ($data->file_extension == 'xls' || $data->file_extension == 'xlsx')
                                            <img src="{{asset('public/assets/images/doc-icon/excel.png')}}" width="32" height="32" class="img-responsive rounded" alt="doc-image">
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
                            <input type="text" class="form-control @error('ten_title') is-invalid @enderror" id="ten_title" name="ten_title" value="{{$data->title}}" placeholder="निविदा शीर्षक दर्ज करें">
                            @error('ten_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="ten_desc">विवरण</label>
                            <textarea class="ckeditor form-control @error('ten_desc') is-invalid @enderror" rows="5" id="ten_desc" name="ten_desc">{{$data->description}}</textarea>
                            @error('ten_desc')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="ldate">निविदा अंतिम तिथि का चयन करें</label>
                            <input type="datetime-local" class="form-control @error('ldate') is-invalid @enderror" id="ldate" name="ldate" value="{{date('Y-m-d\TH:i', strtotime($data->last_date))}}" >
                            @error('ldate')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="docs">Recent Tender Docs</label>
                            <div class="row">
                                <div class="col-lg-12">
                                    @if ($data->file_extension)
                                        @if ($data->file_extension == 'doc' || $data->file_extension == 'docx')
                                            <img src="{{asset('public/assets/images/doc-icon/word.png')}}" width="32" height="32" class="img-responsive rounded" alt="doc-image">
                                            <span style="font-weight: 600; position: relative; top: 4px;">{{ $data->original_filename }}</span>
                                        @endif

                                        @if ($data->file_extension == 'xls' || $data->file_extension == 'xlsx')
                                            <img src="{{asset('public/assets/images/doc-icon/excel.png')}}" width="32" height="32" class="img-responsive rounded" alt="doc-image">
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
