<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>EDKOS</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css"
          integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <link rel="icon" href="{{asset('assets/img/logo.png')}}"/>
    <link href="{{asset('assets/libs/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/libs/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/font.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/help-center.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/plans-pricing.css')}}">

</head>
<body class="home">

@include('layouts.partials.header')

@yield('content')


@include('layouts.partials.footer')
<script src="{{asset('assets/libs/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets/libs/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>
