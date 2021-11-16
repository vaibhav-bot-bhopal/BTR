<div>
    <div>
        <div class="single-sidebar-widget">
            <div class="special-links">
                <ul>
                    <li>
                        <a href="{{ route('btr.bio-introduction') }}" class="{{ Request::is('bio/introduction') ? 'active' : '' }}">{{ trans('navbar.introduction') }}</a>
                    </li>

                    <ul class="link blog-link">
                        <li>
                            <a href="{{ route('btr.flora') }}" class="{{ Request::is('bio/flora') ? 'active' : '' }}">{{ trans('navbar.flora') }}</a>
                        </li>

                        <li>
                            <a href="{{ route('btr.fauna') }}" class="{{ Request::is('bio/fauna') ? 'active' : '' }}">{{ trans('navbar.fauna') }}</a>
                        </li>

                        <li>
                            <a href="{{ route('btr.avifauna') }}" class="{{ Request::is('bio/avifauna') ? 'active' : '' }}">{{ trans('navbar.avifauna') }}</a>
                        </li>

                        <li>
                            <a href="{{ route('btr.butterflies') }}" class="{{ Request::is('bio/butterflies') ? 'active' : '' }}">{{ trans('navbar.butterflies') }}</a>
                        </li>

                        <li>
                            <a href="{{ route('btr.rare-species') }}" class="{{ Request::is('bio/rare-species') ? 'active' : '' }}">{{ trans('navbar.rare-species') }}</a>
                        </li>
                    </ul>
                </ul>
            </div>
        </div>

        {{-- <div class="single-sidebar-widget">
            <div class="sec-title">
                <h2>Download<span> brochure</span></h2>
                <span>Here is some useful documents</span>
            </div>

            <ul class="brochure-btns">
                <li>
                    <a href="BTR.pdf" class="clearfix" target="_blank"><i class="fa fa-file-pdf-o"></i> <span>Download Brochure</span></a>
                </li>
            </ul>
        </div> --}}
    </div>
</div>
