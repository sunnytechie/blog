@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 mt-5">
                <div class="mt-4">
                    <form 
                    style="background: #242526" 
                    class="shadow rounded p-4 sign-up-in-form" method="POST" action="{{ route('login') }}">
                            @csrf

                            <div style="text-align: center" class="p-2">
                                <img class="img-fluid" src="{{ asset('assets/imgs/sfi-favicon.png') }}" alt="">
                            </div>
                                
                                <h5 class="mb-4 text-center">Log in</h5>

                           
                                <div class="mb-3 row">
                                <div class="col-md-12">
                                    <span style="position: absolute; color: #fff; margin-top: 7px; margin-left: 13px"><i class="bi bi-person"></i></span>
                                    
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" placeholder="E-Mail Address" autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                </div>

                            <div class="mb-3 row">

                                <div class="col-md-12">

                                    <span style="position: absolute; color: #fff; margin-top: 7px; margin-left: 13px"><i class="bi bi-eye-slash"></i></span>
                                    <input id="password" type="password"
                                    placeholder="Password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                         autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input style="outline: 1px solid #fff; margin-right: 8px" class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <label style="color: #fff" class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <div class="col-md-12">
                                    <p style="text-align: right">
                                            @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </p>
                                        <button style="background: #242526; color: #fff; border-radius: 100px; border: 1px solid #ddd" type="submit" class="btn w-100 btn-default">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <div class="col-md-12">
                                        <button style="background: #242526; color: #fff; border-radius: 8px; border: 1px solid #ddd" type="submit" class="btn w-100 btn-default mt-4">
                                            <span><i class="bi bi-facebook"></i></span> Facebook
                                        </button>
        
                                        <button style="background: #242526; color: #fff; border-radius: 8px; border: 1px solid #ddd" type="submit" class="btn w-100 btn-default mt-3">
                                            <span><i class="bi bi-google"></i></span> Google
                                        </button>
                                    </div>
                                </div>
                        </form>
                </div>  
            </div>  
        </div>
    </div>
@endsection
