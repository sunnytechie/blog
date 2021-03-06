<section class="tab-pane fade show active" role="tabpanel" aria-labelledby="featured-tab" id="featured">
    
    {{-- Show page for post information --}}
      <div class="card my-card mb-3">
        <div class="card-header mb-0 pb-0">
          
          <div class="d-flex">
            <div class="flex-shrink-0">
              <img height="45" width="45" class="rounded-circle img-fluid border border-3 border-primary" src="{{ asset('assets/imgs/sfi-favicon.png') }}" alt="...">
            </div>
            <div class="flex-grow-1 ms-2">
              <Span style="font-weight: 550">Sisters' Fellowship International</Span> <br>
              <span style="font-size: 12px; color: rgb(179, 171, 171)">uploaded Yesterday</span>
            </div>
          </div>
          {{-- end header flex --}}
          
          <div class="pt-2">
            <p>{{ $postTitle }}</p>
          </div>
        </div>
  
        <div>
          <img class="img-fluid" src="/storage/{{ $postThumbnail }}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">{!! $postBody !!}</p>
            </div>
        </div>
  
        
      </div>
  
      {{-- Testimonials and prayer request modal.. Note that the click button is on the sidebar --}}
      @include('snippets.index.upload.testifyprayer')
  
  
    </section>