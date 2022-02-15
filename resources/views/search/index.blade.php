@extends('layouts.app')
@section('content')

<section style="margin-top: 100px">
    <div class="container">
        <div class="row">
            <div class="col-md-7 offset-md-1">
                @foreach ($searches as $search)
                <a href="/post/{{ $search->post_id }}" style="text-decoration: none;">
                    <div class="card my-card mb-3">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="/storage/{{ $search->post_thumbnail }}" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">{{ $search->post_title }}</h5>
                              <span class="card-text">{!! Str::limit($search->post_body, 50) !!}</span>
                              <p class="card-text"><small class="text-muted">Visited {{$search->updated_at->diffForHumans()}}</small></p>
                            </div>
                          </div>
                        </div>
                      </div>
                </a>
                
                @endforeach                
            </div>

            <div class="col-md-3">
                @include('snippets.sidebar')
            </div>
        </div>
        
    </div>
</section>

@endsection