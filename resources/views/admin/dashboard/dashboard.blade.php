@extends('admin.layouts.admin')

@section('title','BTR - Admin Dashboard')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">{{ __('panel.dash-h1') }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('panel.home') }}</a></li>
                <li class="breadcrumb-item active">{{ __('panel.dash-h1') }}</li>
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
                <div class="col-md-12">
                    <div class="card card-dark">
                        <div class="card-header">
                            <h5 class="card-title">{{ __('panel.dash-overview') }}</h5>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-warning">
                                        <div class="inner">
                                        <h3>{{ $news_count }}</h3>

                                        <p>{{ __('panel.dash-total-news') }}</p>
                                        </div>
                                        <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                        </div>
                                        <a href="{{ route('newses.index') }}" class="small-box-footer">{{ __('panel.dash-view-news') }} <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->

                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-success">
                                        <div class="inner">
                                        <h3>{{ $tender_count }}</h3>

                                        <p>{{ __('panel.dash-total-tenders') }}</p>
                                        </div>
                                        <div class="icon">
                                        <i class="ion ion-bag"></i>
                                        </div>
                                        <a href="{{ route('tender.index') }}" class="small-box-footer">{{ __('panel.dash-view-tenders') }} <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->

                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-info">
                                        <div class="inner">
                                        <h3>{{ $docs_count }}</h3>

                                        <p>{{ __('panel.dash-total-documents') }}</p>
                                        </div>
                                        <div class="icon">
                                        <i class="ion ion-bag"></i>
                                        </div>
                                        <a href="{{ route('document.index') }}" class="small-box-footer">{{ __('panel.dash-view-documents') }} <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->

                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-danger">
                                        <div class="inner">
                                        <h3>{{ $gallery_count }}</h3>

                                        <p>{{ __('panel.dash-total-gallery') }}</p>
                                        </div>
                                        <div class="icon">
                                        <i class="ion ion-bag"></i>
                                        </div>
                                        <a href="{{ route('images.index') }}" class="small-box-footer">{{ __('panel.dash-view-gallery') }} <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- ./card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
