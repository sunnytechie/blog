<section class="tab-pane fade show active" role="tabpanel" aria-labelledby="featured-tab" id="featured">
    
  @include('snippets.index.slider1')
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
          <p>Higher officials conference</p>
        </div>
      </div>

      <div class="link-div" onclick="location.href='#';">
        <img class="img-fluid" src="{{ asset('assets\imgs\pumpkins-5641482_1920.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
      </div>

      <div class="card-footer d-flex justify-content-start">
        <div class="icon-plus-counts p-2"><span><i class="bi bi-eye"></i> 100</span></div>
        <div class="icon-plus-counts p-2"><span><i class="bi bi-chat-right-dots"></i> 120</span></div>
      </div>
    </div>



  </section>