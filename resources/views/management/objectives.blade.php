@extends('layouts.master')

@section('title', 'Bandhavgarh Tiger Reserve - Management Objectives')

@section('content')
    <!-- Intro Section -->
    <div class="page-header parallax">
        <div class="container">
            <h1 class="title">{{ trans('navbar.btr-management') }}</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="container">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('btr.index') }}">{{ trans('navbar.home') }}</a>
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.btr-management') }}
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.management-objectives') }}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Intro Section -->

<!-- Service Section -->
<div id="services-section" class="padding pt-xs-60">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sx-12">
                <x-management-sidebar />
            </div>

            <div class="col-lg-8 col-md-7">
                <div class="box-title mb-20">
                    <h2>{{ trans('navbar.management-objectives') }}</h2>
                </div>

                <div class="full-pic">
                    <figure>
                        <img src="{{ asset('public/assets/images/btr_actual_image/btr_image51.jpg') }}" alt="">
                    </figure>
                </div>

                <div class="text-box mt-40">
                    <div class="text-content text-justify">
                        <ul>
                            <li class="mb-3">{{ trans('management.obj-l1') }}</li>
                            <li class="mb-3">{{ trans('management.obj-l2') }}</li>
                            <li class="mb-3">{{ trans('management.obj-l3') }}</li>
                            <li class="mb-3">{{ trans('management.obj-l4') }}</li>
                            <li class="mb-3">{{ trans('management.obj-l5') }}</li>
                            <li class="mb-3">{{ trans('management.obj-l6') }}</li>
                            <li class="mb-3">{{ trans('management.obj-l7') }}</li>
                            <li class="mb-3">{{ trans('management.obj-l8') }}</li>
                            <li class="mb-3">{{ trans('management.obj-l9') }}</li>
                            <li class="mb-3">{{ trans('management.obj-l10') }}</li>
                            <li class="mb-3">{{ trans('management.obj-l11') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
