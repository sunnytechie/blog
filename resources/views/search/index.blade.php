@extends('layouts.app')
@section('content')

<section style="margin-top: 100px">
    <div class="container">
        <div class="row">
            <div class="col-md-7 offset-md-1">
              @if($searches->isNotEmpty())
                @foreach ($searches as $search)
                <a href="/post/{{ $search->id }}" style="text-decoration: none;">
                    <div class="card my-card mb-3">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="/storage/{{ $search->thumbnail }}" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">{{ $search->title }}</h5>
                              <span class="card-text">{!! Str::limit($search->body, 160) !!}</span>
                              <p class="card-text"><small class="text-muted">Published {{$search->updated_at->diffForHumans()}}</small></p>
                            </div>
                          </div>
                        </div>
                      </div>
                </a>
                @endforeach   
                @else
                 <div class="card my-card">
                   <div class="card-body">
                     <p class="card-text">Nothing found, kindly search again.</p>
                   </div>
                 </div>
                @endif             
            </div>

            {{-- Testimonials and prayer request modal.. Note that the click button is on the sidebar --}}
            @include('snippets.index.upload.testifyprayer')
            
            <div class="col-md-3">
                @include('snippets.sidebar')
            </div>
        </div>
        
    </div>
</section>

@endsection