@extends('layouts.app')

@section('content')

@include('snippets.tabs')
  
<div class="container">
    

    <div class="row">

    <div class="col-md-3">
      @include('snippets.leftsidebar')
    </div>
      {{-- Main --}}
      <div class="col-md-6 include-snippets">
        <div class="tab-content" id="myTabContent">
          
        @include('snippets.index.featured')
        

        @include('snippets.index.announcement')
        

        @include('snippets.index.videos')
        

        @include('snippets.index.podcast')
        

        @include('snippets.index.transcript')
        
        @include('snippets.index.events')
        

        @include('snippets.index.devotions')
        

        @include('snippets.index.blog')
        
        </div>
      </div>

      {{-- Sidebar --}}
      <div class="col-md-3">
          @include('snippets.sidebar')
      </div>
    </div>
</div>
@endsection
