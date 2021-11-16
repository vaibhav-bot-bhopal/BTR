@extends('layouts.master')

@section('title', 'Bandhavgarh Tiger Reserve - Point of Interests')

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
                            {{ trans('navbar.point') }}
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
                    <h2>{{ trans('navbar.point') }}</h2>
                </div>

                <div class="full-pic">
                    <figure>
                        <img src="{{ asset('public/assets/images/btr_actual_image/btr_image46.jpg') }}" alt="">
                    </figure>
                </div>

                <div class="text-box mt-40">
                    <div class="text-content text-justify">
                        <p>{{ trans('tourist.point-p1') }}</p>
                        <p><b>{{ trans('tourist.point-p2') }}</b></p>
                        <p>{{ trans('tourist.point-p3') }}</p>

                        <p><b>{{ trans('tourist.point-p4') }}</b></p>
                        <p>{{ trans('tourist.point-p5') }}</p>
                        <p><b>{{ trans('tourist.point-p6') }}</b></p>
                        <p>{{ trans('tourist.point-p7') }}</p>
                        <p><b>{{ trans('tourist.point-p8') }}</b><p>
                        <p>{{ trans('tourist.point-p9') }}</p>
                        <p><b>{{ trans('tourist.point-p10') }}</b></p>
                        <p>{{ trans('tourist.point-p11') }}</p>
                        <p><b>{{ trans('tourist.point-p12') }}</b></p>
                        <p>{{ trans('tourist.point-p13') }}</p>
                        <p><b>{{ trans('tourist.point-p14') }}</b></p>
                        <p>{{ trans('tourist.point-p15') }}</p>

                        <p><b>{{ trans('tourist.point-p16') }}</b>,</p>
                        <p>{{ trans('tourist.point-p17') }}</p>

                        <p><b>{{ trans('tourist.point-p18') }}</b></p>
                        <p>{{ trans('tourist.point-p19') }}</p>

                        <p><b>{{ trans('tourist.point-p20') }}</b></p>
                        <p>{{ trans('tourist.point-p21') }}</p>

                        <p><b>{{ trans('tourist.point-p22') }}</b></p>
                        <p>{{ trans('tourist.point-p23') }}</p>

                        <p><b>{{ trans('tourist.point-p24') }}</b></p>
                        <p>{{ trans('tourist.point-p25') }}</p>

                        <p><b>{{ trans('tourist.point-p26') }}</b></p>
                        <p>{{ trans('tourist.point-p27') }}</p>

                        <p><b>{{ trans('tourist.point-p28') }}</b></p>
                        <p>{{ trans('tourist.point-p29') }}</p>

                        <p><b>{{ trans('tourist.point-p30') }}</b></p>
                        <p>{{ trans('tourist.point-p31') }}</p>

                        <p><b>{{ trans('tourist.point-p32') }}</b></p>
                        <p>{{ trans('tourist.point-p33') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
