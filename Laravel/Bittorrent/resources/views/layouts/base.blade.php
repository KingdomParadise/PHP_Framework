<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>

        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>
    <body class="@yield('bodyClass')">
        <nav class="navbar navbar-light navbar-expand-md bg-light">
            <a href="{{config('app.url')}}" class="text-decoration-none">
                <img src="{{asset('img/logo.png')}}" class="img-fluid" alt="{{config('app.name')}} Logo" width="200" />
            </a>
        </nav>

        <div class="container mt-5 home">
            @yield('content')
        </div>

        <footer class="bg-dark text-white mt-4 absolute-bottom">
            <div class="container-fluid py-3">
                <div class="row">
                    <div class="col-sm-6">
                        {!! __('messages.copyright') !!}
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm">
                                <a class="text-light" href="#cookieSettings">{{__('messages.cookie_settings')}}</a>
                            </div>
                            <div class="col-sm">
                                <a class="ml-2 text-light" href="{{route('static.dataprivacy')}}">{{__('messages.data_privacy')}}</a>
                            </div>
                            <div class="col-sm">
                                <a class="ml-2 text-light" href="{{route('static.imagelicences')}}">{{__('messages.image_licences')}}</a>
                            </div>
                            <div class="col-sm">
                                <a class="ml-2 text-light" href="{{route('static.imagelicences')}}">{{__('messages.image_licences')}}</a>
                            </div>
                            <div class="col-sm">
                                <a class="ml-2 text-light" href="{{route('static.imprint')}}">{{__('messages.imprint')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        @include('common.cookie')
    </body>
</html>
