<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>

        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="@yield('bodyClass')">

        <nav class="px-5 navbar flex-column flex-sm-row justify-content-center justify-content-sm-between">
            <a href="{{config('app.url')}}" class="text-decoration-none">
                <img src="{{asset('img/logo.png')}}" class="img-fluid" alt="{{config('app.name')}} Logo" width="200" />
            </a>
        </nav>

        <div class="container-sm py-5 mt-3">
            @yield('content')
        </div>

        <footer class="footer px-5 text-white">
            <div class="col-md">
                {!! __('messages.copyright') !!}
            </div>
            <div class="col-auto">
                <a class="text-light" href="#cookieSettings">{{__('messages.cookie_settings')}}</a>
                <a class="ml-2 text-light" href="{{route('static.dataprivacy')}}">{{__('messages.data_privacy')}}</a>
                <a class="ml-2 text-light" href="{{route('static.imagelicences')}}">{{__('messages.image_licences')}}</a>
                <a class="ml-2 text-light" href="{{route('static.imprint')}}">{{__('messages.imprint')}}</a>
            </div>
        </footer>

        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        @include('common.cookie')
    </body>
</html>
