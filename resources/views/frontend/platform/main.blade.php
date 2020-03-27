<!DOCTYPE html>
<html lang="en">
<head>

    @include('frontend.partials._head')

</head>
<body>

    @section('sidebar')
        @include('frontend.platform.partials._sidebar')
    @show

    @yield('content')

    @section('scripts')
        @include('frontend.partials._scripts')
    @show

</body>
</html>