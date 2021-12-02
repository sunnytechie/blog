@extends('layouts.app')

@section('content')
  
<div class="container">

  <div style="margin-top: 75px"></div>
    

    <div class="row">

    <div class="col-lg-3">
      @include('snippets.leftsidebar')
    </div>
      {{-- Main --}}
      <div class="col-lg-6 include-snippets">
        <div class="tab-content" id="myTabContent">

            {{-- show Media --}}
            @include('snippets.index.pages.media.show')
            
        
        </div>
      </div>

      {{-- Sidebar --}}
      <div class="col-lg-3">
          @include('snippets.sidebar')
      </div>
    </div>
</div>
@endsection
