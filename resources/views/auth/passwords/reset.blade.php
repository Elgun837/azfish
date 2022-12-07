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
                        {{ __('auth.text_reset') }}
                    </div>
                </div>
                <div class="form-container">
                    <div class="form-inner">
                        <form action="{{ route('password.update') }}" class="login" method="POST">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="field">
                                <input id="email" type="email" placeholder="{{ __('auth.text_email') }}" class="@error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="field">
                                <input id="password" type="password" placeholder="{{ __('auth.text_password') }}" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="field">
                                <input id="password-confirm" type="password" placeholder="{{ __('auth.text_confirm_password') }}" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>                          
                            <div class="field btn">
                                <div class="btn-layer"></div>
                                <button type="submit">
                                    {{ __('auth.text_reset') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
