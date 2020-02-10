@extends('layouts.loginlayout')

@section('content')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown top-buffer">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first p-2 m-3">
      <img src="https://pbs.twimg.com/profile_images/1016296857658646528/PuUowGbn_400x400.jpg" id="icon" alt="User Icon" height="125" width="90">
    </div>
    
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>
            {{-- <input type="text" id="login" class="fadeIn second" name="login" placeholder="{{ __('E-Mail Address') }}"> --}}

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

        {{-- remmeber me ? --}}

        {{-- <div class="form-group row">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div> --}}

        <div class="form-group row mb-0">
            <div class="offset-md-4">
                
                <input type="submit" class="fadeIn fourth" value="Log In">

            </div>
        </div>
        
    </form>

    <!-- Remind Passowrd -->
    <form method="POST" action="{{ route('login') }}">
        @csrf
        @if (Route::has('password.request'))
        <div id="formFooter">

            {{-- <a class="underlineHover" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
            </a> --}}

            <a class="underlineHoverRegister underlineHover" href="/register">
                {{ __('Register') }}
            </a>
           
        </div>
        @endif
    </form>
  </div>
</div>

@endsection
