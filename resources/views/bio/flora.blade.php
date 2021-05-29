@extends('layouts.master')

@section('title', 'Bandhavgarh Tiger Reserve - Flora')

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
                            {{ trans('navbar.flora') }}
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
                    <h2>{{ trans('navbar.flora') }}</h2>
                </div>

                <div class="full-pic">
                    <figure>
                        <img src="{{ asset('public/assets/images/btr_actual_image/btr_image38.jpg') }}" alt="">
                    </figure>
                </div>

                <div class="text-box mt-40">
                    <div class="text-content text-justify">
                        <p>{{ trans('bio.flora-p1') }}</p>
                        <ul>
                            <li><b>{{ trans('bio.flora-l1') }}</b></li>
                            <li><b>{{ trans('bio.flora-l2') }}</b></li>
                            <li><b>{{ trans('bio.flora-l3') }}</b></li>
                        </ul>
                        <p>{{ trans('bio.flora-p2') }}</p>
                        <p>{{ trans('bio.flora-p3') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
