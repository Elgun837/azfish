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

        <!-- Useful meta tags -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="index, follow">
        <meta name="google" content="notranslate">
        <meta name="format-detection" content="telephone=no">
        <meta name="description" content="{{ setting('site.description') }}">

        <title>@yield('title')</title>
    </head>
    <body data-route="{{ Route::currentRouteName() }}" id="index">
        @include('partials.flash-message')
        <div class="header">
            <div class="header_holder d-flex justify-content-between align-center container-1920">
                <div class="logo_search_holder ">
                    <div class="burger">
                        <div class="burger_holder">
                            <button class="burger_menu_button" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3 8H21C21.2652 8 21.5196 7.89464 21.7071 7.70711C21.8946 7.51957 22 7.26522 22 7C22 6.73478 21.8946 6.48043 21.7071 6.29289C21.5196 6.10536 21.2652 6 21 6H3C2.73478 6 2.48043 6.10536 2.29289 6.29289C2.10536 6.48043 2 6.73478 2 7C2 7.26522 2.10536 7.51957 2.29289 7.70711C2.48043 7.89464 2.73478 8 3 8ZM21 16H3C2.73478 16 2.48043 16.1054 2.29289 16.2929C2.10536 16.4804 2 16.7348 2 17C2 17.2652 2.10536 17.5196 2.29289 17.7071C2.48043 17.8946 2.73478 18 3 18H21C21.2652 18 21.5196 17.8946 21.7071 17.7071C21.8946 17.5196 22 17.2652 22 17C22 16.7348 21.8946 16.4804 21.7071 16.2929C21.5196 16.1054 21.2652 16 21 16ZM21 11H3C2.73478 11 2.48043 11.1054 2.29289 11.2929C2.10536 11.4804 2 11.7348 2 12C2 12.2652 2.10536 12.5196 2.29289 12.7071C2.48043 12.8946 2.73478 13 3 13H21C21.2652 13 21.5196 12.8946 21.7071 12.7071C21.8946 12.5196 22 12.2652 22 12C22 11.7348 21.8946 11.4804 21.7071 11.2929C21.5196 11.1054 21.2652 11 21 11Z"
                                        fill="black" />
                                </svg>
                            </button>
                            
                        </div>
                    </div>
                    <div class="logo">
                        <a href="{{ route('home') }}">
                        @php
                            //$logo = file_get_contents('storage/'.setting('site.logo'));
                            //echo "$logo";
                        @endphp
                        </a>
                    </div>
                    {{-- <div class="search desctop">
                        <form action="{{ route('search') }}" method="GET">                            
                            <div class="input_holder">                        
                                <input type="search" class="search_input ui-widget" id="search" name="search"
                                    placeholder="{{ __('default.search') }}" aria-describedby="search-addon">
                            </div>
                            <button class="search_button btn" type="submit"> <span class="icon-search"></span> </button>
                        </form>
                    </div> --}}
                    <nav class="main_nav nav">
                        <div class="items">
                            {{ menu('site', 'menu/menu'); }}
                        </div>
                    </nav>
                </div>
                <div class="right_elements">
                    <div class="lang">
                        <div class="circle">
                            <div class="dropdown">
                                <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ strtoupper(app()->getLocale()) }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        @if (app()->getLocale() != $localeCode)
                                            <li>
                                                <a class="btn dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">{{ strtoupper($localeCode) }}</a>
                                            </li>
                                        @endif                                
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    {{-- <div class="sign_in">
                        @guest
                            <a href="{{ route('login') }}" class="btn btn_gradient sign-in">
                                <span class="icon-user"></span>
                                <div class="button_text">{{ __('default.login') }}</div>
                                <div class="fill-one"></div>
                            </a>
                        @endguest
                        @auth
                        <a href="{{ route('logout') }}" class="btn btn_gradient sign-in" 
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <span class="icon-user"></span>
                            <div class="button_text">{{ __('default.logout') }}</div>
                            <div class="fill-one"></div>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        @endauth
                    </div> --}}
                </div>
                <!-- mobile element - search -->
                {{-- <div class="mobile_orientir logo_search_holder ">
                    <div class="search mobile">
                        <form action="{{ route('search') }}" method="GET">
                            <div class="input_holder">
                                <input type="search" class="search_input ui-widget" id="search-mobile" name="search"
                                    placeholder="{{ __('default.search') }}" aria-describedby="search-addon">
                            </div>
                            <button class="search_button btn" type="submit"> <span class="icon-search"></span> </button>
                        </form>
                    </div>
                </div> --}}
                <!-- mobile element - search -->
        
            </div>
        </div>

        {{ menu('site', 'menu/mobile_menu') }}
        
        @yield('content')
        
        @extends('partials.footer')
        
        <script defer src="{{ asset('assets/js/app.js') }}"></script>
        
    </body>
    </html>