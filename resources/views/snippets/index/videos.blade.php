<section class="tab-pane fade" role="tabpanel" aria-labelledby="videos-tab" id="videos">
    
    {{-- <h4 class="mb-0">Video program</h4>
    <span style="color: #fff">Recorded Program</span> --}}


    <div class="row row-cols-1 row-cols-md-2 g-4">

      @foreach ($videos as $post)
          <div class="col">
            <a href="{{ route('show.media', $post->id) }}">
              <div class="card bg-dark text-white">
                <img src="/storage/{{ $post->thumbnail }}" class="card-img opacity-100" alt="...">
                <div class="card-img-overlay" style="background: rgba(58, 57, 57, 0.5);">
                  <div class="play-button">
                    <span><i class="bi bi-play-circle-fill"></i></span>
                  </div>
                </div>
              </div>
              <div class="card-body" style="padding-left: 0">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text"><small class="text-muted">Uploaded {{$post->updated_at->diffForHumans()}}</small></p>
              </div>
            </a>
          
        </div>
      @endforeach
      
      

    </div>
    
    
  </section>