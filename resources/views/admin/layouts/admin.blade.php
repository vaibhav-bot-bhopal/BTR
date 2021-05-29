<!DOCTYPE html>
<html>
<html lang="{{session('locale')}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/assets/images/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('public/assets/images/favicon.png')}}">
    <title>Bandhavgarh Tiger Reserve | Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('public/assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('public/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('public/assets/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('public/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Dropzone CSS -->
    <link rel="stylesheet" href="{{asset('public/assets/dz/dropzone.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/dz/custom-dz.css')}}">
    <!-- flag-icon-css -->
    <link rel="stylesheet" href="{{asset('public/assets/plugins/flag-icon-css/css/flag-icon.min.css')}}">
    <!-- Alert -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <!-- MyStyle -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/mystyle.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    @stack('css')
</head>

<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            @if (session('locale') == 'en')
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('/') }}" class="nav-link" target="_blank">Home</a>
                </li>
            @endif

            @if (session('locale') == 'hi')
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('/') }}" class="nav-link" target="_blank">होम</a>
                </li>
            @endif
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Language Dropdown Menu -->
            <li class="nav-item dropdown">
                @if (Session::has('locale'))
                    @if(session('locale') == 'hi')
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="flag-icon flag-icon-in" style="margin-right: 8px!important"></i>{{ 'Language/भाषा :- हिंदी' }}
                        </a>
                    @else
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="flag-icon flag-icon-us" style="margin-right: 8px!important"></i>{{ 'Language/भाषा : English' }}
                        </a>
                    @endif
                @else
                    {{Config::get('app.locale')}}
                @endif

                <div class="dropdown-menu dropdown-menu-right p-0">

                    <a href="{{url('language/en')}}" class="dropdown-item {{session('locale') == 'en' ? 'active' : ''}}">
                        <i class="flag-icon flag-icon-us mr-2"></i> English
                    </a>
                    <a href="{{url('language/hi')}}" class="dropdown-item {{session('locale') == 'hi' ? 'active' : ''}}">
                        <i class="flag-icon flag-icon-in mr-2"></i> हिंदी
                    </a>
                </div>
            </li>

            @if (session('locale') == 'en')
                <!-- User Dropdown Menu -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <i class="fas fa-sign-out-alt"></i>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            @endif

            @if (session('locale') == 'hi')
                <!-- User Dropdown Menu -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <i class="fas fa-sign-out-alt"></i>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('लॉग आउट') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            @endif
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{route('news_show')}}" class="brand-link">
            <img src="{{ asset('public/assets/images/bandhavgarh_logo.png') }}" alt="BTR-Logo" class="brand-image img-circle elevation-3"
                style="opacity: .8">
            <span class="brand-text font-weight-light" style="font-size: 16px;">{{ trans('navbar.btr') }}</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
                <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview menu-open">
                        <ul class="nav nav-treeview">
                            @if (session('locale') == 'en')
                                <li class="nav-item">
                                    <a href="{{ url('admin/news') }}" class="nav-link {{ 'admin/news' == request()->path() ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>News <span class="right badge badge-danger">English</span></p>
                                    </a>
                                </li>
                            @endif

                            @if (session('locale') == 'hi')
                                <li class="nav-item">
                                    <a href="{{ url('admin/news') }}" class="nav-link {{ 'admin/news' == request()->path() ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>न्यूज़ <span class="right badge badge-danger">Hindi</span></p>
                                    </a>
                                </li>
                            @endif

                            {{-- @if (session('locale') == 'en')
                                <li class="nav-item">
                                    <a href="{{ url('admin/event') }}" class="nav-link {{ 'admin/event' == request()->path() ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Events <span class="right badge badge-warning">English</span></p>
                                    </a>
                                </li>
                            @endif --}}

                            {{-- @if (session('locale') == 'hi')
                                <li class="nav-item">
                                    <a href="{{ url('admin/event') }}" class="nav-link {{ 'admin/event' == request()->path() ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>इवेंट्स <span class="right badge badge-warning">Hindi</span></p>
                                    </a>
                                </li>
                            @endif --}}

                            @if (session('locale') == 'en')
                                <li class="nav-item">
                                    <a href="{{ url('admin/images') }}" class="nav-link {{ 'admin/images' == request()->path() ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Upload Gallery <span class="right badge badge-warning">English</span></p>
                                    </a>
                                </li>
                            @endif

                            @if (session('locale') == 'hi')
                                <li class="nav-item">
                                    <a href="{{ url('admin/images') }}" class="nav-link {{ 'admin/images' == request()->path() ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>अपलोड गैलरी <span class="right badge badge-warning">Hindi</span></p>
                                    </a>
                                </li>
                            @endif

                            @if (session('locale') == 'en')
                                <li class="nav-item">
                                    <a href="{{ url('admin/images-show') }}" class="nav-link {{ 'admin/images-show' == request()->path() ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Gallery <span class="right badge badge-info">English</span></p>
                                    </a>
                                </li>
                            @endif

                            @if (session('locale') == 'hi')
                                <li class="nav-item">
                                    <a href="{{ url('admin/images-show') }}" class="nav-link {{ 'admin/images-show' == request()->path() ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>व्यू गैलरी <span class="right badge badge-info">Hindi</span></p>
                                    </a>
                                </li>
                            @endif

                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <main class="">
            @yield('content')
        </main>
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <strong><a href="{{route('news_show')}}">{{ trans('navbar.btr') }}</a>.</strong>
        ©&nbsp;All Rights Reserved
    </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('public/assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Toastr -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('public/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('public/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- Dropzone JS -->
<script src="{{ asset('public/assets/dz/dropzone.min.js') }}"></script>
<script src="{{ asset('public/assets/dz/custom-dz.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('public/assets/dist/js/adminlte.js') }}"></script>
<!-- CKEDITOR -->
<script src="//cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        //Alert
        setTimeout(function() {
            $('.alert').slideUp('slow');
        }, 4000);

        // Initialize CKEDITOR
        $('.ckeditor').ckeditor();
    });
</script>

<script>
    toastr.options = {
    "closeButton": true,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
    }
</script>

@if(session('success'))
    <script>toastr.success("{!! session('success') !!}")</script>
@endif
@if(session('error'))
    <script>toastr.error("{!! session('error') !!}")</script>
@endif

@stack('js')
</body>
</html>
