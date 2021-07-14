<!--Footer Section Start-->
<footer class="main_footer__block">
    <div class="pb-0 pt-60 footer-link">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="footer_box__block">
                        <h4>{{ trans('footer.about') }}</h4>
                        <p class="text-justify">
                            {{ trans('footer.about-p1') }}
                        </p>
                        <p class="text-justify">
                            {{ trans('footer.about-p2') }} <br/>
                            <a href="{{ route('btr.about-introduction') }}" style="color: #ffcc00!important; font-weight: 600;">{{ trans('footer.know-more') }}</a>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="footer_box__block">
                        <h4>{{ trans('footer.important') }}</h4>
                        <ul>
                            <li>
                                <a href="{{ route('btr.how-to-reach') }}">{{ trans('footer.how-to-reach') }}</a>
                            </li>

                            <li>
                                <a href="{{ route('btr.best-time-to-visit') }}">{{ trans('footer.best-time-to-visit') }}</a>
                            </li>

                            <li>
                                <a href="{{ route('btr.stay') }}">{{ trans('footer.where-to-stay') }}</a>
                            </li>

                            <li>
                                <a href="{{ route('btr.safari-zones') }}">{{ trans('footer.safari-zones') }}</a>
                            </li>

                            <li>
                                <a href="{{ route('btr.point-of-interests') }}">{{ trans('footer.point-of-interests') }}</a>
                            </li>

                            <li>
                                <a href="{{ route('btr.dos') }}">{{ trans('footer.dos') }}</a>                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="footer_box__block">
                        <h4>{{ trans('footer.useful-links') }}</h4>
                        <ul>
                            <li>
                                <a href="http://www.mpforest.gov.in" target="_blank">{{ trans('footer.mfd') }}</a>
                            </li>

                            <li>
                                <a href="http://www.mptigerfoundation.org" target="_blank">{{ trans('footer.mtf') }}</a>
                            </li>

                            <li>
                                <a href="http://projecttiger.nic.in/" target="_blank">{{ trans('footer.ntca') }}</a>
                            </li>

                            <li>
                                <a href="http://www.wii.gov.in/" target="_blank">{{ trans('footer.wii') }}</a>
                            </li>

                            <li>
                                <a href="https://forest.mponline.gov.in/" target="_blank" >{{ trans('footer.safari-booking') }}</a>
                            </li>

                            <li>
                                <a href="https://mptiger.mponline.gov.in/Portal/Services/MPTiger/GeneralDonation/DonationType.aspx" target="_blank">{{ trans('footer.donate') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="footer_box__block address-box">
                        <h4>{{ trans('footer.contact') }}</h4>
                        <ul>
                            <li>
                                <i class="fa fa-phone"></i>
                                <p>{{ trans('footer.call-us') }} - (07653) 222 214, 222724</p>
                            </li>

                            <li>
                                <i class="fa fa-envelope-o"></i>
                                <p>
                                    <a href="mailto:info@example.com">dirbandhavgarhNP@mpforest.org <p>fdbnp.umr@mp.gov.in</p></a>
                                </p>
                            </li>

                            <li>
                                <i class="fa fa-map-marker"></i>
                                <p>
                                    {{ trans('footer.field-director') }}
                                </p>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            <div class="copyright_block ptb-20 mt-20">
                <div class="text-center">
                    <a href="{{ route('btr.index') }}" target="_blank" class="cpy-box">{{ trans('footer.btr') }}</a>
                    &copy;&nbsp {{ trans('footer.copyright') }}
                </div>

                <div class="text-center">
                    {{ trans('footer.developed') }}<a href="https://blueoceantech.in/" target="_blank" class="cmp-box">{{ trans('footer.bot') }}</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Footer Section End-->
