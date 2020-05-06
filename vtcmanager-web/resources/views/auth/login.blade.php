@extends('layouts.app')

@section('content')
<video autoplay muted loop id="myVideo">
    <source src="{{ asset('videos/highway_at_night.mp4') }}" type="video/mp4">
</video>
<div class="container">
    <div class="row">
        <div class="col-md-6">
                <form class="box animated slideInRight">
                    <h1>Login</h1>
                    <input type="text" name="" placeholder="Username"> <input type="password" name="" placeholder="Password"> <a class="forgot text-muted" href="#">Forgot password?</a> <input type="submit" name="" value="Login" href="#">
                    <div class="col-md-12">
                        <ul class="social-network social-circle">
                            <li><a href="#" class="icoFacebook" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" class="icoTwitter" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" class="icoGoogle" title="Google +"><i class="fab fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </form>
        </div>
    </div>
</div>

<!--<div class="account-login-page">
    <div class="se-pre-con"></div>
        <div class="loginFormWrapper">
            <div class="loginForm">
                <h1 style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">{{ __('auth.Login') }}</h1>
                <hr class="underline" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                
                <form action="{{ route('login') }}" method="post" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                    @csrf
                    <input type="text" name="login" class="form-control{{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('auth.email') }}" value="{{ old('username') ?: old('email') }}" required autocomplete="email" autofocus>
                    @if ($errors->has('username') || $errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
                    </span>
                    @endif
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('auth.assword') }}" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="remember">{{ __('auth.remember_me') }}</label>
                    </div>
                    @if (Route::has('password.request'))
                    <p><a href="{{ route('password.request') }}">{{ __('auth.forgot_password') }}</a></p>
                    @endif
                    <input type="submit" name="submit" class="btn btn-default btn-block" value="{{ __('auth.Login') }}">
                    @if (Route::has('register'))
                    <p>{{ __('auth.new_to_vtcmanager') }} <br><a href="{{ route('register') }}">{{ __('auth.register_now') }}</a></p>
                    @endif
                </form>
            </div>
        </div>
        <script type="text/javascript" async="" defer="" src="./Anmelden - VTCManager_files/piwik.js.Download"></script><script type="text/javascript" src="./Anmelden - VTCManager_files/jquery.min.js.Download"></script>
        <script type="text/javascript" src="./Anmelden - VTCManager_files/bootstrap.min.js.Download"></script>
        <script type="text/javascript" src="./Anmelden - VTCManager_files/account.js.Download"></script>
        <script async="" src="./Anmelden - VTCManager_files/js"></script>
    </div>-->

<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->
@endsection
@section('css')
<style>
    /* Style the video: 100% width and height to cover the entire window */
#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
}
    body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}

.box {
    width: 400px;
    padding: 40px;
    position: absolute;
    top: 50%;
    left: 60%;
    background: #191919;
    ;
    text-align: center;
    transition: 0.25s;
    margin-top: 100px
}

.box input[type="text"],
.box input[type="password"] {
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #3498db;
    padding: 10px 10px;
    width: 250px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s
}

.box h1 {
    color: white;
    text-transform: uppercase;
    font-weight: 500
}

.box input[type="text"]:focus,
.box input[type="password"]:focus {
    width: 300px;
    border-color: #2ecc71
}

.box input[type="submit"] {
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #2ecc71;
    padding: 14px 40px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer
}

.box input[type="submit"]:hover {
    background: #2ecc71
}

.forgot {
    text-decoration: underline
}

ul.social-network {
    list-style: none;
    display: inline;
    margin-left: 0 !important;
    padding: 0
}

ul.social-network li {
    display: inline;
    margin: 0 5px
}

.social-network a.icoFacebook:hover {
    background-color: #3B5998
}

.social-network a.icoTwitter:hover {
    background-color: #33ccff
}

.social-network a.icoGoogle:hover {
    background-color: #BD3518
}

.social-network a.icoFacebook:hover i,
.social-network a.icoTwitter:hover i,
.social-network a.icoGoogle:hover i {
    color: #fff
}

a.socialIcon:hover,
.socialHoverClass {
    color: #44BCDD
}

.social-circle li a {
    display: inline-block;
    position: relative;
    margin: 0 auto 0 auto;
    border-radius: 50%;
    text-align: center;
    width: 50px;
    height: 50px;
    font-size: 20px
}

.social-circle li i {
    margin: 0;
    line-height: 50px;
    text-align: center
}

.social-circle li a:hover i,
.triggeredHover {
    transform: rotate(360deg);
    transition: all 0.2s
}

.social-circle i {
    color: #fff;
    transition: all 0.8s;
    transition: all 0.8s
}
</style>
@endsection