@extends('errors.minimal')

@section('title', __('Not Found'))

@section('content')
        <div class="page_404 ">
        <div class="stars">
            <div class="central-body">
                <img class="image-404" src="{{asset('assets/image/404.svg')}}" width="300px">
                <h2 class="text-white my-4">{{ __('default.text_404') }}</h2>
                <a href="{{ route('home') }}" class="btn-go-home">{{ __('default.text_go_home') }}</a>
            </div>
            <div class="objects">
                <img class="object_rocket" src="{{asset('assets/image/rocket.svg')}}" width="40px">
                <div class="earth-moon">
                    <img class="object_earth" src="{{asset('assets/image/earth.svg')}}" width="100px">
                    <img class="object_moon" src="{{asset('assets/image/moon.svg')}}" width="80px">
                </div>
                <div class="box_astronaut">
                    <img class="object_astronaut" src="{{asset('assets/image/astronaut.svg')}}" width="140px">
                </div>
            </div>
            <div class="glowing_stars">
                <div class="star"></div>
                <div class="star"></div>
                <div class="star"></div>
                <div class="star"></div>
                <div class="star"></div>
    
            </div>
        </div>
    </div>
    @endsection
