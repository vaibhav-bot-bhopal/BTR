<!--loader-->
<div id="preloader">
    <div class="sk-circle">
        <div class="sk-circle1 sk-child"></div>
        <div class="sk-circle2 sk-child"></div>
        <div class="sk-circle3 sk-child"></div>
        <div class="sk-circle4 sk-child"></div>
        <div class="sk-circle5 sk-child"></div>
        <div class="sk-circle6 sk-child"></div>
        <div class="sk-circle7 sk-child"></div>
        <div class="sk-circle8 sk-child"></div>
        <div class="sk-circle9 sk-child"></div>
        <div class="sk-circle10 sk-child"></div>
        <div class="sk-circle11 sk-child"></div>
        <div class="sk-circle12 sk-child"></div>
    </div>
</div>
<!--loader-->

<!-- HEADER -->
<!--Start header area-->
<header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-12 col-xs-12 mt-3">
                <div class="logo d-flex">
                    {{-- <a href="index.html"> --}}
                        <img src="{{asset('public/assets/images/bandhavgarh_logo.png')}}" alt="BTR-Logo">
                        <h2 class="my-auto ml-2">{{ trans('navbar.btr') }}</h2>
                    {{-- </a> --}}
                </div>
            </div>
            <div class="col-lg-4 mt-0 text-lg-right text-center">
                <ul class="navbar-nav ml-auto language">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ 'news-details' == Request::segment(1) ? 'my-nav' : '' }}" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @if(Session::has('locale'))
                            @if(session('locale') == 'hi')
                                {{ 'Choose Language / भाषा चुनें :- हिंदी' }}
                            @else
                                {{ 'Choose Language / भाषा चुनें :- English' }}
                            @endif
                        @else
                        {{Config::get('app.locale')}}
                        @endif
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="left: 35px; margin-top: 8px;">
                            <a class="dropdown-item" href="{{url('language/en')}}">English</a>
                            <a class="dropdown-item" href="{{url('language/hi')}}">हिंदी</a>
                        </div>
                    </li>
                </ul>
                <a href="https://mptiger.mponline.gov.in/Portal/Services/MPTiger/GeneralDonation/DonationType.aspx" target="_blank">
                    <img src="{{asset('public/assets/images/donation.png')}}" alt="Dontaion-Logo">
                </a>
            </div>
            {{-- <div id="large_box">
                <div id="box1" >
                    <a href="index.html">
                        <img src="{{asset('public/assets/images/bandhavgarh_logo.png')}}" alt="BTR-Logo">
                    </a>
                </div>

                <div id="box2">
                    <h2>BANDHAVGARH TIGER RESERVE</h2>
                </div>

                <div id="box3">
                    <a href="https://mptiger.mponline.gov.in/Portal/Services/MPTiger/GeneralDonation/DonationType.aspx" target="_blank">
                        <img src="{{asset('public/assets/images/donation.png')}}" alt="Dontaion-Logo">
                    </a>
                </div>

                <div id="clear"></div>
            </div> --}}
        </div>
    </div>
</header>
<!--End header area-->

