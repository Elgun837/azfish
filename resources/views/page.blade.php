@extends('partials.main')

@section('content')

<section class="default_page">
    <div class="container-1920">
        <div class="max_width_70p">
            <div class="title">
                {{ $page_info->title }}
            </div>
            @if ($page_info->image)
                <div class="page_photo">
                    <img src="{{ asset('storage/'.$page_info->image) }}" alt="{{ $page_info->title }}">
                </div>
            @endif            
            <div class="details">
                <div class="entry-content content">
                    {!! $page_info->body !!}
                </div>
            </div>
        </div>

    </div>
</section>
    
@endsection