@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="theme-login">
          <div class="theme-login-header">
            <h1 class="theme-login-title">Passwords Reset</h1>
            <p class="theme-login-subtitle">Restore your forgotten password</p>
          </div>
          <div class="theme-login-box">
            <div class="theme-login-box-inner">
              <p class="theme-login-pwd-reset-text">Enter the email associated with your account in the field below and we'll email you a link to reset your password.</p>
              <div class="form-group theme-login-form-group">
                <input class="form-control" type="text" placeholder="Email Adress"/>
              </div>
              <button type="submit" class="btn btn-uc btn-dark btn-block btn-lg" href="#">Reset Password</button>
              <a class="theme-login-pwd-reset-back" href="{{route('login')}}">Remember the password?</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
</div>
@endsection
