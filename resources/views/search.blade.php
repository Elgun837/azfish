@extends('partials.main')

@section('content')
<section class="work_grid_category container-1920 ">
    <div id="search-results-heading" class=" mb-5 text-center">
        <h1 class="page-heading">
            @if (count($data))
                <span>{{ count($data) }}</span> {{ __('default.text_search_result') }} <span>"{{ $search }}"</span> :
            @else
                <span>{{ __('default.no_models') }}</span>
            @endif            
        </h1>
    </div>
    <div class="d-flex banners_and_works">
            <div class="banner banner_left">
                <div class="banner_holder">
                    <a href="https://google.com" target="_blank" class="banner_holder_img">
                        <img src="/assets/image/left_banner.jpg" alt="banner">
                    </a>
                    <a href="https://google.com" target="_blank" class="banner_holder_img">
                        <img src="/assets/image/right_banner.jpg" alt="banner">
                    </a>
                </div>
            </div>
    @if (count($data))
        <!-- work grid -->
    <div class="work_grid d-flex">
        @foreach ($data as $item)
            <!-- work element -->
            <div class="work_item col-lg-4 mb-3 d-flex align-items-stretch" data-aos="fade-in" data-aos-duration="1500"
            data-aos-offset="0">
                <div class="card">
                    <div class="image_holder">
                        <button data-src="{{ asset('storage/'.$item->image) }}" data-toggle="lightbox" data-gallery="example-gallery"
                            class="full_icon">
                            <span class="icon-full"></span>
                        </button>
                        <a href="{{ route('product', ['id' => $item->id]) }}" class="image_holder_link"></a>
                        <img src="{{ asset('storage/'.$item->image) }}" class="card-img-top" alt="Card Image">
                    </div>
                    <div class="gradient"></div>

                    <div class="details_holder">
                        <div class="download_button_holder">
                            <a href="{{ route('download', ['id' => $item->id]) }}">
                                <div class="download"></div>
                            </a>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <a href="{{ route('product', ['id' => $item->id]) }}">
                                <div class="card-title">{{ $item->getTranslatedAttribute('name', app()->getLocale(), 'en') }}</div>
                            </a>
                            <a href="{{ route('download', ['id' => $item->id]) }}" class="mt-auto align-self-start">{{ __('default.download') }}</a>
                        </div>
                    </div>

                </div>
            </div>
        @endforeach
    </div>
    <!-- work grid end -->
    
    @endif
    
    <div class="banner banner_right">
                <div class="banner_holder">
                    <a href="https://google.com" target="_blank" class="banner_holder_img">
                        <img src="/assets/image/right_banner.jpg" alt="banner">
                    </a>
                    <a href="https://google.com" target="_blank" class="banner_holder_img">
                        <img src="/assets/image/left_banner.jpg" alt="banner">
                    </a>
                </div>
            </div>
    
</section>
@endsection
