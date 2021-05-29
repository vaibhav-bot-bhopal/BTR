@extends('layouts.master')

@section('title', 'Bandhavgarh Tiger Reserve - Location')

@section('content')
    <!-- Intro Section -->
    <div class="page-header parallax">
        <div class="container">
            <h1 class="title">{{ trans('navbar.tourist-information') }}</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="container">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">{{ trans('navbar.home') }}</a>
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.tourist-information') }}
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.location') }}
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
                <x-tourist-sidebar />
            </div>

            <div class="col-lg-8 col-md-7">
                <div class="box-title mb-20">
                    <h2>{{ trans('navbar.location') }}</h2>
                </div>

                {{-- <div class="full-pic">
                    <figure>
                        <img src="{{ asset('public/assets/images/btr_actual_image/btr_image33.jpg') }}" alt="">
                    </figure>
                </div> --}}

                <div class="text-box mt-40">
                    <div class="text-content text-justify">
                        <p>{{ trans('tourist.tourist-p1') }}</p>
                        <p>{{ trans('tourist.tourist-p2') }}</p>
                        <p><b>Latitude 23&deg; 27' 00'' to 23&deg; 59' 50" North</b></p>
                        <p><b>Longitude 80&deg; 43' 15" to 81&deg; 15' 45" East</b></p>
                        <p>{{ trans('tourist.tourist-p3') }}</p>
                        <figure>
                            <img src="{{ asset('public/assets/images/team/1 - Location Map.jpg') }}" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
