    @extends('layouts.registerlayout')

    @section('content')
    {{-- <div class="container">
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
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror text-right" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror text-right" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror text-right" name="password" required autocomplete="new-password">

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
    </div>
    <hr> --}}

    <div class="container">
        <div class="signup-content">
        <div class="col-6 imageContainer">
            <img src="https://etidal.org/upload/2018/02/etidal_logo_ar.1.png" class="" alt="" id="picture">
        </div>
        <div class="signup-form">
        <h2 class="font-face form-title text-right"> تسجيل الدخول</h2>
            <form method="POST" class="register-form" id="register-form" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                    {{-- <input type="text" name="name" id="name" placeholder="Your Name" class="text-right"> --}}
                     <input id="name" type="text" class="form-control @error('name') is-invalid @enderror text-right" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="إسم المستخدم" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div> 
                     <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>  
                        {{-- <input type="email" name="email" id="email" placeholder="Your Email" class="text-right"> --}}
                         <input id="email" type="email" class="form-control @error('email') is-invalid @enderror text-right" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="البريد الإلكتروني">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                 <div class="form-group">
                    <label for="pass"><i class="zmdi zmdi-lock"></i></label>  
                    {{-- <input type="password" name="pass" id="pass" placeholder="Password" class="text-right"> --}}
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror text-right" name="password" required autocomplete="new-password" placeholder="الرقم السري"> 

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="form-group">
                    <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label> 
                    {{-- <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" class="text-right"> --}}
                    <input id="password-confirm" type="password" class="text-right form-control" name="password_confirmation" required autocomplete="new-password" placeholder="تأكيد الرقم السري">
                </div>

                <div class="right floated column">
                    <button type="submit" class="right floated column ui primary button ">
                        {{ __('تسجيل') }}
                    </button>
                    {{-- <input type="submit" class="btn btn-light"> --}}
                    
                </div>
            </form>
        </div>
        
    @endsection
