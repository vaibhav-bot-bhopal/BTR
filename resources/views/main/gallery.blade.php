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
                            <a href="{{ route('btr.index') }}">{{ trans('navbar.home') }}</a>
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
            <div class="row container-grid nf-col-3 mb-4">
                @forelse($photos as $photo)
                    <div class="nf-item branding coffee spacing">
                        <div >
                            <a href="{{ asset('public/storage/gallery/'.$photo->filename) }}" target="_blank">
                                <img alt="gallery-image" src="{{ asset('public/storage/gallery/'.$photo->filename) }}" class="item-container" height="230">
                            </a>
                        </div>
                    </div>
                @empty
                    @if (session('locale') == 'en')
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2 class="text-center" style="font-weight: 600;">No Gallery Found !!</h2>
                        </div>
                    @endif

                    @if (session('locale') == 'hi')
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2 class="text-center" style="font-weight: 600;">कोई गैलरी नहीं मिली !!</h2>
                        </div>
                    @endif

                @endforelse
            </div>

            <!-- Pagination Section Start Here -->
            <div class="d-flex justify-content-center">
                {!! $photos->links() !!}
            </div>
            <!-- Pagination Section End Here -->
        </div>
    </section>
    <!-- Work Section End -->
@endsection
