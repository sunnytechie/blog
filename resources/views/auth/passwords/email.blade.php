@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3 mt-5">
                
                <div class="mt-4">
                   
                        <form
                        style="background: #242526" 
                        class="shadow rounded p-4 sign-up-in-form" method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="card-body">

                                <h5 style="font-size: 14px" class="text-center">Kindly reset your password here!</h5>

                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                            </div>

                            <div class="exclude-check-box">
                                <div class="mb-3 row"> 
                                    <div class="col-md-12">
                                        <span style="position: absolute; color: #fff; margin-top: 7px; margin-left: 13px"><i class="bi bi-person"></i></span>

                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}"
                                            placeholder="Enter Your E-mail Address"
                                         autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 row">

                                    <button style="background: #242526; color: #fff; border-radius: 100px; border: 1px solid #ddd" type="submit" class="btn w-100 btn-default">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                    
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
@endsection
