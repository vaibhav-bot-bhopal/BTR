@extends('layouts.master')

@section('title', 'Bandhavgarh Tiger Reserve')

@push('css')
    <style>
        .btn-color-line:hover {
            background: #6cbe03;
            color: #fff;
        }

        .client-avtar {
            border: 0px solid #6cbe03!important;
        }
    </style>
@endpush

@section('content')
    <!-- Main Banner -->
    <div class="main-banner banner_up">
        <div id="rev_slider_34_1_wrapper" class="rev_slider_wrapper" data-alias="news-gallery34">
            <!-- START REVOLUTION SLIDER fullwidth mode -->
            <div id="rev_slider_34_1" class="rev_slider" data-version="5.0.7">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-129"  >
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('public/assets/images/banner/banner_img1.jpg')}}"  alt=""  class="rev-slidebg" >
                        <!-- LAYERS -->
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption Newspaper-Title tp-resizeme "
                        id="slide-129-layer-1"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['center','center','center','center']" data-voffset="['0','0','0','0']"
                        data-fontsize="['50','50','50','30']"
                        data-lineheight="['55','55','55','35']"
                        data-width="['600','600','600','420']"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                        data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                        data-start="1000"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on">

                            <div class="banner-text text-center">
                                <h3><span style="color:#ffcc00">{{ trans('home.welcome') }}</span>{{ trans('home.btr') }}</h3>
                                <h4><p>{{ trans('home.slider-p1') }}</p></h4>
                                <a class="btn-text green-bg" href="{{ route('btr.about-introduction') }}">{{ trans('home.know') }}</a>
                            </div>
                        </div>
                    </li>

                    <!-- SLIDE  -->
                    <li data-index="rs-130" data-title="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('public/assets/images/banner/banner_img2.jpg')}}"  alt=""  class="rev-slidebg">
                        <!-- LAYERS -->
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption Newspaper-Title   tp-resizeme "
                        id="slide-130-layer-1"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['center','center','center','center']" data-voffset="['0','0','0','0']"
                        data-fontsize="['50','50','50','30']"
                        data-lineheight="['55','55','55','35']"
                        data-width="['600','600','600','420']"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                        data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                        data-start="1000"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on">
                            <div class="banner-text text-center">
                                <h3><span style="color:#ffcc00">{{ trans('home.welcome') }}</span>{{ trans('home.btr') }}</h3>
                                <h4><p>{{ trans('home.slider-p2') }}</p></h4>
                                <a class="btn-text green-bg" href="{{ route('btr.about-introduction') }}">{{ trans('home.know') }}</a>
                            </div>
                        </div>
                    </li>

                    <!-- SLIDE  -->
                    <li data-index="rs-131">
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('public/assets/images/banner/banner_img3.jpg')}}"  alt=""  class="rev-slidebg" >
                        <!-- LAYERS -->
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption Newspaper-Title   tp-resizeme "
                        id="slide-131-layer-1"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['center','center','center','center']" data-voffset="['0','0','0','0']"
                        data-fontsize="['50','50','50','30']"
                        data-lineheight="['55','55','55','35']"
                        data-width="['600','600','600','420']"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                        data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                        data-start="1000"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on">
                            <div class="banner-text text-center">
                                <h3><span style="color:#ffcc00">{{ trans('home.welcome') }}</span>{{ trans('home.btr') }}</h3>
                                <h4><p>{{ trans('home.slider-p3') }}</p></h4>
                                <a class="btn-text green-bg" href="{{ route('btr.about-introduction') }}">{{ trans('home.know') }}</a>
                            </div>
                        </div>
                    </li>
                    <!-- SLIDE  -->
                </ul>

                <div class="tp-bannertimer tp-bottom"></div>
            </div>
        </div>
    </div>
    <!-- Main Banner End-->

    <!-- Our Services Section -->
    <section id="about_us" class="padding ptb-xs-40 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-5 about-left">
                    <h4 class="italic">{{ trans('home.about-the') }}</h4>
                    <h2 style="color:#ffcc00">{{ trans('home.bandhav') }}<span>{{ trans('home.tiger') }}</span></h2>
                    <p class=" text-justify">
                        {{ trans('home.about-p1') }}
                        <a href="{{ route('btr.about-introduction') }}" style="font-weight: 600;">{{ trans('home.know-more') }}</a>
                    </p>
                </div>

                <div class="col-md-12 col-lg-7">
                    {{-- <div class="row"> --}}
                        {{-- <div style="float:right"> --}}
                        <iframe class="pull-right" width="100%" height="350" src="https://www.youtube-nocookie.com/embed/IkbsuOHDTyg?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        {{-- </div> --}}
                    {{-- </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Want to learn -->
    <div class="padding ptb-xs-40 different-sec">
        <div class="container">
            <div class="row pb-30 text-center ">
                <div class="col-sm-12 mb-20">
                    <h2><span>{{ trans('home.what-makes') }}</span>{{ trans('home.btr-unique') }}</h2>
                    <span class="b-line"></span>
                </div>
            </div>

            <div class="row light-color">
                <div class="col-md-4 col-lg-4">
                    <div class="text__block dark-color d-flex align-items-center">
                        <div class="service_icon">
                            1
                        </div>

                        <div class="about__block-box resposive-use">
                            <div class="service_details">
                                <h3>{{ trans('home.forest') }}</h3>
                            </div>

                            <div class="service_content">
                                <p class="text-justify">
                                    {{ trans('home.forest-p') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4">
                    <div class="text__block dark-color d-flex align-items-center">
                        <div class="service_icon">
                            2
                        </div>

                        <div class="about__block-box">
                            <div class="service_details">
                                <h3>{{ trans('home.wildlife') }}</h3>
                            </div>

                            <div class="service_content">
                                <p class="text-justify">
                                    {{ trans('home.wildlife-p') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4">
                    <div class="text__block dark-color d-flex align-items-center">
                        <div class="service_icon">
                            3
                        </div>

                        <div class="about__block-box">
                            <div class="service_details">
                                <h3>{{ trans('home.history') }}</h3>
                            </div>

                            <div class="service_content">
                                <p class="text-justify">
                                    {{ trans('home.history-p') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Want to learn End-->

    <!-- Service Section -->
    <section class="our-services gray-bg" id="our-service" style="padding: 80px 0 40px;">
        <div class="container">
            <div class="row pb-30 text-center">
                <div class="col-sm-12 mb-20">
                    <h2><span>{{ trans('home.quick') }}&nbsp;</span>{{ trans('home.info') }}</h2>
                    <span class="b-line"></span>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 process mb-40">
                    <div class="icon-lf float-left">
                        <i ><img src="{{asset('public/assets/images/info_icon/Plan your Visit.png')}}" width="60" height="60"></i>
                    </div>

                    <div class="right-txt float-right">
                        <h3>{{ trans('home.plan-your-visit') }}</h3>
                        <p class="text-justify">
                            {{ trans('home.plan-your-visit-p') }}
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 process mb-40">
                    <div class="icon-lf float-left">
                        <i ><img src="{{asset('public/assets/images/info_icon/How to Reach.png')}}" width="60" height="60"></i>
                    </div>

                    <div class="right-txt float-right">
                        <h3>{{ trans('home.how-to-reach') }}</h3>
                        <p class="text-justify">
                            {{ trans('home.how-to-reach-p') }}
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 process mb-40">
                    <div class="icon-lf float-left">
                        <i ><img src="{{asset('public/assets/images/info_icon/What to See.png')}}" width="60" height="60"></i>
                    </div>

                    <div class="right-txt float-right">
                        <h3>{{ trans('home.what-to-see') }}</h3>
                        <p class="text-justify">
                            {{ trans('home.what-to-see-p') }}
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 process mb-40">
                    <div class="icon-lf float-left">
                        <i ><img src="{{asset('public/assets/images/info_icon/Excursion.png')}}" width="60" height="60"></i>
                    </div>

                    <div class="right-txt float-right">
                        <h3>{{ trans('home.excursions') }}</h3>
                        <p class="text-justify">
                            {{ trans('home.excursions-p') }}
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 process mb-40">
                    <div class="icon-lf float-left">
                        <i ><img src="{{asset('public/assets/images/info_icon/Stay.png')}}" width="60" height="60"></i>
                    </div>
                    <div class="right-txt float-right">
                        <h3>{{ trans('home.stay') }}</h3>
                        <p class="text-justify">
                            {{ trans('home.stay-p') }}
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 process mb-40">
                    <div class="icon-lf float-left">
                        <i ><img src="{{asset('public/assets/images/info_icon/Contact.png')}}" width="60" height="60"></i>
                    </div>

                    <div class="right-txt float-right">
                        <h3>{{ trans('home.contact') }}</h3>
                        <p style="text-transform: none;">
                            {{ trans('home.contact-phone') }} 07653 –222214 , 222724 &nbsp;
                            {{ trans('home.contact-mail') }} dirbandhavgarhNP@mpforest.org <br/>fdbnp.umr@mp.gov.in
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Service Section -->

    <!-- Tender Section -->
    <div id="testimonial-section" class="faq padding pt-xs-40">
        <div class="container">
            <div class="row text-center pb-30">
                <div class="col-sm-12">
                    <div class="heading-box ">
                        <h2>{{__('home.tender-heading-1')}}<span>{{__('home.tender-heading-2')}}</span></h2>
                        <span class="b-line"></span>
                    </div>
                </div>
            </div>
            <div class="row mt-60">
                @forelse ($tenders as $tender)
                    @if ($tender->last_date <= Carbon\Carbon::now()->toDateTimeString())
                    @else
                        <div class="col-md-12 col-lg-4 mb-80">
                            <div class="about-block gray-bg padding-40 clearfix">
                                <div class="client-avtar">
                                    @if ($tender->file_extension)
                                        @if ($tender->file_extension == 'doc' || $tender->file_extension == 'docx')
                                            <img src="{{asset('public/assets/images/doc-icon/word.png')}}" class="img-responsive rounded" alt="doc-image">
                                        @endif

                                        @if ($tender->file_extension == 'xls' || $tender->file_extension == 'xlsx')
                                            <img src="{{asset('public/assets/images/doc-icon/excel.png')}}" class="img-responsive rounded" alt="doc-image">
                                        @endif

                                        @if ($tender->file_extension == 'pdf')
                                            <img src="{{asset('public/assets/images/doc-icon/pdf.png')}}" class="img-responsive rounded" alt="doc-image">
                                        @endif
                                    @endif
                                </div>
                                <div class="text-box">
                                    <div class="box-title">
                                        <h4>{{$tender->title}}</h4>
                                    </div>

                                    <div class="text-content">
                                        <p>
                                            {!! Str::limit($tender->description, 200, '...') !!}
                                        </p>
                                    </div>

                                    <a href="public/storage/tender-documents/{{ $tender->filename }}" download="{{$tender->original_filename}}" class="btn btn-primary" style="background-color: #6cbe03; color: #ffffff; border: 2px solid #6cbe03">{{__('home.btn-download')}}</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @empty
                    <div class="col-lg-12 col-md-12 pb-4 mt-0">
                        <div class="p-2 text-center">
                            <h2>{{__('home.tender-not-found')}}</h2>
                        </div><!-- single-post -->
                    </div><!-- col-lg-4 col-md-6 -->
                @endforelse
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="post-more-link text-center">
                        <a href="{{ route('btr.tenders') }}" class="btn btn-md btn-color-line ">{{ trans('home.view-all-tender') }}</a>
                    </div>
                </div>
            </div>

            <!-- Collape Section End Here -->
        </div>
    </div>
    <!-- Tender Section -->

    <!-- Blog Section -->
    <section id="blog" class="wow fadeIn ptb-80 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-12 mb-xs-30 mb-sm-60">
                    <div class="row pb-30 text-center">
                        <div class="col-sm-12 mb-20">
                            <h2><span>{{ trans('home.latest') }} </span>{{ trans('home.news') }}</h2>
                            <span class="b-line"></span>
                        </div>
                    </div>

                    @if (session('locale') == 'en')
                        <div class="row">
                            @forelse ($dataen as $item)
                                <div class="col-md-6 col-lg-4 mb-xs-30">
                                    <div class="blog-post">
                                        <div class="post-media">
                                            <img src="{{ asset('public/storage/eng_news/'.$item->news_image) }}" alt="" height="250px"/>
                                        </div>
                                        <div class="post-meta">
                                            <span>by <a href="javascript:avoid(0);">Admin</a>
                                        </div>
                                        <div class="post-header">
                                            <h4><a href="#">{!! Str::limit($item->news_title, 40, '...') !!}</a></h4>
                                        </div>
                                        <div class="post-entry">
                                            <p class="text-justify">
                                                {!! Str::limit($item->news_discription, 150, '...') !!}
                                            </p>
                                        </div>
                                        <div class="post-more-link pull-left">
                                            <a href="{{ route('btr.news-details', $item->news_slug) }}" class="btn btn-md btn-color-line ">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-lg-12 col-md-12 pb-4">
                                        <div class="p-2 text-center">
                                            <h2>{{__('home.news-not-found')}}</h2>
                                        </div><!-- single-post -->
                                </div><!-- col-lg-4 col-md-6 -->
                            @endforelse
                        </div>
                    @endif

                    @if (session('locale') == 'hi')
                        <div class="row">
                            @forelse ($datahi as $item)
                                <div class="col-md-6 col-lg-4 mb-xs-30">
                                    <div class="blog-post">
                                        <div class="post-media">
                                            <img src="{{ asset('public/storage/hin_news/'.$item->news_image) }}" alt="" height="250px"/>
                                        </div>
                                        <div class="post-meta">
                                            <span>व्यवस्थापक <a href="javascript:avoid(0);">द्वारा</a>
                                        </div>
                                        <div class="post-header">
                                            <h4><a href="#">{!! Str::limit($item->news_title, 40, '...') !!}</a></h4>
                                        </div>
                                        <div class="post-entry">
                                            <p class="text-justify">
                                                {!! Str::limit($item->news_discription, 150, '...') !!}
                                            </p>
                                        </div>
                                        <div class="post-more-link pull-left">
                                            <a href="{{ route('btr.news-details', $item->news_slug) }}" class="btn btn-md btn-color-line ">अधिक पढ़ें</a>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-lg-12 col-md-12 pb-4">
                                        <div class="p-2 text-center">
                                            <h2>{{__('home.news-not-found')}}</h2>
                                        </div><!-- single-post -->
                                </div><!-- col-lg-4 col-md-6 -->
                            @endforelse
                        </div>
                    @endif

                    <div class="row mt-5">
                        <div class="col-12">
                            <div class="post-more-link text-center">
                                <a href="{{ route('btr.newses') }}" class="btn btn-md btn-color-line ">{{ trans('home.view-all') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Section -->

    <!-- Work Section -->
    <section id="work" class="padding ptb-xs-60">
        <div class="container">
            <div class="row pb-30 text-center">
                <div class="col-sm-12 mb-20">
                    <h2><span>{{ trans('home.our') }} </span>{{ trans('home.gallery') }}</h2>
                    <span class="b-line"></span>
                </div>
            </div>

            <div class="row container-masonry nf-col-4">

                <div class="nf-item w2x branding coffee spacing">
                    <div class="item-box">
                        <a href="Gallery.html"><img alt="1" src="{{asset('public/assets/images/portfolio3/1.jpg')}}" class="item-container"></a>
                    </div>
                </div>

                <div class="nf-item grid-sizer photo spacing">
                    <div class="item-box">
                        <a> <img alt="1" src="{{asset('public/assets/images/portfolio3/2.jpg')}}" class="item-container"> </a>
                    </div>
                </div>

                <div class="nf-item branding photo spacing">
                    <div class="item-box">
                        <a> <img alt="1" src="{{asset('public/assets/images/portfolio3/3.jpg')}}" class="item-container"> </a>
                    </div>
                </div>

                <div class="nf-item design spacing">
                    <div class="item-box">
                        <a> <img alt="1" src="{{asset('public/assets/images/portfolio3/4.jpg')}}" class="item-container"> </a>
                    </div>
                </div>

                <div class="nf-item photo spacing">
                    <div class="item-box">
                        <a> <img alt="1" src="{{asset('public/assets/images/portfolio3/5.jpg')}}" class="item-container"> </a>
                    </div>
                </div>

            </div>

        </div>

        <div class="text-center" ><a class="btn-text green-bg" href="{{ route('btr.gallery') }}">{{ trans('home.see-more') }}</a></div>
    </section>
    <!--End Work-->
@endsection
