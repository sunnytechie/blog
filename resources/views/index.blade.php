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

          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="card">
              <div class="card-header">
                <h4>Admin Dashboard</h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header">
                        <h4>Users</h4>
                      </div>
                      <div class="card-body">
                        <h5>Total Users: {{ $users }}</h5>
                        <h5>Active Users: {{ $active }}</h5>
                        <h5>Inactive Users: {{ $inactive }}</h5>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header">
                        <h4>Posts</h4>
                      </div>
                      <div class="card-body">
                        <h5>Total Posts: {{ $posts }}</h5>
                        <h5>Active Posts: {{ $active_posts }}</h5>
                        <h5>Inactive Posts: {{ $inactive_posts }}</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

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
