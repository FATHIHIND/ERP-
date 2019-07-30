@extends('layoutLogin.app')

@section('content')

<div class="limiter">
    
    <div class="container-login100">
        <div class="wrap-login100 p-t-85 p-b-20">
            
                    <form method="POST" action="{{ route('password.update') }}" class="login100-form validate-form">
                        @csrf

                        <div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate="Enter username">
                        <input type="hidden" name="token" value="{{ $token }}">
                         <span class="focus-input100" data-placeholder="Email"></span>
                 
                         <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

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
                <div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
                    <input class="input100 @error('password') is-invalid @enderror" type="password" name="password_confirmation" required autocomplete="new-password">
                    <span class="focus-input100" data-placeholder="Confirmer Password"></span>
                    <!-- <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"> -->

                </div>

<br><br>
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Inscrire
                    </button>
                   
       
                </div>

                        <!-- <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

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
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div> -->
                    </form>
                    </div>
    </div>
</div>

               
@endsection
