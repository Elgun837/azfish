<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="copyright" content="Amiroff Creative Agency | https://amiroff.az">
        <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/image/favicons/favicon-16x16.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/image/favicons/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/image/favicons/favicon-16x16.png') }}">        
        <link rel="mask-icon" href="{{ asset('assets/image/safari-pinned-tab.svg') }}" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <link rel="icon" type="image/x-icon" href="{{asset('assets/image/favicons/favicon.ico')}}">
        <link rel="stylesheet" type="text/css" charset="UTF-8" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" /> 
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css" />

        <!-- Useful meta tags -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="index, follow">
        <meta name="google" content="notranslate">
        <meta name="format-detection" content="telephone=no">
        <meta name="description" content="{{ setting('site.description') }}">

        <title>@yield('title')</title>
    </head>
    <body data-route="{{ Route::currentRouteName() }}">
        
    <div id="index">
    </div>
    <script defer src="{{ asset('/js/app.js') }}"></script>
    </body>
    </html>