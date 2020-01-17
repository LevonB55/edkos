<!DOCTYPE html>
<html lang="en">
<head>

    @include('frontend.partials._head')

</head>
<body>

    @include('frontend.dashboard.partials._sidebar')

    @yield('content')

    @include('frontend.partials._scripts')

</body>
</html>