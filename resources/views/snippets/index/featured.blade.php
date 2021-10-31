<section class="tab-pane fade show active" role="tabpanel" aria-labelledby="featured-tab" id="featured">
    
  <div class="mb-3">
    <h4 class="mb-0">Featured</h4>
    <span style="color: #fff">Top stories</span>
  </div>
    
    <div class="card my-card mb-3" onclick="location.href='#';">
      <div class="card-header p-3">
        
        <div class="d-flex">
          <div class="flex-shrink-0">
            <img height="45" width="45" class="rounded-circle img-fluid border border-3 border-primary" src="{{ asset('assets/imgs/sfi-favicon.png') }}" alt="...">
          </div>
          <div class="flex-grow-1 ms-3">
            This is some content from a media component. You can replace this with any content and adjust it as needed.
          </div>
        </div>
        
      </div>

      {{-- Only show image when it not null --}}
      <img class="img-fluid" src="{{ asset('assets\imgs\pumpkins-5641482_1920.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>

      <div class="card-footer d-flex justify-content-start">
        <div class="icon-plus-counts p-2"><span><i class="bi bi-eye"></i> 100</span></div>
        <div class="icon-plus-counts p-2"><span><i class="bi bi-chat-right-dots"></i> 120</span></div>
      </div>
    </div>


    <div class="card my-card mb-3" onclick="location.href='#';">
      <div class="card-header p-3">
        
        <div class="d-flex">
          <div class="flex-shrink-0">
            <img height="45" width="45" class="rounded-circle img-fluid border border-3 border-primary" src="{{ asset('assets/imgs/sfi-favicon.png') }}" alt="...">
          </div>
          <div class="flex-grow-1 ms-3">
            This is some content from a media component. You can replace this with any content and adjust it as needed.
          </div>
        </div>
        
      </div>
      
      <img src="{{ asset('assets/imgs/tree-gb4a9bba8d_640.jpg') }}" class="card-img-top" alt="...">

      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>


  </section>