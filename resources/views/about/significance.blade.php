@extends('layouts.master')

@section('title', 'Bandhavgarh Tiger Reserve - Significance')

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
                            <a href="{{ route('btr.index') }}">{{ trans('navbar.home') }}</a>
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.about') }}
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.significance') }}
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
                    <h2>{{ trans('navbar.significance') }}</h2>
                </div>

                <div class="full-pic">
                    <figure>
                        <img src="{{ asset('public/assets/images/btr_actual_image/btr_image49.jpg') }}" alt="">
                    </figure>
                </div>

                <div class="text-box mt-40">
                    <div class="text-content text-justify">
                        <p>{{ trans('about.significance-p1') }}</p>
                        <p>{{ trans('about.significance-p2') }}</p>
                        <ul>
                            <li class="mb-3">{{ trans('about.significance-l1') }}</li>
                            <li class="mb-3">{{ trans('about.significance-l2') }}</li>
                            <li class="mb-3">{{ trans('about.significance-l3') }}</li>
                            <li class="mb-3">{{ trans('about.significance-l4') }}</li>
                            <li class="mb-3">{{ trans('about.significance-l5') }}</li>
                            <li class="mb-3">{{ trans('about.significance-l6') }}</li>
                            <li class="mb-3">{{ trans('about.significance-l7') }}</li>
                        </ul>
                        <p>{{ trans('about.significance-p3') }}</p>
                        <p>{{ trans('about.significance-p4') }}</p>
                        <p>{{ trans('about.significance-p5') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
