@extends('layouts.main')

@section('content')
<section class="registration ">
    <div class="reg_inner z-index-1">
        <div class="left half">
            <canvas id="canvas" width="600" height="600"></canvas>
        </div>
        <div class="right half">
            <div class='planet-container'>
                <div class='night'></div>
                <div class='day'></div>
                <div class='clouds'></div>
                <div class='inner-shadow'></div>
            </div>
        </div>
    </div>
    <div class="center z-index-2">
        <div class="reg_form">
         
            <div class="wrapper">
                <div class="title-text">
                    <div class="title login">
                        {{ __('auth.login_form') }}
                    </div>
                    <div class="title signup">
                        {{ __('auth.signup_form') }}
                    </div>
                </div>
                <div class="form-container">
                    <div class="slide-controls">
                        <input type="radio" name="slide" id="login" checked>
                        <input type="radio" name="slide" id="signup">
                        <label for="login" class="slide login">{{ __('auth.text_login') }}</label>
                        <label for="signup" class="slide signup">{{ __('auth.text_signup') }}</label>
                        <div class="slider-tab"></div>
                    </div>                    
                    <div class="form-inner">
                        <form action="{{ route('login') }}" class="login" method="POST">
                            @csrf
                            <div class="field">
                                <input id="email" type="email" placeholder="{{ __('auth.text_email') }}" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
                            <div class="remember_me">
                                <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    {{ __('auth.remember_me') }}
                                </label>
                            </div>
                            @if (Route::has('password.request'))
                            <div class="pass-link">
                                <a href="{{ route('password.request') }}">{{ __('auth.text_forgot') }}</a>
                            </div>
                            @endif
                            <div class="field btn">
                                <div class="btn-layer"></div>
                                <button type="submit">
                                    {{ __('auth.text_login') }}
                                </button>
                            </div>
                            <div class="signup-link">
                                {{ __('auth.text_no_login') }} <a href="">{{ __('auth.text_sign_up_now') }}</a>
                            </div>
                        </form>
                        <form action="{{ route('register') }}" class="signup" method="POST">
                            @csrf
                            <div class="field">
                                <input id="name" type="text" placeholder="{{ __('auth.text_name') }}" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                <script>
                                  document.querySelector("label.signup").click();
                                  document.querySelector("form.login").style.marginLeft = "-50%";
                                  document.querySelector(".title-text .login").style.marginLeft = "-50%";
                                </script>
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="field">
                                <input id="emails" type="email" placeholder="{{ __('auth.text_email') }}" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                <script>
                                  document.querySelector("label.signup").click();
                                  document.querySelector("form.login").style.marginLeft = "-50%";
                                  document.querySelector(".title-text .login").style.marginLeft = "-50%";
                                </script>
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="field">
                                <input type="password" placeholder="{{ __('auth.text_password') }}" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                <script>
                                  document.querySelector("label.signup").click();
                                  document.querySelector("form.login").style.marginLeft = "-50%";
                                  document.querySelector(".title-text .login").style.marginLeft = "-50%";
                                </script>
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="field">
                                <input id="password-confirm" type="password" placeholder="{{ __('auth.text_confirm_password') }}" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <input id="ip" type="hidden" class="@error('ip') is-invalid @enderror" name="ip" value="{{ isset($_SERVER['HTTP_X_REAL_IP']) ? $_SERVER['HTTP_X_REAL_IP'] : 0 }}">                       
                            @error('ip')
                            <script>
                              document.querySelector("label.signup").click();
                              document.querySelector("form.login").style.marginLeft = "-50%";
                              document.querySelector(".title-text .login").style.marginLeft = "-50%";
                            </script>
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ __('default.error_ip') }}</strong>
                                </span>
                              @enderror
                            <div class="field btn">
                                <div class="btn-layer"></div>
                                <button type="submit">
                                    {{ __('auth.text_signup') }}
                                </button>
                            </div>
                        </form>
                    </div>                    
                </div>
            </div>
        </div>
    </div>    
</section>
<script>
    
// login page form script

const loginText = document.querySelector(".title-text .login");
const loginForm = document.querySelector("form.login");
const loginBtn = document.querySelector("label.login");
const signupBtn = document.querySelector("label.signup");
const signupLink = document.querySelector("form .signup-link a");
signupBtn.onclick = (()=>{
  console.log('asdsad');
  loginForm.style.marginLeft = "-50%";
  loginText.style.marginLeft = "-50%";
});
loginBtn.onclick = (()=>{
  loginForm.style.marginLeft = "0%";
  loginText.style.marginLeft = "0%";
});
signupLink.onclick = (()=>{  
  signupBtn.click();
  return false;
});


// planet canvas

