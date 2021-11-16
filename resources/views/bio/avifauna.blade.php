@extends('layouts.master')

@section('title', 'Bandhavgarh Tiger Reserve - Avifauna')

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
                            {{ trans('navbar.avifauna') }}
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
                    <h2>{{ trans('navbar.avifauna') }}</h2>
                </div>

                <div class="full-pic">
                    <figure>
                        <img src="{{ asset('public/assets/images/btr_actual_image/btr_image29.jpg') }}" alt="">
                    </figure>
                </div>

                <div class="text-box mt-40">
                    <div class="text-content text-justify">
                        <p>{{ trans('bio.avifauna-p1') }}</p>
                        <p>{{ trans('bio.avifauna-p2') }}</p>
                        <ul>
                            <li class="pb-2">{{ trans('bio.avifauna-l1') }}</li>
                            <li class="pb-2">{{ trans('bio.avifauna-l2') }}</li>
                            <li class="pb-2">{{ trans('bio.avifauna-l3') }}</li>
                            <li class="pb-2">{{ trans('bio.avifauna-l4') }}</li>
                            <li class="pb-2">{{ trans('bio.avifauna-l5') }}</li>
                            <li class="pb-2">{{ trans('bio.avifauna-l6') }}</li>
                            <li class="pb-2">{{ trans('bio.avifauna-l7') }}</li>
                            <li class="pb-2">{{ trans('bio.avifauna-l8') }}</li>
                            <li class="pb-2">{{ trans('bio.avifauna-l9') }}</li>
                            <li class="pb-2">{{ trans('bio.avifauna-l10') }}</li>
                            <li class="pb-2">{{ trans('bio.avifauna-l11') }}</li>
                            <li class="pb-2">{{ trans('bio.avifauna-l12') }}</li>
                        </ul>
                        <p>{{ trans('bio.avifauna-p3') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
