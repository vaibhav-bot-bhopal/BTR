@extends('layouts.master')

@section('title', 'Bandhavgarh Tiger Reserve - Gallery')

@section('content')
    <!-- Intro Section -->
    <div class="page-header parallax">
        <div class="container">
            <h1 class="title">{{ trans('navbar.gallery') }}</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="container">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">{{ trans('navbar.home') }}</a>
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.gallery') }}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Intro Section -->

    <!-- Work Section -->
    <section id="work" class="padding">
        <div class="container">
            <div class="row container-grid nf-col-3">
                @foreach($images as $image)
                    <div class="nf-item branding coffee spacing">
                        <div >
                            <a href="{{ asset('public/assets/images/btr_actual_image').'/'.$image }}" target="_blank">
                                <img alt="gallery-image" src="{{ asset('public/assets/images/btr_actual_image').'/'.$image }}" class="item-container" height="230">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination Section Start Here -->
            <div class="text-center" style="padding-top:90px;">
                <a style="background-color: #FFFFFF; color:#000000; font-size:17px; font-weight:bold" class="btn-text green-bg {{ 'gallery' == Request::path() ? 'active' : '' }}" href="{{ url('gallery') }}"> 1</a>
                <a class="btn-text green-bg {{ 'gallery/2' == Request::path() ? 'active' : '' }}" href="{{ url('gallery/2') }}"> 2</a>
                <a class="btn-text green-bg {{ 'gallery/3' == Request::path() ? 'active' : '' }}" href="{{ url('gallery/3') }}">3</a>
            </div>
            <!-- Pagination Section End Here -->
        </div>
    </section>
    <!-- Work Section End -->
@endsection