var ctx = document.getElementById('canvas').getContext('2d'),
    planetsData = [
      {
        name: 'Mercury',
        orbitalDistance: 36,
        size: 2,
        speed: .00479,
        colors: ['#bdc3c7', '#2c3e50']
      },
      {
        name: 'Venus',
        orbitalDistance: 50,
        size: 4.7,
        speed: .0035,
        colors: ['#BA8B02', '#181818']
      },
      {
        name: 'Earth',
        orbitalDistance: 70,
        size: 5,
        speed: 0.00298,
        colors: ['#43c6ac', '#191654'],
        moonsData: [{
          name: 'Moon',
          orbitalDistance: 10,
          size: 1.3,
          speed: 0.0102,
          colors: ['#ece9e6', '#ffffff']
        }],
        moonsArr: []
      },
      {
        name: 'Mars',
        orbitalDistance: 90,
        size: 2.6,
        speed: 0.00241,
        colors: ['#EB5757', '#CB7D36'],
        moonsData: [{
          name: 'Phobos',
          orbitalDistance: 4,
          size: .3,
          speed: 0.02138,
          colors: ['#8B8179', '#B5B2B6']
        },
        {
          name: 'Deimos',
          orbitalDistance: 6,
          size: .2,
          speed: 0.0135,
          colors: ['#F1EEDB', '#CDAE89']
        }],
        moonsArr: []
      },
      {
        name: 'Jupiter',
        orbitalDistance: 116,
        size: 15,
        speed: 0.00131,
        colors: ['#ffd89b', '#19547b']
      },
      {
        name: 'Saturn',
        orbitalDistance: 156,
        size: 12,
        speed: 0.00097,
        colors: ['#BE985F', '#FCCE86'],
        rings: ['#E9DEE1', '#4D474E', '#E9DEE1', '#918B8D']
      },
      {
        name: 'Uranus',
        orbitalDistance: 195,
        size: 10,
        speed: 0.00068,
        colors: ['#D0F6F8', '#72969C']
      },
      {
        name: 'Neptune',
        orbitalDistance: 220,
        size: 9,
        speed: 0.00054,
        colors: ['#344BB2', '#467EFF']
      },
      {
        name: 'Pluto',
        orbitalDistance: 240,
        size: 1,
        speed: 0.0004743,
        colors: ['#41260F', '#AAA091']
      }
    ],
    planetsArr = [],
    time = new Date();

function orbit(orbitalDistance) {
  ctx.beginPath();
  ctx.arc(300, 300, orbitalDistance, 0, Math.PI * 2, false);
  ctx.stroke();
}

function rings(rings, size) {
  ctx.save();
  ctx.scale(1, 0.2);
  rings.forEach((ringColor, index) => {
    ctx.beginPath();
    ctx.lineWidth = 1;
    ctx.strokeStyle = ringColor;
    ctx.arc(0, 0, size + 3 * (index + 1), 0, Math.PI, true);
    ctx.stroke();
  })
  ctx.restore();
}

function planet(planet) {
  this.name = planet.name;
  this.orbitalDistance = planet.orbitalDistance;
  this.size = planet.size;
  this.speed = planet.speed;
  this.theta = 2 * Math.PI * Math.random();
  this.linGrad = ctx.createLinearGradient(-this.size/2, -this.size/2, this.size/2, this.size/2);
  this.gradVal = 0;
  planet.colors.forEach((color) => {
    this.linGrad.addColorStop(this.gradVal, color);
    this.gradVal = 1;
  })
  planet.moonsArr && (this.moonsArr = planet.moonsArr);
  planet.rings && (this.rings = planet.rings)
  this.rotate = () => {
    ctx.save()
    ctx.rotate(this.theta);
    this.theta = this.theta + this.speed; 
    ctx.translate(this.orbitalDistance, 0);
    ctx.beginPath();
    ctx.fillStyle = this.linGrad;
    ctx.arc(0, 0, this.size, 0, 2*Math.PI, true);
    ctx.fill();
    this.moonsArr && this.moonsArr.forEach((moon) => {
        moon.rotate();
      });
    this.rings && rings(this.rings, this.size);
    ctx.restore();
  }
}

function planets() {
  planetsData.forEach((plnt, index) => {
    if (plnt.moonsData) {
      plnt.moonsData.forEach((moon, index) => {
        plnt.moonsArr[index] = new planet(moon)
      })
    }
    planetsArr[index] = new planet(plnt);
  })
}
planets();

function draw() {
  time = new Date();
  ctx.clearRect(0, 0, 600, 600);
  ctx.save();
  // ctx.scale(1, 0.4);
  // ctx.translate(0, 400);
  // Sun
  ctx.save();
  ctx.beginPath();
  sunLingrad = ctx.createLinearGradient(287.5, 287.5, 312.5, 312.5);
  sunLingrad.addColorStop(0, '#f12711');
  sunLingrad.addColorStop(1, '#f5af19');
  ctx.shadowBlur = 20;
  ctx.shadowColor = "#f5af19";
  ctx.fillStyle = sunLingrad;
  ctx.arc(300, 300, 25, 0, 2*Math.PI, false);
  ctx.fill();
  ctx.restore();
  // Orbits
  ctx.shadowColor = "transparent";
  ctx.strokeStyle = '#c2c2c2';
  ctx.lineWidth = 1/4;
  planetsData.forEach((planet) => {
    orbit(planet.orbitalDistance)
  });
  ctx.save();
  // Planets
  ctx.translate(300, 300);
  planetsArr.forEach((plnt) => {
    plnt.rotate();
  });
  ctx.restore();

  ctx.restore();
  requestAnimationFrame(draw);
}
requestAnimationFrame(draw);

</script>
@endsection
