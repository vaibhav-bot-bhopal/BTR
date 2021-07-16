<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="keywords" content="Bandhavgarh Tiger Reserve, Bandhavgarh National Park, Bandhavgarh Tiger Official, Bandhavgarh Tiger Reserve Official Webside, Bandhavgarh National Park official"/>
		<meta name="keywords" content="Bandhavgarh safari booking, Bandhavgarh tiger reserve online safari booking official, Bandhavgarh online safari booking official, Bandhavgarh tiger reserve online booking official">
		<meta name="keywords" content="Bandhavgarh official, Bandhavgarh official website, Bandhavgarh official safari booking, Bandhavgarh online booking,  "/>
		<meta name="refresh" content="60"/>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<title>@yield('title')</title>

		<link rel="shortcut icon" type="image/x-icon" href="{{asset('public/assets/images/favicon.png')}}">
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,800%7CLato:300,400,700" rel="stylesheet" type="text/css">
		<link href="{{asset('public/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('public/assets/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('public/assets/css/ionicons.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('public/assets/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('public/assets/css/flaticon.css')}}" rel="stylesheet" type="text/css">

		<!--Main Slider-->
		<link href="{{asset('public/assets/css/settings.css')}}" type="text/css" rel="stylesheet" media="screen">
		<link href="{{asset('public/assets/css/layers.css')}}" type="text/css" rel="stylesheet" media="screen">

		<!--Light box-->
		<link href="{{asset('public/assets/css/jquery.fancybox.css')}}" rel="stylesheet" type="text/css">

		<!-- carousel -->
		<link href="{{asset('public/assets/css/owl.carousel.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('public/assets/css/owl.transitions.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('public/assets/css/style.css')}}" rel="stylesheet">
        @stack('css')
	</head>


	<body>

        @include('layouts.partial.header')

        @yield('content')

        @include('layouts.partial.footer')

        <script type="text/javascript" src="{{asset('public/assets/js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/assets/js/tether.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>
        <!-- revolution Js -->
        <script type="text/javascript" src="{{asset('public/assets/js/jquery.themepunch.tools.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/assets/js/jquery.themepunch.revolution.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/assets/js/revolution.extension.slideanims.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/assets/js/revolution.extension.layeranimation.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/assets/js/revolution.extension.navigation.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/assets/js/revolution.extension.parallax.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/assets/js/jquery.revolution.js')}}"></script>
        <!-- fancybox Js -->
        <script src="{{asset('public/assets/js/jquery.mousewheel-3.0.6.pack.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/assets/js/jquery.fancybox.pack.js')}}" type="text/javascript"></script>

        <!-- masonry,isotope Effect Js -->
        <script src="{{asset('public/assets/js/imagesloaded.pkgd.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/assets/js/isotope.pkgd.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/assets/js/masonry.pkgd.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/assets/js/jquery.appear.js')}}" type="text/javascript"></script>
        <!-- parallax Js -->
        <script src="{{asset('public/assets/js/jquery.parallax-1.1.3.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/assets/js/jquery.appear.js')}}" type="text/javascript"></script>
        <!-- matchHeight Js -->
        <script src="{{asset('public/assets/js/jquery.matchHeight-min.js')}}" type="text/javascript"></script>
        <!-- popup -->
        <script src="{{asset('public/assets/js/jquery.magnific-popup.min.js')}}" type="text/javascript"></script>
        <!-- carousel Js -->
        <script src="{{asset('public/assets/js/owl.carousel.js')}}" type="text/javascript"></script>
        <!-- Accordion Js -->
        <script type="text/javascript" src="{{asset('public/assets/js/jquery.accordion.js')}}"></script>
        <!-- map -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript" src="{{asset('public/assets/js/map.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/assets/js/validation.js')}}"></script>
        <script src="{{asset('public/assets/js/custom.js')}}" type="text/javascript"></script>

	</body>
</html>
