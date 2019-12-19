<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Favicon -->
        <link href="{{asset('assets/img/brand/favicon.png')}}" rel="icon" type="image/png">

        <!-- Fonts -->
        <link href="" rel="stylesheet">

        <!-- Icons -->
        <link href="{{asset('assets/js/plugins/nucleo/css/nucleo.css')}}" rel="stylesheet">
        <link href="{{asset('assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
        <!--  CSS -->
    <link type="text/css" href="{{asset('assets/css/argon-dashboard.css')}}" rel="stylesheet">
    </head>
    <body class="">
        <!-- Core -->
        <script src="{{asset('assets/js/plugins/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
        <!--  JS -->
        <script src="{{asset('assets/js/argon-dashboard.min.js')}}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
