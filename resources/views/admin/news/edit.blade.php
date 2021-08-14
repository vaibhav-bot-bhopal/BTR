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
                    <h1 class="m-0">Edit News</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit News</li>
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
                <div class="col-lg-8 col-md-12">
                    <div class="card card-outline card-success">
                        <div class="card-body">
                            <form action="{{ url('admin/news-update/'.$data->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="n_title">News Title</label>
                                    <input type="text" class="form-control @error('n_title') is-invalid @enderror" id="n_title" name="n_title" value="{{$data->news_title}}" placeholder="Enter News Title">
                                    @error('n_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="n_data">News Date</label>
                                    <input type="date" class="form-control @error('n_date') is-invalid @enderror" id="n_date" name="n_date" value="{{$data->news_date}}" >
                                    @error('n_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="n_disc">News Description</label>
                                    <textarea class="ckeditor form-control @error('n_disc') is-invalid @enderror" rows="5" id="n_disc" name="n_disc">{{$data->news_discription}}</textarea>
                                    @error('n_disc')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <input type="hidden" name="h_file" value="{{$data->news_image}}">

                                <div class="form-group">
                                    <input type="file" class="form-control-file border @error('n_file') is-invalid @enderror" name="n_file">
                                    @error('n_file')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary mb-4">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="card card-outline card-success">
                        <div class="card-header bg-light">
                            <i class="fas fa-image" style="margin-right: 5px;"></i>
                            Recently Uploaded Image
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>

                        <div class="card-body">
                            <img src="{{asset('public/storage/eng_news/'.$data->news_image)}}" width="100%" height="100%" class="img-responsive rounded" alt="image">
                        </div>

                        <div class="card-footer text-center">
                            <span style="font-weight: 600;">{{ $data->news_image }}</span>
                        </div>
                    </div>
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
                    <h1 class="m-0">समाचार संपादित करें</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">होम</a></li>
                        <li class="breadcrumb-item active">समाचार संपादित करें</li>
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
                <div class="col-lg-8 col-md-12">
                    <div class="card card-outline card-success">
                        <div class="card-body">
                            <form action="{{ url('admin/news-update/'.$data->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="n_title">न्यूज़ शीर्षक</label>
                                    <input type="text" class="form-control @error('n_title') is-invalid @enderror" id="n_title" name="n_title" value="{{$data->news_title}}" placeholder="समाचार शीर्षक दर्ज करें">
                                    @error('n_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="n_data">न्यूज़ तारीख</label>
                                    <input type="date" class="form-control @error('n_date') is-invalid @enderror" id="n_date" name="n_date" value="{{$data->news_date}}" >
                                    @error('n_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="n_disc">न्यूज़ विवरण</label>
                                    <textarea class="ckeditor form-control @error('n_disc') is-invalid @enderror" rows="5" id="n_disc" name="n_disc">{{$data->news_discription}}</textarea>
                                    @error('n_disc')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <input type="hidden" name="h_file" value="{{$data->news_image}}">

                                <div class="form-group">
                                    <input type="file" class="form-control-file border @error('n_file') is-invalid @enderror" name="n_file">
                                    @error('n_file')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">सबमिट</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="card card-outline card-success">
                        <div class="card-header bg-light">
                            <i class="fas fa-image" style="margin-right: 5px;"></i>
                            हाल ही में अपलोड की गई इमेज
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>

                        <div class="card-body">
                            <img src="{{asset('public/storage/hin_news/'.$data->news_image)}}" width="100%" height="100%" class="img-responsive rounded" alt="image">
                        </div>

                        <div class="card-footer text-center">
                            <span style="font-weight: 600;">{{ $data->news_image }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->

@endif

@endsection
