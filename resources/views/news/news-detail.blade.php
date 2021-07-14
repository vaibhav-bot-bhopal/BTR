@extends('layouts.master')

@section('title', 'Bandhavgarh Tiger Reserve - News Detail')

@section('content')
    <!-- Intro Section -->
    <div class="page-header parallax">
        <div class="container">
            <h1 class="title">{{ trans('navbar.news-detail') }}</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="container">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">{{ trans('navbar.home') }}</a>
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.news-detail') }}
                        </li>

                        {{-- <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.introduction') }}
                        </li> --}}
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Intro Section -->

<!-- Blog Post Section -->
<section class="ptb-80 ptb-xs-40">
    <div class="container">
        @if (session('locale') == 'en')
            <div class="row">
                <!-- Post Item -->
                <div class="col-md-12 col-lg-9 mx-auto">
                    <div class="row">
                        <div class="col-md-12 blog-post-hr">
                            <div class="blog-post mb-30">

                                <div class="post-media">
                                    {{-- <div id="blog-carousel" class="owl-carousel blog-carousel nf-carousel-theme"> --}}
                                        <div class="item">
                                            <img src="{{ asset('public/storage/eng_news/'.$detailen->news_image) }}" alt="News-Image" />
                                        </div>
                                    {{-- </div> --}}
                                    {{-- <span class="event-calender blog-date"> 21 <span>june</span> </span> --}}
                                </div>
                                <div class="post-meta">
                                    <span>by <a href="javascript:avoid(0);">Admin</a>
                                    {{-- <div class="post-more-link pull-right">
                                        <div class="icons-hover-black">
                                            <a href="#" class="facebook-icon"> <i class="fa fa-facebook"></i> </a><a href="#" class="twitter-icon"> <i class="fa fa-twitter"></i> </a><a href="#" class="googleplus-icon"> <i class="fa fa-google-plus"></i> </a><a href="#" class="linkedin-icon"> <i class="fa fa-linkedin"></i> </a>
                                        </div>
                                        <a class="get-start btn-Blue xs-hidden"> <i class="ion-android-share-alt"></i></a>
                                    </div> --}}
                                </div>
                                <div class="post-header">
                                    <h2><a href="javascript:avoid(0);">{{$detailen->news_title}}</a></h2>
                                </div>
                                <div class="post-entry">
                                    <p>
                                        {!! $detailen->news_discription !!}
                                    </p>
                                </div>

                            </div>
                            <hr />
                        </div>
                    </div>

                </div>
                <!-- End Post Item -->
            </div>
        @endif


        @if (session('locale') == 'hi')
            <div class="row">
                <!-- Post Item -->
                <div class="col-md-12 col-lg-9 mx-auto">
                    <div class="row">
                        <div class="col-md-12 blog-post-hr">
                            <div class="blog-post mb-30">

                                <div class="post-media">
                                    {{-- <div id="blog-carousel" class="owl-carousel blog-carousel nf-carousel-theme"> --}}
                                        <div class="item">
                                            <img src="{{ asset('public/storage/hin_news/'.$detailhi->news_image) }}" alt="News-Image" />
                                        </div>
                                    {{-- </div> --}}
                                    {{-- <span class="event-calender blog-date"> 21 <span>june</span> </span> --}}
                                </div>
                                <div class="post-meta">
                                    <span>व्यवस्थापक  <a href="javascript:avoid(0);">द्वारा</a>
                                    {{-- <div class="post-more-link pull-right">
                                        <div class="icons-hover-black">
                                            <a href="#" class="facebook-icon"> <i class="fa fa-facebook"></i> </a><a href="#" class="twitter-icon"> <i class="fa fa-twitter"></i> </a><a href="#" class="googleplus-icon"> <i class="fa fa-google-plus"></i> </a><a href="#" class="linkedin-icon"> <i class="fa fa-linkedin"></i> </a>
                                        </div>
                                        <a class="get-start btn-Blue xs-hidden"> <i class="ion-android-share-alt"></i></a>
                                    </div> --}}
                                </div>
                                <div class="post-header">
                                    <h2><a href="javascript:avoid(0);">{{$detailhi->news_title}}</a></h2>
                                </div>
                                <div class="post-entry">
                                    <p>
                                        {!! $detailhi->news_discription !!}
                                    </p>
                                </div>

                            </div>
                            <hr />
                        </div>
                    </div>

                </div>
                <!-- End Post Item -->
            </div>
        @endif
    </div>
</section>
<!-- End Blog Post Section -->
@endsection
