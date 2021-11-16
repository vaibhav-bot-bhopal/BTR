<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTR | Coming Soon</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/assets/images/favicon.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{asset('public/assets/images/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/coming-soon.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/flip.css')}}">
    <link href="{{asset('public/assets/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
    <style>
		.btn-outline-aqua {
            background-color: #047BAB !important;
			color: #ffffff !important;
			border-color: #047BAB !important;
		}

		.btn-outline-aqua:hover {
			color: #fff !important;
			background-color: #047BAB !important;
			border-color: #047BAB !important;
		}

        h1{
            font-weight: 700;
            font-size: 48px;
            text-transform: uppercase;
        }

        h2{
            font-weight: 700;
            font-size: 38px;
            text-transform: uppercase;
        }

        .container {
            margin: 0px auto; max-width: 960px;
        }

        .tick {
            font-size:1rem;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
        }

        .tick-label {
            color: #fff;
            font-size:.365em;
            text-align:center;
        }

        .tick-group {
            margin:0 .25em;
            text-align:center;
        }
	</style>
</head>
<body>
    <div class="container mt-5">
        <div class="row mb-5">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="title">
                    <h1 class="text-white">
                        <span style="color: #f9c820; text-shadow: 2px 2px 4px #333;">Bandhavgarh </span> <span style="color: #f4edd2; text-shadow: 2px 2px 4px #333;">Tiger Reserve</span>
                    </h1>
                </div>

                <div class="sub-title mt-5">
                    <h2 class="text-white">
                        Coming Soon
                    </h2>
                </div>
            </div>
        </div>

        <div class="tick" data-did-init="handleTickInit">
            <div data-repeat="true" data-layout="horizontal center fit" data-transform="preset(d, h, m, s) -> delay">
                <div class="tick-group">
                    <div data-key="value" data-repeat="true" data-transform="pad(00) -> split -> delay">
                        <span data-view="flip"></span>
                    </div>

                    <span data-key="label" data-view="text" class="tick-label"></span>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-12 text-center">
                <a href="{{url('/')}}" class="btn btn-lg btn-outline-aqua">Reload  <i class="fa fa-refresh" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>

    <script src="{{asset('public/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('public/assets/js/flip.js')}}"></script>

    <script>
        function handleTickInit(tick) {
            // create the schedule counter
            Tick.count.schedule('thursday at 09:00', { timezone: '+05:30' }).onupdate = function(value) {
                tick.value = value;
            }
        }
    </script>
</body>
</html>
