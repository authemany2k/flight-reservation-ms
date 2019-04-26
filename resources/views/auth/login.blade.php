@extends('layouts.auth')

@section('content')
    <div class="theme-login theme-login-white">
      <!-- <div class="theme-login-header">
        <h1 class="theme-login-title">Sign In</h1>
        <p class="theme-login-subtitle">Login into your Bookify account</p>
      </div> -->
      <div class="theme-login-box">
        <div class="theme-login-box-inner">
          <form class="theme-login-form" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group theme-login-form-group">
              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address"/>
            </div>
            <div class="form-group theme-login-form-group">
              <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="current-password" placeholder="Password"/>
              <p class="help-block">
                @if (Route::has('password.request'))
                  <a class="btn btn-link" href="{{ route('password.request') }}">
                      {{ __('Forgot Your Password?') }}
                  </a>
                @endif
              </p>
            </div>
            <div class="form-group">
              <div class="theme-login-checkbox">
                <label class="icheck-label">
                  <input class="icheck" type="checkbox name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <span class="icheck-title">{{ __('Keep me logged in') }}</span>
                </label>
              </div>
            </div>
            <button type="submit" class="btn btn-uc btn-dark btn-block btn-lg">{{ __('Sign In') }}</button>
          </form>
          <!-- <div class="theme-login-social-separator">
            <p>{{ __('or sign in with social media') }}</p>
          </div>
          <div class="theme-login-social-login">
            <div class="row" data-gutter="10">
              <div class="col-xs-6">
                <a class="theme-login-social-login-facebook" href="#">
                  <i class="fa fa-facebook-square"></i>
                  <span>{{ __('Sign in with') }}
                    <br/>
                    <b>Facebook</b>
                  </span>
                </a>
              </div>
              <div class="col-xs-6">
                <a class="theme-login-social-login-google" href="#">
                  <i class="fa fa-google-plus-circle"></i>
                  <span>Sign in with
                    <br/>
                    <b>Google</b>
                  </span>
                </a>
              </div>
            </div>
          </div> -->
        </div>
        <div class="theme-login-box-alt">
          <p>Don't have an account? &nbsp;
            <a href="{{route('register')}}">Sign up now.</a>
          </p>
        </div>
      </div>
      <p class="theme-login-terms">By logging in you accept our
        <a href="#">terms of use</a>
        <br/>and
        <a href="#">privacy policy</a>.
      </p>
    </div>
@endsection
