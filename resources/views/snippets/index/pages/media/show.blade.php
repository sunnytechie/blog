<section class="tab-pane fade show active" role="tabpanel" aria-labelledby="featured-tab" id="featured">
    {{-- Show page for post information --}}
      <div class="card my-card mb-3">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $postUrl }}?rel=0" title="YouTube Video" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" width="100%" height="350" allowfullscreen></iframe>
          </div>
      
        
        {{-- end video frame --}}

        <div class="card-footer mb-0 pb-2">
          
            <div class="d-flex">
              <div class="flex-shrink-0">
                <img height="45" width="45" class="rounded-circle img-fluid border border-3 border-primary" src="{{ asset('assets/imgs/sfi-favicon.png') }}" alt="...">
              </div>
              <div class="flex-grow-1 ms-2">
                <Span style="font-weight: 550; font-size: 16px">{{ $postTitle }}</Span> <br>
                <span style="font-size: 12px; color: rgb(221, 221, 217)">Uploaded ?</span>
              </div>
            </div>
            {{-- end header flex --}}

            <p>
                {!! $postBody !!}
            </p>
            
          </div>
      </div>
    </section>