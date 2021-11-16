@extends('layouts.master')

@section('title', 'Bandhavgarh Tiger Reserve - Safari Zone')

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
                            <a href="{{ route('btr.index') }}">{{ trans('navbar.home') }}</a>
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.tourist-information') }}
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.safari-zones') }}
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
                    <h2>{{ trans('navbar.safari-zones') }}</h2>
                </div>

                <div class="full-pic">
                    <figure>
                        <img src="{{ asset('public/assets/images/btr_actual_image/btr_image57.jpg') }}" alt="">
                    </figure>
                </div>

                <div class="text-box mt-40">
                    <div class="text-content text-justify">
                        <p>{{ trans('tourist.zone-p1') }}</p>
                        <p>{{ trans('tourist.zone-p2') }}</p>
                        <p>{{ trans('tourist.zone-p3') }}</p>
                        <p>{{ trans('tourist.zone-p4') }}</p>
                        <p>{{ trans('tourist.zone-p5') }}</p>
                        <p><b>{{ trans('tourist.zone-p6') }}</b><p>
                        <p><b>{{ trans('tourist.zone-p7') }}</b></p>
                        <p><b>{{ trans('tourist.zone-p8') }}</b></p>
                        <figure>
                            <img src="{{ asset('public/assets/images/team/zone1.jpg') }}" alt="">
                        </figure>
                        <p><b>{{ trans('tourist.zone-p9') }}</b></p>
                        <figure>
                            <img src="{{ asset('public/assets/images/team/zone2.jpg') }}" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
