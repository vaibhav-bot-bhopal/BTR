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
            <div class="col-lg-12 col-sm-12 col-xs-12 mt-3 mb-3 text-center">
                <div class="d-flex justify-content-between">
                    <a href="{{ route('btr.index') }}" class="d-flex">
                        <img src="{{asset('public/assets/images/bandhavgarh_logo.png')}}" alt="BTR-Logo">
                        <h2 class="my-auto ml-2" style="line-height: 40px!important;">{{ trans('navbar.btr') }}</h2>
                    </a>

                    <a href="https://mptiger.mponline.gov.in/" target="_blank">
                        <img src="{{asset('public/assets/images/donation.png')}}" alt="Dontaion-Logo">
                    </a>
                </div>
            </div>
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

                                <li>
                                    <a href="#">{{ trans('navbar.info-corner') }}</a>

                                    <ul class="sub-nav">
                                        <li>
                                            <a href="{{ route('btr.newses') }}">{{ trans('navbar.news') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.tenders') }}" class="active">{{ trans('navbar.tender') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.docs') }}">{{ trans('navbar.docs') }}</a>
                                        </li>
                                    </ul>
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
                                    <a href="#">{{ trans('navbar.info-corner') }}</a>
                                    <span class="submenu-button"></span>

                                    <ul class="sub-nav">
                                        <li>
                                            <a href="{{ route('btr.newses') }}">{{ trans('navbar.news') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.tenders') }}" class="active">{{ trans('navbar.tender') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('btr.docs') }}">{{ trans('navbar.docs') }}</a>
                                        </li>
                                    </ul>
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

                        <ul class="navbar-nav language thm-btn bg-clr1">
                            <!-- Language Dropdown Menu -->
                            <li class="nav-item dropdown">
                                <!-- New Language Switcher -->
                                <a class="nav-link dropdown-toggle hover bdr" data-toggle="dropdown" href="#">
                                    <img src="{{ asset('public/assets/images/icons/google-translate.png') }}" width="24" height="24" alt="Google-Translate" class="img-fluid"> {{ Config::get('languages')[App::getLocale()]['display'] }}
                                    <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right pt-1 pb-1">
                                    @foreach (Config::get('languages') as $lang => $language)
                                        @if ($lang != App::getLocale())
                                            <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"><span class="flag-icon flag-icon-{{$language['flag-icon']}}" style="margin-right: 8px!important"></span> {{$language['display']}}</a>
                                        @endif
                                    @endforeach
                                </div>
                            </li>

                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle {{ 'news-details' == Request::segment(1) ? 'my-nav' : '' }}" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @if(Session::has('locale'))
                                    @if(session('locale') == 'hi')
                                        {{ trans('navbar.hindi') }}
                                    @else
                                        {{ trans('navbar.english') }}
                                    @endif
                                @else
                                {{Config::get('app.locale')}}
                                @endif
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="left: -21px; margin-top: 0px; border-radius: 0;">
                                    <a class="dropdown-item" href="{{url('language/en')}}">{{ trans('navbar.english') }}</a>
                                    <a class="dropdown-item" href="{{url('language/hi')}}">{{ trans('navbar.hindi') }}</a>
                                </div>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--End mainmenu area-->
<!-- END HEADER -->
