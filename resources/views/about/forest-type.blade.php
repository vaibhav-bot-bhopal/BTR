@extends('layouts.master')

@section('title', 'Bandhavgarh Tiger Reserve - Forest Type')

@section('content')
    <!-- Intro Section -->
    <div class="page-header parallax">
        <div class="container">
            <h1 class="title">{{ trans('navbar.about') }}</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="container">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">{{ trans('navbar.home') }}</a>
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.about') }}
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.forest-type') }}
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
                <x-about-sidebar />
            </div>

            <div class="col-lg-8 col-md-7">
                <div class="box-title mb-20">
                    <h2>{{ trans('navbar.forest-type') }}</h2>
                </div>

                <div class="full-pic">
                    <figure>
                        <img src="{{ asset('public/assets/images/btr_actual_image/btr_image43.jpg') }}" alt="">
                    </figure>
                </div>

                <div class="text-box mt-40">
                    <div class="text-content text-justify">
                        <p>{{ trans('about.forest-p1') }}</p>
                        <ul>
                            <li class="mb-3"><b>{{ trans('about.forest-l1') }}</b></li>
                            <li class="mb-3"><b>{{ trans('about.forest-l2') }}</b></li>
                            <li class="mb-3"><b>{{ trans('about.forest-l3') }}</b></li>
                            <li class="mb-3"><b>{{ trans('about.forest-l4') }}</b></li>
                        </ul>
                        <p>{{ trans('about.forest-p2') }}</p>
                        <ul>
                            <li class="mb-3"><b>{{ trans('about.forest-l5') }}</b></li>
                            <li class="mb-3"><b>{{ trans('about.forest-l6') }}</b></li>
                            <li class="mb-3"><b>{{ trans('about.forest-l7') }}</b></li>
                        </ul>
                        <p>{{ trans('about.forest-p3') }}</p>
                        <p>{{ trans('about.forest-p4') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
