@extends('admin.layouts.admin')

@push('css')

@endpush

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('panel.tender-h1') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{ __('panel.home') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('panel.tender-h1') }}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content pb-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-12 offset-lg-2">
                    <div class="card card-success card-outline">
                        <form action="{{ route('tender.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">{{ __('panel.tender-title') }}</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}" placeholder="Enter Tender Title" autocomplete="off">
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="description">{{ __('panel.tender-description') }}</label>
                                    <textarea class="ckeditor form-control @error('description') is-invalid @enderror" rows="5" id="description" name="description">{{old('description')}}</textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="date">{{ __('panel.tender-date') }}</label>
                                    <input type="datetime-local" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{old('date')}}">
                                    @error('date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>{{ __('panel.tender-file') }}</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input border mb-2 @error('file') is-invalid @enderror" name="file">
                                        <label class="custom-file-label" for="customFile">{{ __('panel.tender-choose-file') }}</label>
                                        @error('file')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-success"><i class="nav-icon fas fa-save" style="margin-right: 5px;"></i>Save</button>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                        <!-- /.form -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /. col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->

    {{-- @if (session('locale') == 'hi')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">टेंडर बनाएं</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">होम</a></li>
                            <li class="breadcrumb-item active">टेंडर बनाएं</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content pb-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 col-md-12 offset-lg-2">
                        <div class="card card-success card-outline">
                            <form action="{{ route('btr.tender.store') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="ten_title">शीर्षक</label>
                                        <input type="text" class="form-control @error('ten_title') is-invalid @enderror" id="ten_title" name="ten_title" value="{{old('n_title')}}" placeholder="निविदा शीर्षक दर्ज करें">
                                        @error('ten_title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="ten_desc">विवरण</label>
                                        <textarea class="ckeditor form-control @error('ten_desc') is-invalid @enderror" rows="5" id="ten_desc" name="ten_desc">{{old('n_desc')}}</textarea>
                                        @error('ten_desc')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="ldata">निविदा अंतिम तिथि का चयन करें</label>
                                        <input type="datetime-local" class="form-control @error('ldate') is-invalid @enderror" id="ldate" name="ldate" value="{{old('ldate')}}" >
                                        @error('ldate')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="ten_file">फ़ाइल अपलोड करें</label>
                                        <input type="file" class="form-control-file border @error('ten_file') is-invalid @enderror" name="ten_file">
                                        @error('ten_file')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary"><i class="nav-icon fas fa-save" style="margin-right: 5px;"></i>सेव</button>
                                </div>
                                <!-- /.card-footer -->
                            </form>
                            <!-- /.form -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    @endif --}}

@endsection

@push('js')

@endpush
