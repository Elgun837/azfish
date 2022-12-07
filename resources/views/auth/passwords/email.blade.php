@extends('layouts.main')

@section('content')
<section class="registration forgot">
    <div class="reg_inner z-index-1">
        <div class="left half">                    
        </div>
        <div class="right half">
           
        </div>
    </div>
    <div class="center z-index-2">
        <div class="reg_form">
            <div class="wrapper">
                <div class="title-text">
                    <div class="title login">
                        {{ __('auth.forgot_page') }}
                        <h5 class="font-standart mt-4"> {{ __('auth.forgot_form') }}</h5>
                    </div>
                </div>
                <div class="form-container">
                    <div class="form-inner">
                        <form action="{{ route('password.email') }}" class="login" method="POST">
                            @csrf
                            <div class="field">
                                <input id="email" type="email" placeholder="{{ __('auth.text_email') }}" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>                             
                            <div class="field btn">
                                <div class="btn-layer"></div>
                                <button type="submit">
                                    {{ __('auth.text_reset_link') }}
                                </button>
                            </div>                            
                            <div class="signup-link_c">
                               {{ __('default.text_return') }} <a href="{{ route('login') }}">{{ __('default.login') }}</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
