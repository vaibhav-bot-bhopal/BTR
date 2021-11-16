@extends('layouts.master')

@section('title', 'Bandhavgarh Tiger Reserve - Reserve Profile')

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
                            {{ trans('navbar.reserve-profile') }}
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
                    <h2>{{ trans('navbar.reserve-profile') }}</h2>
                </div>

                <div class="full-pic">
                    <figure>
                        <img src="{{ asset('public/assets/images/btr_actual_image/btr_image52.jpg') }}" alt="">
                    </figure>
                </div>

                <div class="text-box mt-40">
                    <div class="text-content text-justify">
                        <br/>
                        <p>{{ trans('about.brp') }}<b>{{ trans('about.total-area') }}</b></p>
                        <p><b>{{ trans('about.core-area') }}</b></p>
                        <p><b>{{ trans('about.buffer-area') }}</b></p>
                        <p><b>{{ trans('about.longitude') }}	 80&deg; 43' 15" to 81&deg; 15' 45" {{ trans('about.east') }}</b></p>
                        <p><b>{{ trans('about.latitude') }}	23&deg; 27' 00'' to 23&deg; 59' 50" {{ trans('about.north') }}</b></p>

                        <br/>
                        <p>{{ trans('about.altitude') }}</p>
                        <p>{{ trans('about.rainfall') }}</p>
                        <p>{{ trans('about.max') }} {{ trans('about.june') }}</p>
                        <p>{{ trans('about.min') }} {{ trans('about.jan') }}</p>

                        <br/>
                        <p><b>{{ trans('about.seasons') }}</b></p>
                        <p>{{ trans('about.summer') }}<p>
                        <p>{{ trans('about.monsoon') }}</p>
                        <p>{{ trans('about.winter') }}</p>

                        <br/>
                        <p><b>{{ trans('about.core') }}</b></p>
                        <p>{{ trans('about.tala') }}</p>

                        <br/>
                        <p><b>{{ trans('about.buffer') }}</b></p>
                        <p>{{ trans('about.dhamokhar') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
