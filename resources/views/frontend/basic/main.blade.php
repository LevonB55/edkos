<!DOCTYPE html>
<html lang="en">
<head>

    @include('frontend.partials._head')

</head>
<body class="@yield('bodyClass')">

    @section('header')
        @include('frontend.basic.partials._header')
    @show

    @yield('content')

    @section('footer')
        @include('frontend.basic.partials._footer')
    @show

    @include('frontend.partials._scripts')

</body>
</html>