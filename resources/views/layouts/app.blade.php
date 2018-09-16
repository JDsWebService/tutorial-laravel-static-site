<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Static Site - @yield('title')</title>

        @include('partials._stylesheets')

        @yield('stylesheets')

    </head>
    <body>
            @include('partials._navbar')
            
            <div class="container">

                @include('partials._messages')

                <div class="row">
                    <div class="col-sm-12">
                        @yield('content')
                    </div>
                </div>
            </div>

        @include('partials._scripts')

        @yield('scripts')
    </body>
</html>
