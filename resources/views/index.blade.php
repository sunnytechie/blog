@extends('layouts.app')

@section('content')

@include('snippets.tabs')
  
<div class="container">
    

    <div class="row">

    <div class="col-lg-3">
      @include('snippets.leftsidebar')
    </div>
      {{-- Main --}}
      <div class="col-lg-6 include-snippets">
        <div class="tab-content" id="myTabContent">


        @if (!Auth::guest() && Auth::user()->user_type == '1')
        
                  {{-- Upload sniffets available only to administrators --}}
                  @include('snippets.index.uploads')
            
        @endif

        @include('snippets.index.featured')
        

        @include('snippets.index.announcement')
        

        @include('snippets.index.videos')
        

        @include('snippets.index.podcast')
        

        @include('snippets.index.transcript')
        
        
        @include('snippets.index.events')
        

        @include('snippets.index.devotions')


        @include('snippets.index.bible')
        

        @include('snippets.index.blog')
        
        </div>
      </div>

      {{-- Sidebar --}}
      <div class="col-lg-3">
          @include('snippets.sidebar')
      </div>
    </div>
</div>
@endsection
