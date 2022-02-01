@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3 mt-5">
                <div class="mt-4">

                    <form 
                    style="background: #242526" 
                    class="shadow rounded p-4 sign-up-in-form" method="POST" action="{{ route('register') }}">
                        @csrf
                        {{-- <div style="text-align: center" class="p-2">
                        <img class="img-fluid" src="{{ asset('assets/imgs/sfi-favicon.png') }}" alt="">
                        </div> --}}
                        
                        <div class="card-body">
                            <h5 class="mb-4 text-center">Welcome!</h5>
                            <div class="btn-group w-100" role="group">
                                <a href="{{ route('login') }}" class="btn btn-default btn-sidebar btn-color">Login</a>
                                <a href="{{ route('register') }}" class="btn btn-default btn-sidebar btn-color" style="background: #3a3b3c">SignUp</a>
                            </div>
                        </div>

                         <div class="exclude-check-box">

                            <div class="mb-3 row">
                                <div class="col-md-12">
                                    <span style="position: absolute; color: #fff; margin-top: 7px; margin-left: 13px"><i class="bi bi-person"></i></span>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" autocomplete="name" autofocus
                                        placeholder="{{ __('Name') }}">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <div class="col-md-12">
                                    <span style="position: absolute; color: #fff; margin-top: 7px; margin-left: 13px"><i class="bi bi-at"></i></span>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" autocomplete="email" autofocus
                                        placeholder="{{ __('E-Mail Address') }}">

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
                                        autocomplete="new-password"
                                        placeholder="{{ __('Password') }}">

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
                                    <input id="password-confirm" type="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        name="password_confirmation" autocomplete="new-password"
                                        placeholder="{{ __('Confirm Password') }}">
                                </div>
                            </div>

                        </div>

                        <div class="mb-3 row">
                            <div class="col-md-12">
                                <div class="form-check" style="color: #fff">
                                    <input style="margin-right: 8px; outline: 1px solid #fff;" id="my-input" class="form-check-input include-check-box" type="checkbox" name="" required>
                                    <label for="my-input" class="form-check-label" style="font-size: 12px">Accept our terms and conditions.</label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <div class="col-md-12">
                                <button style="background: #242526; color: #fff; border-radius: 100px; border: 1px solid #ddd" type="submit" class="btn w-100 btn-default mt-4">
                                    {{ __('SignUp') }}
                                </button>
                            </div>
                        </div>


                        {{-- <div class="mb-3 row">
                            <div class="col-md-12">
                                <button style="background: #242526; color: #fff; border-radius: 8px; border: 1px solid #ddd" type="submit" class="btn w-100 btn-default mt-4">
                                    <span><i class="bi bi-facebook"></i></span> Facebook
                                </button>

                                <button style="background: #242526; color: #fff; border-radius: 8px; border: 1px solid #ddd" type="submit" class="btn w-100 btn-default mt-3">
                                    <span><i class="bi bi-google"></i></span> Google
                                </button>
                            </div>
                        </div> --}}
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
