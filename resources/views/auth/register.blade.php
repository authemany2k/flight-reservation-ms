@extends('layouts.auth')

@section('content')
<div class="theme-login">
  <!-- <div class="theme-login-header">
    <h1 class="theme-login-title">Sign Up</h1>
    <p class="theme-login-subtitle">Create new Bookify account</p>
  </div> -->
  <div class="theme-login-box">
    <div class="theme-login-box-inner">
      <form class="theme-login-form" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group theme-login-form-group">
          <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Your Name">
        </div>
        <div class="form-group theme-login-form-group">
          <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address"/>
        </div>
        <div class="form-group theme-login-form-group">
          <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="new-password" placeholder="Create Password"/>
        </div>
        <div class="form-group theme-login-form-group">
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password"/>
        </div>
            <input type="hidden" name="phone" value="0705459494">
            <input type="hidden" name="role" value="admin">
            <input type="hidden" name="passport" value="AXXXXXXXXXXXX">
            <input type="hidden" name="travelers[]" value="n/a">
        <button type="submit" class="btn btn-uc btn-dark btn-block btn-lg" href="#">Create Account</button>
      </form>
      <!-- <div class="theme-login-social-separator">
        <p>or sign up with social media</p>
      </div>
      <div class="theme-login-social-login">
        <div class="row" data-gutter="10">
          <div class="col-xs-6">
            <a class="theme-login-social-login-facebook" href="#">
              <i class="fa fa-facebook-square"></i>
              <span>Sign up with
                <br/>
                <b>Facebook</b>
              </span>
            </a>
          </div>
          <div class="col-xs-6">
            <a class="theme-login-social-login-google" href="#">
              <i class="fa fa-google-plus-circle"></i>
              <span>Sign up with
                <br/>
                <b>Google</b>
              </span>
            </a>
          </div>
        </div>
      </div> -->
    </div>
    <div class="theme-login-box-alt">
      <p>Already have an account? &nbsp;
        <a href="{{route('login')}}">Sign in.</a>
      </p>
    </div>
  </div>
  <p class="theme-login-terms">By signing up you accept our
    <a href="#">terms of use</a>
    <br/>and
    <a href="#">privacy policy</a>.
  </p>
</div>
@endsection