<!--Start mainmenu area-->
<section class="mainmenu-area">
    <div class="container">
        <div class="mainmenu-bg">

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <!--Start mainmenu-->
                    <nav class="main-menu navbar-toggleable-md">
                        <div class="navbar-header hidden-lg-up">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <!-- ==========================	Desktop Nav ============================ -->
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix" >
                                <li>
                                    <a href="{{ route('btr.index') }}">{{ trans('navbar.home') }}</a>
                                </li>

                                <li>
                                    <a href="#">{{ trans('navbar.about') }}</a>
                                    <ul class="sub-nav">
                                        <li>
                                            <a href="{{ route('btr.about-introduction') }}">{{ trans('navbar.introduction') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.history') }}" class="active">{{ trans('navbar.history') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.conservation-history') }}">{{ trans('navbar.conservation-history') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.reserve-profile') }}">{{ trans('navbar.reserve-profile') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.forest-type') }}">{{ trans('navbar.forest-type') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.topography') }}">{{ trans('navbar.topography') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.significance') }}">{{ trans('navbar.significance') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">{{ trans('navbar.bio-diversity') }}</a>
                                    <ul class="sub-nav">
                                        <li>
                                            <a href="{{ route('btr.bio-introduction') }}">{{ trans('navbar.introduction') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.flora') }}" class="active">{{ trans('navbar.flora') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.fauna') }}">{{ trans('navbar.fauna') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.avifauna') }}">{{ trans('navbar.avifauna') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.butterflies') }}">{{ trans('navbar.butterflies') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.rare-species') }}">{{ trans('navbar.rare-species') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">{{ trans('navbar.tourist-information') }}</a>
                                    <ul class="sub-nav">
                                        <li>
                                            <a href="{{ route('btr.location') }}">{{ trans('navbar.location') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.how-to-reach') }}" class="active">{{ trans('navbar.how-to-reach') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.best-time-to-visit') }}">{{ trans('navbar.best-time-to-visit') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.weather') }}">{{ trans('navbar.weather') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.safari-zones') }}">{{ trans('navbar.safari-zones') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.excursion') }}">{{ trans('navbar.excursion') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.point-of-interests') }}">{{ trans('navbar.point') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.stay') }}">{{ trans('navbar.stay') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.dos') }}">{{ trans('navbar.dos') }}</a>
                                        </li>

                                         <li>
                                            <a href="https://forest.mponline.gov.in/" target="_blank";>{{ trans('navbar.safari-booking') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">{{ trans('navbar.btr-management') }}</a>
                                    <ul class="sub-nav">
                                        <li>
                                            <a href="{{ route('btr.admin-body') }}">{{ trans('navbar.administrative-body') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.goals') }}" class="active">{{ trans('navbar.management-goals') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.objectives') }}">{{ trans('navbar.management-objectives') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.training') }}">{{ trans('navbar.training') }}</a>
                                        </li>

                                        <li>
                                            <a href="https://mptiger.mponline.gov.in/Portal/Services/MPTiger/GeneralDonation/DonationType.aspx" target="_blank">{{ trans('navbar.donation') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.contact') }}">{{ trans('navbar.contact') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="{{ route('btr.gallery') }}">{{ trans('navbar.gallery') }}</a>
                                </li>
                            </ul>


                            <!-- ==========================	Mobile Nav ============================ -->
                            <ul class="mobile-menu clearfix">
                                <li>
                                    <a href="{{ route('btr.index') }}">{{ trans('navbar.home') }}</a>
                                </li>

                                <li>
                                    <a href="#">{{ trans('navbar.about') }}</a>
                                    <span class="submenu-button"></span>

                                    <ul class="sub-nav">
                                        <li>
                                            <a href="{{ route('btr.about-introduction') }}">{{ trans('navbar.introduction') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.history') }}" class="active">{{ trans('navbar.history') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.conservation-history') }}">{{ trans('navbar.conservation-history') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.reserve-profile') }}">{{ trans('navbar.reserve-profile') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.forest-type') }}">{{ trans('navbar.forest-type') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.topography') }}">{{ trans('navbar.topography') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.significance') }}">{{ trans('navbar.significance') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">{{ trans('navbar.bio-diversity') }}</a>
                                    <span class="submenu-button"></span>

                                    <ul class="sub-nav">
                                        <li>
                                            <a href="{{ route('btr.bio-introduction') }}">{{ trans('navbar.introduction') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.flora') }}" class="active">{{ trans('navbar.flora') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.fauna') }}">{{ trans('navbar.fauna') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.avifauna') }}">{{ trans('navbar.avifauna') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.butterflies') }}">{{ trans('navbar.butterflies') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.rare-species') }}">{{ trans('navbar.rare-species') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">{{ trans('navbar.tourist-information') }}</a>
                                    <span class="submenu-button"></span>

                                    <ul class="sub-nav">
                                        <li>
                                            <a href="{{ route('btr.location') }}">{{ trans('navbar.location') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.how-to-reach') }}" class="active">{{ trans('navbar.how-to-reach') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.best-time-to-visit') }}">{{ trans('navbar.best-time-to-visit') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.weather') }}">{{ trans('navbar.weather') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.safari-zones') }}">{{ trans('navbar.safari-zones') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.excursion') }}">{{ trans('navbar.excursion') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.point-of-interests') }}">{{ trans('navbar.point') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.stay') }}">{{ trans('navbar.stay') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.dos') }}">{{ trans('navbar.dos') }}</a>
                                        </li>

                                        <li>
                                            <a href="https://forest.mponline.gov.in/" target="_blank";>{{ trans('navbar.safari-booking') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">{{ trans('navbar.btr-management') }}</a>
                                    <span class="submenu-button"></span>

                                    <ul class="sub-nav">
                                        <li>
                                            <a href="{{ route('btr.admin-body') }}">{{ trans('navbar.administrative-body') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.goals') }}" class="active">{{ trans('navbar.management-goals') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.objectives') }}">{{ trans('navbar.management-objectives') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.training') }}">{{ trans('navbar.training') }}</a>
                                        </li>

                                        <li>
                                            <a href="https://mptiger.mponline.gov.in/Portal/Services/MPTiger/GeneralDonation/DonationType.aspx">{{ trans('navbar.donation') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="{{ route('btr.gallery') }}">{{ trans('navbar.gallery') }}</a>
                                </li>

                                <li>
                                    <a href="{{ route('btr.contact') }}">{{ trans('navbar.contact') }}</a>
                                </li>
                            </ul>

                        </div>
                    </nav>
                    <!--End mainmenu-->
                </div>
            </div>

            <div class="right-column">
                <div class="right-area">
                    <div class="nav_side_content"></div>
                    <div class="link_btn float_right">
                        <a href="https://forest.mponline.gov.in/" target="_blank" class="thm-btn bg-clr1">{{ trans('navbar.safari-booking') }}</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--End mainmenu area-->
<!-- END HEADER -->
