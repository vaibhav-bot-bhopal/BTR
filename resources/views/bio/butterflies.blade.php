@extends('layouts.master')

@section('title', 'Bandhavgarh Tiger Reserve - Butterflies')

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
                            <a href="{{ route('btr.index') }}">{{ trans('navbar.home') }}</a>
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.bio-diversity') }}
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.butterflies') }}
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
                    <h2>{{ trans('navbar.butterflies') }}</h2>
                </div>

                <div class="full-pic">
                    <figure>
                        <img src="{{ asset('public/assets/images/btr_actual_image/btr_image61.jpg') }}" alt="">
                    </figure>
                </div>

                <div class="text-box mt-40">
                    <div class="text-content text-justify">
                        <p>{{ trans('bio.butterflies-p1') }}</p>
                        <ul>
                            <li class="pb-2">{{ trans('bio.butterflies-l1') }}</li>
                            <li class="pb-2">{{ trans('bio.butterflies-l2') }}</li>
                            <li class="pb-2">{{ trans('bio.butterflies-l3') }}</li>
                            <li class="pb-2">{{ trans('bio.butterflies-l4') }}</li>
                            <li class="pb-2">{{ trans('bio.butterflies-l5') }}</li>
                            <li class="pb-2">{{ trans('bio.butterflies-l6') }}</li>
                            <li class="pb-2">{{ trans('bio.butterflies-l7') }}</li>
                            <li class="pb-2">{{ trans('bio.butterflies-l8') }}</li>
                            <li class="pb-2">{{ trans('bio.butterflies-l9') }}</li>
                            <li class="pb-2">{{ trans('bio.butterflies-l10') }}</li>
                            <li class="pb-2">{{ trans('bio.butterflies-l11') }}</li>
                            <li class="pb-2">{{ trans('bio.butterflies-l12') }}</li>
                            <li class="pb-2">{{ trans('bio.butterflies-l13') }}</li>
                            <li class="pb-2">{{ trans('bio.butterflies-l14') }}</li>
                            <li class="pb-2">{{ trans('bio.butterflies-l15') }}</li>
                            <li class="pb-2">{{ trans('bio.butterflies-l16') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
