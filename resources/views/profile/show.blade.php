@extends('layouts.app')
@section('content')

<section style="margin-top: 100px">
    <div class="container">
        <div class="row">
            <div class="col-md-3 offset-md-1">
                {{-- User Profile picture --}}
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('storage/'.$user->profile->user_thumbnail) }}" alt="Profile Image">
                </div>
            </div>
            <div class="col-md-7">
                {{-- Profile details --}}
                <div class="card my-card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $user->name }}</h5>
                        <p class="card-text">{{ $user->profile->id! }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection