@extends('layouts.master')

@section('title', 'Bandhavgarh Tiger Reserve - Charges')

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
                            {{ trans('navbar.excursion') }}
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
                    <h2>{{ trans('navbar.excursion') }}</h2>
                </div>

                <div class="full-pic">
                    <figure>
                        <img src="{{ asset('public/assets/images/btr_actual_image/btr_image41.jpg') }}" alt="">
                    </figure>
                </div>

                <div class="text-box mt-40">
                    <div class="text-content text-justify">
                        <p>{{ trans('tourist.charges-p1') }}</p>
                        <p>{{ trans('tourist.charges-p2') }}</p>
                        <ul class="pl-3">
                            <li class="pb-3"><b>{{ trans('tourist.charges-l1') }}</b></li>
                            <li type="circle">
                                <p>{{ trans('tourist.charges-l2') }}</p>
                            </li>
                            <li type="circle">
                                <p>{{ trans('tourist.charges-l3') }}</p>
                            </li>
                        </ul>

                        <ul class="pl-3">
                            <li class="pb-3"><b>{{ trans('tourist.charges-l4') }}</b></li>
                            <li type="circle">
                                <p>{{ trans('tourist.charges-l5') }}</p>
                            </li>
                            <li type="circle">
                                <p>{{ trans('tourist.charges-l6') }}</p>
                            </li>
                        </ul>

                        <ul class="pl-3">
                            <li class="pb-3"><b>{{ trans('tourist.charges-l7') }}</b></li>
                            <li type="circle">
                                <p>{{ trans('tourist.charges-l8') }}</p>
                            </li>
                        </ul>

                        <ul class="pl-3">
                            <li class="pb-3"><b>{{ trans('tourist.charges-l9') }}</b></li>
                            <li class="pb-3">{{ trans('tourist.charges-l10') }}</li>
                            <ol class="pl-3">
                                <li class="pb-3">{{ trans('tourist.charges-l11') }}</li>
                                <li class="pb-3">{{ trans('tourist.charges-l12') }}</li>
                            </ol>
                            <li class="pb-3">{{ trans('tourist.charges-l13') }}</li>
                            <li class="pb-3">{{ trans('tourist.charges-l14') }}</li>
                            <li class="pb-3">{{ trans('tourist.charges-l15') }}</li>
                            <li class="pb-3">{{ trans('tourist.charges-l16') }}</li>
                        </ul>

                        <ul class="pl-3">
                            <li class="pb-3"><b>{{ trans('tourist.charges-l17') }}</b></li>
                            <p>{{ trans('tourist.charges-p3') }}</p>
                            <p>{{ trans('tourist.charges-p4') }}</p>
                        </ul>

                        <ul class="pl-3">
                            <li class="pb-3"><b>{{ trans('tourist.charges-l18') }}</b></li>
                            <p><b>{{ trans('tourist.charges-p5') }}</b></p>
                            <p>{{ trans('tourist.charges-p6') }}</p>
                            <p>{{ trans('tourist.charges-p7') }}</p>
                            <figure>
                                <img src="{{ asset('public/assets/images/team/1.jpg') }}" alt="">
                            </figure>
                            <li class="pb-3"><b>{{ trans('tourist.charges-l19') }}</b></li>
                            <figure>
                                <img src="{{ asset('public/assets/images/team/2.jpg') }}" alt="">
                            </figure>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
