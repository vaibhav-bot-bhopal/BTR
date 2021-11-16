@extends('layouts.master')

@section('title', 'Bandhavgarh Tiger Reserve - Management Goals')

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
                            {{ trans('navbar.management-goals') }}
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
                    <h2>{{ trans('navbar.management-goals') }}</h2>
                </div>

                <div class="full-pic">
                    <figure>
                        <img src="{{ asset('public/assets/images/btr_actual_image/btr_image56.jpg') }}" alt="">
                    </figure>
                </div>

                <div class="text-box mt-40">
                    <div class="text-content text-justify">
                        <ul>
                            <li><b>{{ trans('management.goals-l1') }}</b></li>
                            <p>{{ trans('management.goals-p1') }}</p>
                        </ul>

                        <ul>
                            <li><b>{{ trans('management.goals-l2') }}</b></li>
                            <p>{{ trans('management.goals-p2') }}</p>
                        </ul>

                        <ul>
                            <li><b>{{ trans('management.goals-l3') }}</b></li>
                            <p>{{ trans('management.goals-p3') }}</p>
                        </ul>

                        <ul>
                            <li><b>{{ trans('management.goals-l4') }}</b></li>
                            <p>{{ trans('management.goals-p4') }}</p>
                        </ul>

                        <ul>
                            <li><b>{{ trans('management.goals-l5') }}</b></li>
                            <p>{{ trans('management.goals-p5') }}</p>
                        </ul>

                        <ul>
                            <li><b>{{ trans('management.goals-l6') }}</b></li>
                            <p>{{ trans('management.goals-p6') }}</p>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
