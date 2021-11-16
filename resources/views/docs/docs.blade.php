@extends('layouts.master')

@section('title', 'Bandhavgarh Tiger Reserve - Documents')

@push('css')
    <style>
        .client-avtar {
            border: 0px solid #6cbe03!important;
        }

        #toast-container .toast-error {
            background-color: #dc3545;
            opacity: 1;
        }
    </style>
@endpush

@section('content')
    <!-- Intro Section -->
    <div class="page-header parallax">
        <div class="container">
            <h1 class="title">{{ trans('home.docs-heading-1') }} {{ trans('home.docs-heading-2') }}</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="container">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('btr.index') }}">{{ trans('navbar.home') }}</a>
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('home.docs-heading-1') }} {{ trans('home.docs-heading-2') }}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Intro Section -->

    <!-- Tender Section -->
    <div id="testimonial-section" class="faq padding pt-xs-40">
        <div class="container">
            <div class="row text-center pb-30">
                <div class="col-sm-12">
                    <div class="heading-box ">
                        <h2>{{__('home.docs-heading-1')}}<span>{{__('home.docs-heading-2')}}</span></h2>
                        <span class="b-line"></span>
                    </div>
                </div>
            </div>
            <div class="row mt-60">
                @forelse ($docs as $doc)
                    <div class="col-md-12 col-lg-4 mb-80">
                        <div class="about-block gray-bg padding-40 clearfix">
                            <div class="client-avtar">
                                @if ($doc->file_extension)
                                    @if ($doc->file_extension == 'doc' || $doc->file_extension == 'docx')
                                        <img src="{{asset('public/assets/images/doc-icon/word.png')}}" class="img-responsive rounded" alt="doc-image">
                                    @endif

                                    @if ($doc->file_extension == 'pdf')
                                        <img src="{{asset('public/assets/images/doc-icon/pdf.png')}}" class="img-responsive rounded" alt="doc-image">
                                    @endif
                                @endif
                            </div>
                            <div class="text-box">
                                <div class="box-title">
                                    <h4>{{$doc->title}}</h4>
                                </div>

                                <div class="text-content">
                                    <p>
                                        {!! Str::limit($doc->description, 200, '...') !!}
                                    </p>
                                </div>

                                <a href="{{ route('btr.docs.download', $doc->original_filename) }}" class="btn btn-primary" style="background-color: #6cbe03; color: #ffffff; border: 2px solid #6cbe03"><i class="fa fa-download" style="margin-right: 4px;"></i>{{__('home.btn-download')}}</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-lg-12 col-md-12 pb-4">
                        <div class="p-2 text-center">
                            <h2>{{__('home.docs-not-found')}}</h2>
                        </div><!-- single-post -->
                    </div><!-- col-lg-4 col-md-6 -->
                @endforelse
            </div>
            <!-- Collape Section End Here -->
        </div>

        <!-- Pagination Nav -->
        <div class="pagination-nav text-left mtb-xs-30">
            @if ($docs->lastPage() > 1)
                <ul>
                    @if ($docs->onFirstPage())
                        <li><a class="{{ ($docs->currentPage() == 1) ? 'disabled' : '' }}"><i class="fa fa-angle-left"></i></a></li>
                    @else
                        <li><a href="{{$docs->previousPageUrl()}}"><i class="fa fa-angle-left"></i></a></li>
                    @endif

                    @for ($i = 1; $i <= $docs->lastPage(); $i++)
                        <li>
                            <a class="{{ ($docs->currentPage() == $i) ? ' active' : '' }}" href="{{ $docs->url($i) }}">{{ $i }}</a>
                        </li>
                    @endfor

                    @if ($tenders->hasMorePages())
                        <li><a class="{{ ($docs->currentPage() == $docs->lastPage()) ? ' disabled' : '' }}" href="{{$docs->nextPageUrl()}}"><i class="fa fa-angle-right"></i></a></li>
                    @else
                        <li><a><i class="fa fa-angle-right"></i></a></li>
                    @endif

                </ul>
            @endif
        </div>
        <!-- End Pagination Nav -->

    </div>
    <!-- End Tender Section -->
@endsection
