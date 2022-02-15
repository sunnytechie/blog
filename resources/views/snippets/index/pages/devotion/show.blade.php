<section class="tab-pane fade show active" role="tabpanel" aria-labelledby="featured-tab" id="featured">
    
    {{-- Show page for post information --}}
      <div class="card my-card mb-3">
        <div class="card-header mb-0 pb-2">
          
          <div class="d-flex">
            <div class="flex-shrink-0">
              <img height="45" width="45" class="rounded-circle img-fluid border border-3 border-primary" src="{{ asset('assets/imgs/sfi-favicon.png') }}" alt="...">
            </div>
            <div class="flex-grow-1 ms-2">
              <Span style="font-weight: 550; font-size: 28px; text-transform: capitalize">{{ $postTitle }}</Span> <br>
              
              <span style="font-size: 12px; color: rgb(226, 226, 220); text-transform: capitalize">{{ $read_time }}</span>
            </div>
          </div>
          {{-- end header flex --}}
          
         <p style="text-transform: capitalize">{!! $postMemoryVerse !!}</p>
        </div>
  
        <div>
          <img class="img-fluid" src="/storage/{{ $postThumbnail }}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">{!! $postBody !!}</p>

              <h5>Prayer:</h5>
              <p class="card-text">{!! $postPrayer !!}</p>
            </div>
        </div>
  
        
      </div>
  
  
  
    </section>