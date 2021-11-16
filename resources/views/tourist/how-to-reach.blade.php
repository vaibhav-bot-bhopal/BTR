@extends('layouts.master')

@section('title', 'Bandhavgarh Tiger Reserve - How to Reach')

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
                            {{ trans('navbar.how-to-reach') }}
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
                    <h2>{{ trans('navbar.how-to-reach') }}</h2>
                </div>

                <div class="full-pic">
                    <figure>
                        <img src="{{ asset('public/assets/images/btr_actual_image/btr_image54.jpeg') }}" alt="">
                    </figure>
                </div>

                <div class="text-box mt-40">
                    <div class="text-content text-justify">
                        <p>{{ trans('tourist.reach-p1') }}</p>
                        <p><b>{{ trans('tourist.reach-h1') }}</b>{{ trans('tourist.reach-p2') }}</p>
                        <p><img src="{{ asset('public/assets/images/team/distance1.jpg') }}" ></p>
                        <p><b>{{ trans('tourist.reach-h2') }}</b>{{ trans('tourist.reach-p3') }}</p>
                        <p><img src="{{ asset('public/assets/images/team/distance2.jpg') }}" ></p></p>
                        <p><b>{{ trans('tourist.reach-h3') }}</b>{{ trans('tourist.reach-p4') }}</p>
                        <p><img src="{{ asset('public/assets/images/team/air.jpg') }}"></p>
                        <figure>
                            <img src="{{ asset('public/assets/images/team/2 - Approach Map.jpg') }}" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
