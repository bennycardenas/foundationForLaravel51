<!DOCTYPE html>
<html>

    <head>
            @yield('title')
            <link rel="stylesheet" type="text/css" href="{{ elixir('css/foundation.css') }}" />

    </head>

    @include('partials.nav')

    <body>
        @yield('content')
    </body>

    <footer>
        @yield('partials.footer')
    </footer>

</html>
