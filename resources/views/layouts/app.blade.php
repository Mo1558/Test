<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        @include('layouts.head')
<body>

        @include('layouts.nav')

            @yield('content')
        
        @include('layouts.scripts')
</body>
</html>
