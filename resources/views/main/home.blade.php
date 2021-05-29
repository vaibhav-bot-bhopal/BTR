@extends('layouts.master')

@section('title', 'Bandhavgarh Tiger Reserve')

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
                                <h3><span style="color:#ffcc00">Welcome to </span>Bandhavgarh Tiger Reserve</h3>
                                <h4><p>Celebrating 50 Years of successful Conservation of its Jungles and Wildlife.</p></h4>
                                <a class="btn-text green-bg" href="{{ route('btr.about-introduction') }}"> Know more about Bandhavgarh</a>
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
                                <h3><span style="color:#ffcc00">Welcome to </span>Bandhavgarh Tiger Reserve</h3>
                                <h4><p>The land whose Legends and History are as diverse and interesting as its Flora & Fauna.</p></h4>
                                <a class="btn-text green-bg" href="{{ route('btr.about-introduction') }}"> Know more about Bandhavgarh</a>
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
                                <h3><span style="color:#ffcc00">Welcome to </span>Bandhavgarh Tiger Reserve</h3>
                                <h4><p>A heaven for Wildlife Lovers with its lush green Flora and spellbinding variety of Fauna.</p></h4>
                                <a class="btn-text green-bg" href="{{ route('btr.about-introduction') }}"> Know more about Bandhavgarh</a>
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
                    <h4 class="italic">ABOUT THE </h4>
                    <h2 style="color:#ffcc00">Bandhavgarh <span>Tiger Reserve</span></h2>
                    <p class=" text-justify">
                        Bandhavgarh Tiger Reserve which was notified as National Park in 1968 derives its name from the Legends of Ramayana. It is believed that the Fort inside the park was built by Lord Rama and given to his brother Lakshman and hence the name Bandhavgarh (Bandhav – Brother and Garh – Fort). The forests of Bandhavgarh are where the world famous White Tigers were initially discovered and the origin of all the white tigers in the world can be traced to these forests. Being among the Parks with highest densities of Tiger, the Reserve is an ideal place to see the wild animals in their full grandeur.
                        <a href="{{ route('btr.about-introduction') }}" style="font-weight: 600;"> know more</a>
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
                    <h2><span>What Makes</span> BTR Unique?</h2>
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
                                <h3>Forest</h3>
                            </div>

                            <div class="service_content">
                                <p class="text-justify">
                                    The lush green Jungle of Bandhavgarh consisting of Sal and Mixed Deciduous forests along with green grassy meadows and many areas filled with Bamboos have a mesmerizing effect on the Tourists who visitthe Reserve.
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
                                <h3>Wildlife</h3>
                            </div>

                            <div class="service_content">
                                <p class="text-justify">
                                    Bandhavgarh with one of the highest densities of Tigers and endowed with animals like Leopard, Wild Dogs, Sloth Bear, Wild Boars, Indian Bison, Spotted Deer, Sambar, Chausingha, Chinkara, Ratel etc. along with several species of Birds and Butterflies is a Paradise for Wildlife Lovers.
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
                                <h3>History</h3>
                            </div>

                            <div class="service_content">
                                <p class="text-justify">
                                    With a Fort which is associated to the Legends of “Ramayana” and is also part of the rich past of Maharajas of Rewa, Bandhavgarh’s history is as interesting and diverse as the numerous Temples and sites of archaeological importance found in and around the Reserve.
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
    <section class="our-services gray-bg" id="our-service">
        <div class="container">
            <div class="row pb-30 text-center">
                <div class="col-sm-12 mb-20">
                    <h2><span>Quick&nbsp;</span>Info</h2>
                    <span class="b-line"></span>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 process mb-40">
                    <div class="icon-lf float-left">
                        <i ><img src="{{asset('public/assets/images/info_icon/Plan your Visit.png')}}" width="60" height="60"></i>
                    </div>

                    <div class="right-txt float-right">
                        <h3>Plan Your visit</h3>
                        <p class="text-justify">
                            With high density of Tigers, Bandhavgarh is one of the most sought-after destinations for Tourists wishing to see Tiger in the wild. Planning your tour and booking safaris well in advance is recommended.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 process mb-40">
                    <div class="icon-lf float-left">
                        <i ><img src="{{asset('public/assets/images/info_icon/How to Reach.png')}}" width="60" height="60"></i>
                    </div>

                    <div class="right-txt float-right">
                        <h3>How to Reach</h3>
                        <p class="text-justify">
                            Tala village is the centre point for all tourism infrastructure and activities. It is well connected by road to near-by rail heads Umaria (32 Kms), Katni (97 Kms), Shahdol(97 kms) and Jabalpur(170 kms). Jabalpur(170 Kms) and Khajuraho(240 kms) are the nearest Airports.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 process mb-40">
                    <div class="icon-lf float-left">
                        <i ><img src="{{asset('public/assets/images/info_icon/What to See.png')}}" width="60" height="60"></i>
                    </div>

                    <div class="right-txt float-right">
                        <h3>What to see</h3>
                        <p class="text-justify">
                            Safaris to the core zones are must for all wildlife lovers, with Tala zone being the most preferred. Magadhi zone also has good sightings while Khitauli is fast catching up with the other two. Visitors with cultural and archealogical inclination can visit Sheesh Shaiya and other spots inside the park.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 process mb-40">
                    <div class="icon-lf float-left">
                        <i ><img src="{{asset('public/assets/images/info_icon/Excursion.png')}}" width="60" height="60"></i>
                    </div>

                    <div class="right-txt float-right">
                        <h3>Excursions</h3>
                        <p class="text-justify">
                            Wildlife safaris by the registered Gypsies are conducted in Morning and Evening for all the Zones. Safari bookingsare done online while limited safarisare booked at the Tourist Counter for “Walk-ins”. Other excursions like Elephant Joy Rides, Safari in Canters can be booked from the counter.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 process mb-40">
                    <div class="icon-lf float-left">
                        <i ><img src="{{asset('public/assets/images/info_icon/Stay.png')}}" width="60" height="60"></i>
                    </div>
                    <div class="right-txt float-right">
                        <h3>	Stay</h3>
                        <p class="text-justify">
                            Various kinds of accommodations are available for Tourists in Tala which are provided by the Forest Department and Private parties. Forest Rest House (4 rooms), Family Suites (4 Suites) and Log Huts (5 rooms) are provided by the Department which have to be booked prior to the visit.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 process mb-40">
                    <div class="icon-lf float-left">
                        <i ><img src="{{asset('public/assets/images/info_icon/Contact.png')}}" width="60" height="60"></i>
                    </div>

                    <div class="right-txt float-right">
                        <h3> Contact</h3>
                        <p style="text-transform: none;">
                            Phone: 07653 –222214 , 222724 &nbsp;
                            Mail: dirbandhavgarhNP@mpforest.org <br/>fdbnp.umr@mp.gov.in
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Service Section -->

    <!-- Blog Section -->
    <section id="blog" class="wow fadeIn ptb-80 gray-bg" style="padding-top: 0px!important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-12 mb-xs-30 mb-sm-60">
                    <div class="row pb-30">
                        <div class="col-sm-12 mb-20">
                            <h2><span>Latest</span> News</h2>
                            <span class="b-line l-left"></span>
                        </div>
                    </div>

                    <div class="row">
                        @foreach ($dataen as $item)
                            <div class="col-md-6 col-lg-4 mb-xs-30">
                                <div class="blog-post">
                                    <div class="post-media">
                                        <img src="{{ asset('public/storage/eng_news/'.$item->news_image) }}" alt="" /><span class="event-calender blog-date">{{ $item->created_at->format('d') }} <span>{{ $item->created_at->format('M') }}</span> </span>
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
                                        <a href="#" class="btn btn-md btn-color-line ">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
                    <h2><span>Our</span> Gallery</h2>
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

        <div class="text-center" ><a class="btn-text green-bg" href="{{ route('btr.gallery') }}"> See More</a></div>
    </section>
    <!--End Work-->
@endsection
