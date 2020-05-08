@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row no-gutter">
        <!-- The image half -->
        <div class="col-md-6 d-none d-md-flex bg-image"></div>


        <!-- The content half -->
        <div class="col-md-6 bg-light">
            <div class="pt-3">
                <button onclick="location.href = '/';" type="button" class="btn btn-outline-primary btn-go-back d-flex align-items-center">
                    <i class="fas fa-arrow-circle-left fa-2x"></i>
                    <h3 class="mb-0 pl-2">Zurück</h3>
                </button>
            </div>
            <div class="login d-flex align-items-center py-5">

                <!-- Demo content-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-xl-7 mx-auto">
                            <h3 class="display-4">{{ __('auth.Login') }}</h3>
                            <hr>
                            <form method="post" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="email" name="login"
                                        class="form-control{{ $errors->has('username') || $errors->has('email') ? '  is-invalid' : '' }} rounded-pill border-0 shadow-sm px-4"
                                        placeholder="{{ __('auth.email') }}"
                                        value="{{ old('username') ?: old('email') }}" required autocomplete="email"
                                        autofocus>
                                    @if ($errors->has('username') || $errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('username') ?: $errors->first('email') }}
                                        </strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" name="password"
                                        class="form-control rounded-pill border-0 shadow-sm px-4 text-primary @error('password') is-invalid @enderror"
                                        placeholder="{{ __('auth.password') }}" required
                                        autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input class="custom-control-input" type="checkbox" id="remember" name="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label class="custom-control-label"
                                        for="remember">{{ __('auth.remember_me') }}</label>
                                </div>
                                <button type="submit"
                                    class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">{{ __('auth.Login') }}</button>
                                <div class="text-center d-flex justify-content-between mt-4">
                                    @if (Route::has('password.request'))
                                    <p><a class="font-italic text-muted"
                                            href="{{ route('password.request') }}">{{ __('auth.forgot_password') }}</a>
                                    </p>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- End -->

            </div>
        </div><!-- End -->

    </div>
</div>
<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">
                                {{ __('Username') }}
                            </label>
                         
                            <div class="col-md-6">
                                <input id="username" type="text"
                                       class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}"
                                       name="username" value="{{ old('username') }}" required>
                         
                                @if ($errors->has('username'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
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
    .login,
    .image {
        min-height: 100vh;
    }

    .bg-image {
        background-image: url('{{$random_screenshot_file}}');
        background-size: cover;
        background-position: center center;
    }
    .btn-go-back{
        border: 0;
        color: black;
    }
</style>
@endsection
