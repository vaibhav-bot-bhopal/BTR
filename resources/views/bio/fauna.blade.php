@extends('layouts.master')

@section('title', 'Bandhavgarh Tiger Reserve - Fauna')

@section('content')
    <!-- Intro Section -->
    <div class="page-header parallax">
        <div class="container">
            <h1 class="title">Bio Diversity</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="container">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">{{ trans('navbar.home') }}</a>
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.bio-diversity') }}
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.fauna') }}
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
                <x-bio-sidebar />
            </div>

            <div class="col-lg-8 col-md-7">
                <div class="box-title mb-20">
                    <h2>{{ trans('navbar.fauna') }}</h2>
                </div>

                <div class="full-pic">
                    <figure>
                        <img src="{{ asset('public/assets/images/btr_actual_image/btr_image55.jpg') }}" alt="">
                    </figure>
                </div>

                <div class="text-box mt-40">
                    <div class="text-content text-justify">
                        <p>{{ trans('bio.fauna-p1') }}</p>
                        <p><b>{{ trans('bio.fauna-p2') }}</b></p>
                        <p>{{ trans('bio.fauna-p3') }}</p>
                        <p>{{ trans('bio.fauna-p4') }}</p>
                        <ul>
                            <li class="pb-2">{{ trans('bio.fauna-l1') }}</li>
                            <li class="pb-2">{{ trans('bio.fauna-l2') }}</li>
                            <li class="pb-2">{{ trans('bio.fauna-l3') }}</li>
                            <li class="pb-2">{{ trans('bio.fauna-l4') }}</li>
                            <li class="pb-2">{{ trans('bio.fauna-l5') }}</li>
                            <li class="pb-2">{{ trans('bio.fauna-l6') }}</li>
                            <li class="pb-2">{{ trans('bio.fauna-l7') }}</li>
                            <li class="pb-2">{{ trans('bio.fauna-l8') }}</li>
                            <li class="pb-2">{{ trans('bio.fauna-l9') }}</li>
                            <li class="pb-2">{{ trans('bio.fauna-l10') }}</li>
                            <li class="pb-2">{{ trans('bio.fauna-l11') }}</li>
                            <li class="pb-2">{{ trans('bio.fauna-l12') }}</li>
                            <li class="pb-2">{{ trans('bio.fauna-l13') }}</li>
                            <li class="pb-2">{{ trans('bio.fauna-l14') }}</li>
                            <li class="pb-2">{{ trans('bio.fauna-l15') }}</li>
                            <li class="pb-2">{{ trans('bio.fauna-l16') }}</li>
                            <li>{{ trans('bio.fauna-l17') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
