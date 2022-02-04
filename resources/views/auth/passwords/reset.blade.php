@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3 mt-5">
                <div class="mt-4">
                    
                        <form 
                            style="background: #242526" 
                            class="shadow rounded p-4 sign-up-in-form" method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <div class="card-body">
                                <h5 class="mb-4 text-center">Reset Your Password</h5>
                                <input type="hidden" name="token" value="{{ $token }}">
                            </div>

                        <div class="exclude-check-box">
                            <div class="mb-3 row">

                                <div class="col-md-12">
                                    <span style="position: absolute; color: #fff; margin-top: 7px; margin-left: 13px"><i class="bi bi-person"></i></span>

                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    placeholder="E-mail Address"    
                                    name="email" value="{{ $email ?? old('email') }}" required autocomplete="email"
                                        autofocus>

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
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        placeholder="New Password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">

                                <div class="col-md-12">
                                    <span style="position: absolute; color: #fff; margin-top: 7px; margin-left: 13px"><i class="bi bi-eye-slash"></i></span>
                                    <input id="password-confirm" type="password" class="form-control"
                                    placeholder="Confirm Password"    
                                    name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                        </div>

                            <div class="mb-3 row">
                                <div class="col-md-12">
                                    <button style="background: #242526; color: #fff; border-radius: 100px; border: 1px solid #ddd" type="submit" class="btn w-100 btn-default">
                                        {{ __('Reset Password') }}
                                    </button>
                                </div>
                            </div>

                        </form>
                   
                </div>
            </div>
        </div>
    </div>
@endsection
