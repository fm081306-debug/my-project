<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Service System')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    {{-- Navbar --}}
    @include('layouts.navbar')

    {{-- Page Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('layouts.footer')

</body>
</html>