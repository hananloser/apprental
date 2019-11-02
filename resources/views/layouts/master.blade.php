<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>irent</title>

    <!-- Favicon -->
    <link href="{{url('/assets/img/brand/favicon.png')}}" rel="icon" type="image/png">

    <!-- Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"> -->

    <!-- Icons -->
    <link href="{{url('/assets/vendor/nucleo/css/nucleo.css')}}" rel="stylesheet">
    <link href="{{url('/assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/vendor/nouislider/css/nouislider.css')}}">
    <link href="{{asset('/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.css')}}">
    <!-- Argon CSS -->
    <link type="text/css" href="{{url('/assets/css/argon.css')}}" rel="stylesheet">
</head>

<body>

    @include('layouts.navbar')

    @include('main.main')


    <!-- Core -->
    <script src="{{asset('/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/assets/vendor/popper/popper.min.js')}}"></script>
    <script src="{{asset('/assets/vendor/bootstrap/bootstrap.min.js')}}"></script>

    <!-- Optional plugins -->
    <script src="{{asset('assets/vendor/onscreen/onscreen.min.js')}}"></script>
    <script src="{{asset('assets/vendor/headroom/headroom.min.js')}}"></script>
    <script src="{{asset('assets/vendor/nouislider/js/nouislider.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>

    <!-- Theme JS -->
    <script src="/assets/js/argon.js"></script>
</body>

</html>