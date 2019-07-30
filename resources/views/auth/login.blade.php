@extends('layoutLogin.app')
@section('page-title')
ERP Σ
@endsection
@section('content')

<!------ Include the above in your HEAD tag ---------->

    <div class="limiter">
    
        <div class="container-login100">
            <div class="wrap-login100 p-t-85 p-b-20">
           
         
                <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                 @csrf
              
                   
                    <div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate="Enter username">
                        <input class="input100 @error('email') is-invalid @enderror" type="text" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus >
                        <span class="focus-input100" data-placeholder="Email"></span>
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                    <div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
                        <input class="input100 @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="current-password">
                        <span class="focus-input100" data-placeholder="Password"></span>
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
 <br><br>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Connecter
                        </button>
                        <ul class="login-more p-t-150">
                        <li class="m-b-8">
							<span class="txt1">
                            Oublier
							</span>
                            @if (Route::has('password.request'))
                                    <a class="txt2" href="{{ route('password.request') }}">
                                    Nom d'utilisateur   / Passwort?       
                                    </a>
                                @endif
                            
                        </li>

                        <li>
							<span class="txt1">
                            Je n'ai pas de compte?
							</span>

                            <a href="{{ route('register') }}" class="txt2">
                            Inscription
                            </a>
                        </li>
                    </ul>
           
                    </div>

                    <!-- <ul class="login-more p-t-150">
                        <li class="m-b-8">
							<span class="txt1">
								Vergessen
							</span>

                            <a href="#" class="txt2">
                                Nutzername / Passwort?
                            </a>
                        </li>

                        <li>
							<span class="txt1">
								Haben Sie kein konto?
							</span>

                            <a href="#" class="txt2">
                                Sign up
                            </a>
                        </li>
                    </ul> -->
                </form>
              
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>
</div>
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}
           
                </div>

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
</div> -->


@endsection
