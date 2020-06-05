@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row no-gutter">
        <!-- The image half -->
        <div class="col-md-6 d-none d-md-flex bg-image">
            <div id="pic-author" class="col-sm-2 fixed-bottom float-right py-3 pl-2">
                <div class="d-flex align-items-center blur rounded py-1">
                    <img src="https://scontent-frt3-1.cdninstagram.com/v/t51.2885-19/s150x150/87597836_600329690520870_5158951713356382208_n.jpg?_nc_ht=scontent-frt3-1.cdninstagram.com&_nc_ohc=Kra-lqbvBH8AX9k65Sb&oh=3749e6b365fb5bec1510a98783d39f3c&oe=5EDD55BD" 
                        class="rounded-circle pl-1" alt="@joschi_service" style="height: 30px;">
                    <p class="mb-0 pl-1"><strong>@joschi_service</strong></p>
                </div>
            </div>
        </div>


        <!-- The content half -->
        <div class="col-md-6 bg-light animated fadeInRight">
            <div class="pt-3">
                <button onclick="location.href = '/';" type="button" class="btn btn-outline-primary btn-go-back d-flex align-items-center">
                    <i class="fas fa-arrow-circle-left fa-2x go-back-icon"></i>
                    <h3 class="mb-0 pl-2">{{ __('auth.go_back') }}</h3>
                </button>
            </div>
            <div class="login d-flex align-items-center py-5">
                <!-- Demo content-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-xl-7 mx-auto">
                            <h3 class="display-4">{{ __('auth.Register') }}</h3>
                            <hr>
                            <form method="POST" action="{{ route('register') }}">
                                 @csrf
                                <div class="form-group mb-3">
                                    <input id="name" type="text" class="login-register-form-control form-control @error('name') is-invalid @enderror rounded-pill border-0 shadow-sm px-4" name="name" value="{{ old('name') }}" placeholder="{{__('auth.name')}}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror    
                                </div>
                                <div class="form-group mb-3">
                                    <input id="username" type="text"
                                    class="login-register-form-control form-control{{ $errors->has('username') ? ' is-invalid' : '' }} rounded-pill border-0 shadow-sm px-4"
                                    name="username" value="{{ old('username') }}" placeholder="{{ __('auth.username') }}" required>
                                    @if ($errors->has('username'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input id="email" type="email" class="login-register-form-control form-control @error('email') is-invalid @enderror rounded-pill border-0 shadow-sm px-4" name="email" value="{{ old('email') }}" placeholder="{{ __('auth.email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <input id="password" type="password" placeholder="{{ __('auth.password') }}" class="login-register-form-control form-control @error('password') is-invalid @enderror rounded-pill border-0 shadow-sm px-4" name="password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <input id="password-confirm" type="password" class="login-register-form-control form-control rounded-pill border-0 shadow-sm px-4" placeholder="{{ __('auth.confirm_password') }}" name="password_confirmation" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="submit"
                                    class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">{{ __('auth.Login') }}</button>
                                <div class="text-center d-flex justify-content-between mt-4">
                                    @if (Route::has('password.request'))
                                    <p><a class="font-italic text-muted"
                                            href="{{ route('password.request') }}">{{ __('auth.accept_conditions') }}</a>
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

@endsection
@section('css')
<style>
    body{
        overflow: hidden;
    }
    .login,
    .image {
        height: 100vh;
    }

    .bg-image {
        background-image: url('{{$random_screenshot_file}}');
        background-size: cover;
        background-position: center center;
    }
</style>
@endsection
