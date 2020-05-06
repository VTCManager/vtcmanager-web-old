@extends('layouts.app')

@section('content')
<div class="account-login-page">
    <div class="se-pre-con"></div>
        <div class="loginFormWrapper">
            <div class="loginForm">
                <h1 style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">{{ __('auth.Login') }}</h1>
                <hr class="underline" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                
                <form action="{{ route('login') }}" method="post" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                    @csrf
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('auth.email') }}" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
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
    </div>

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
    html, body {
    font-family: 'Roboto', sans-serif;
    font-size: 15px;
	justify-content: center;
    background-size: cover;
    background-position: center;
    background-image: url('https://vtc.northwestvideo.de/media/highway.jpg');
    background-blend-mode: multiply;
	background-repeat: no-repeat;
    position: relative;
    z-index: 1;
	vertical-align: middle;
	height: 100%;
}

img {
    -webkit-user-drag: none;
}

h1, h2, h3 {
    font-weight: 700;
}

.btn, .form-control, .input-group-addon {
    border-radius: 0;
    border-width: 2px;
    transition: all .4s ease;
    -webkit-transition: all .4s ease;
    -moz-transition: all .4s ease;
}

.btn {
    text-transform: uppercase;
    font-weight: bold;
}

.btn.btn-text {
    color: #3c09b2;
}

.btn.btn-transparent {
    background-color: transparent;
    border-color: #fff;
    color: #fff;
}

.btn.btn-transparent:hover,
.btn.btn-transparent:focus {
    background-color: #00d5ff;
    border-color: transparent;
    color: #000;
}

.btn.btn-text:hover,
.btn.btn-text:focus {
    background: #eee;
    border-color: transparent;
}

.btn.btn-default {
    background-color: transparent;
    border-color: #000;
    color: #000;
}

.btn.btn-default:hover,
.btn.btn-default:focus {
    background-color: #eee;
    border-color: #000;
    color: #000;
}

.btn.btn-primary {
    background-color: #3c09b2;
    border-color: #00d5ff;
    color: #fff;
}

.btn.btn-primary:hover,
.btn.btn-primary:focus {
    background-color: #2c0782;
    border-color: transparent;
}

.btn.btn-primary[disabled],
fieldset[disabled] .btn.btn-primary {
    opacity: .35;
}

.btn.btn-success,
.btn.btn-danger,
.btn.btn-info,
.btn.btn-warning {
    border-color: transparent;
}

.btn .fa.fa-chevron-right {
    margin-left: 5px;
}

.shorten-text-overflow {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.form-control {
    box-shadow: none;
}

.form-control:focus {
    border-color: #00d5ff;
    box-shadow: 0 0 0 0.2rem rgba(0, 213, 255,.5);
}

.form-control.form-control-lg {
    padding: 20px 18px;
    font-size: 15px;
}

.jumbotron p {
    font-weight: normal;
}

.navbar {
    font-size: 14px;
}

.alert {
    border: 2px solid rgba(0,0,0,.3);
    border-radius: 0;
}

footer.footer {
    padding: 50px 0;
    background-color: #eee;
}

footer.footer .container:last-child {
    margin-top: 25px;
}

footer.footer .container:last-child span {
    margin-top: 12px;
}

footer.footer img {
    max-width: 175px;
}

footer.footer .col-md-4 {
    padding: 15px 0;
}

footer.footer ul {
    padding-left: 0;
}

footer.footer li {
    list-style-type: none;
}

footer.footer a, footer.footer a:hover {
    color: #000;
}

footer.footer .social-media a {
    font-size: 25px;
    margin-right: 5px;
}

.page-header {
    margin: 20px 0;
    position: relative;
}

.page-header h1, .page-header h3 {
    color: #000;
    font-weight: 900;
}

.page-header a:not(.btn):not(.show-more-link) {
    color: #000;
}

.page-header .show-more-link {
    position: absolute;
    right: 0;
    bottom: 13px;
}

.page-header h4, .page-header h4 {
    font-weight: 900;
    color: #999;
    text-transform: uppercase;
}

.dropdown-menu {
    margin-top: 4px !important;
}

/* Login */
.account-login-page {
    display: flex;
    margin-top: 0;
	align-items: center;
    justify-content: center;
	height: 100%;
}

.loginFormWrapper {
    width: 400px;
    height: 500px;
    background-color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
	border-radius: 25px;
}

.loginFormWrapper.fullWidth {
    width: 100%;
}

.loginForm {
    width: 300px;
}

.loginForm h1 {
    margin-bottom: 20px;
}

.loginForm hr.underline {
    background-color: #00d5ff;
    margin-bottom: 50px;
    margin-right: auto;
    margin-left: 0;
    text-align: left;
    height: 5px;
    width: 163px;
}

.loginForm img {
    margin-bottom: 25px;
}

.loginForm input, 
.loginForm p,
.loginForm .g-recaptcha {
    margin-top: 8px;
}

.loginForm .btn-default {
    background-color: #00d5ff;
    border-color: #00d5ff;
    color: #000;
}

.featuredImageWrapper {
    width: calc(100% - 700px);
    background-size: contain;
    background-position: center;
    background-image: url('/assets/images/road_cropped.jpg');
    background-blend-mode: multiply;
    position: relative;
    z-index: 1;
}

.featuredImageWrapper .creator,
.carousel-cell .creator {
    position: absolute;
    bottom: 20px;
    right: 20px;
    color: #fff;
    display: flex;
    align-items: center;
    z-index: 1;
}

.featuredImageWrapper .creator img,
.carousel-cell .creator img {
    margin-right: 10px;
    height: 25px;
    width: 25px;
}

.featuredImageWrapper:after {
    content: "";
    position: absolute;
    top: 0px;
    width: 100%;
    height: 100%;
    background: linear-gradient(-40deg, rgba(0,0,0,.5) 0%,rgba(0,0,0,0) 100%);
}

@media (max-width: 700px) {
    .featuredImageWrapper {
        display: none;
    }
    .loginFormWrapper {
        width: 100%;
    }
}


.profilePicture {
    height: auto;
    border-radius: 50%;
	max-height: 30px;
}
</style>
@endsection