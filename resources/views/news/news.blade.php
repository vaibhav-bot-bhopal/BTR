@extends('layouts.master')

@section('title', 'Bandhavgarh Tiger Reserve - News')

@section('content')
    <!-- Intro Section -->
    <div class="page-header parallax">
        <div class="container">
            <h1 class="title">{{ trans('navbar.news') }}</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="container">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">{{ trans('navbar.home') }}</a>
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.news') }}
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
        <div class="row">
            <!-- Post Item -->
            <div class="col-md-12 col-lg-9 mx-auto">

                @if (session('locale') == 'en')
                    <div class="row">
                        @forelse ($dataen as $item)
                            <div class="col-md-12 blog-post-hr">
                                <div class="blog-post mb-30">

                                        <div class="post-media">
                                            {{-- <div id="blog-carousel" class="owl-carousel blog-carousel nf-carousel-theme"> --}}
                                                <div class="item">
                                                    <img src="{{ asset('public/storage/eng_news/'.$item->news_image) }}" alt="News-Image" />
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
                                            <h2><a href="blog-detail.html">{!! Str::limit($item->news_title, 40, '...') !!}</a></h2>
                                        </div>
                                        <div class="post-entry">
                                            <p>
                                                {!! Str::limit($item->news_discription, 40, '...') !!}
                                            </p>
                                        </div>
                                        <div class="post-more-link pull-left">
                                            <a href="{{ route('btr.news-details', $item->news_slug) }}" class="btn-text">Read More</a>
                                        </div>
                                </div>
                                <hr />
                            </div>
                        @empty
                            <div class="col-lg-12 col-md-12 pb-4">
                                <div class="card h-100">
                                    <div class="p-2 text-center my-auto">
                                        <h2>No News Found !!</h2>
                                    </div><!-- single-post -->
                                </div><!-- card -->
                            </div><!-- col-lg-4 col-md-6 -->
                        @endforelse
                    </div>
                @endif

                @if (session('locale') == 'hi')
                    <div class="row">
                        @forelse ($datahi as $item)
                            <div class="col-md-12 blog-post-hr">
                                <div class="blog-post mb-30">

                                        <div class="post-media">
                                            {{-- <div id="blog-carousel" class="owl-carousel blog-carousel nf-carousel-theme"> --}}
                                                <div class="item">
                                                    <img src="{{ asset('public/storage/hin_news/'.$item->news_image) }}" alt="News-Image" />
                                                </div>
                                            {{-- </div> --}}
                                            {{-- <span class="event-calender blog-date"> 21 <span>june</span> </span> --}}
                                        </div>
                                        <div class="post-meta">
                                            <span>व्यवस्थापक <a href="javascript:avoid(0);">द्वारा</a>
                                            {{-- <div class="post-more-link pull-right">
                                                <div class="icons-hover-black">
                                                    <a href="#" class="facebook-icon"> <i class="fa fa-facebook"></i> </a><a href="#" class="twitter-icon"> <i class="fa fa-twitter"></i> </a><a href="#" class="googleplus-icon"> <i class="fa fa-google-plus"></i> </a><a href="#" class="linkedin-icon"> <i class="fa fa-linkedin"></i> </a>
                                                </div>
                                                <a class="get-start btn-Blue xs-hidden"> <i class="ion-android-share-alt"></i></a>
                                            </div> --}}
                                        </div>
                                        <div class="post-header">
                                            <h2><a href="blog-detail.html">{!! Str::limit($item->news_title, 40, '...') !!}</a></h2>
                                        </div>
                                        <div class="post-entry">
                                            <p>
                                                {!! Str::limit($item->news_discription, 40, '...') !!}
                                            </p>
                                        </div>
                                        <div class="post-more-link pull-left">
                                            <a href="{{ route('btr.news-details', $item->news_slug) }}" class="btn-text">अधिक पढ़ें</a>
                                        </div>
                                </div>
                                <hr />
                            </div>
                        @empty
                            <div class="col-lg-12 col-md-12 pb-4">
                                <div class="card h-100">
                                    <div class="p-2 text-center my-auto">
                                        <h2>कोई समाचार नहीं मिला !!</h2>
                                    </div><!-- single-post -->
                                </div><!-- card -->
                            </div><!-- col-lg-4 col-md-6 -->
                        @endforelse
                    </div>
                @endif

                <!-- Pagination Nav -->
                <div class="pagination-nav text-left mt-60 mtb-xs-30">
                    @if ($dataen->lastPage() > 1)
                        <ul>
                            @if ($dataen->onFirstPage())
                                <li><a class="{{ ($dataen->currentPage() == 1) ? 'disabled' : '' }}"><i class="fa fa-angle-left"></i></a></li>
                            @else
                                <li><a href="{{$dataen->previousPageUrl()}}"><i class="fa fa-angle-left"></i></a></li>
                            @endif

                            @for ($i = 1; $i <= $dataen->lastPage(); $i++)
                                <li>
                                    <a class="{{ ($dataen->currentPage() == $i) ? ' active' : '' }}" href="{{ $dataen->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor

                            @if ($dataen->hasMorePages())
                                <li><a class="{{ ($dataen->currentPage() == $dataen->lastPage()) ? ' disabled' : '' }}" href="{{$dataen->nextPageUrl()}}"><i class="fa fa-angle-right"></i></a></li>
                            @else
                                <li><a><i class="fa fa-angle-right"></i></a></li>
                            @endif

                        </ul>
                    @endif
                </div>
                <!-- End Pagination Nav -->
            </div>
            <!-- End Post Item -->
        </div>
    </div>
</section>
<!-- End Blog Post Section -->
@endsection
