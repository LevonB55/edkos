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
    <link rel="stylesheet" href="{{asset('assets/libs/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/ds-user-profile.css')}}">
</head>
<body>

@yield('page-scripts')

@include('layouts.partials.aside')


<main>
    @yield('content')
</main>

<script src="{{asset('assets/libs/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets/libs/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>
