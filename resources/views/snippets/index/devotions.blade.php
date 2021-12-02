<section class="tab-pane fade" role="tabpanel" aria-labelledby="devotions-tab" id="devotions">

       

    <div class="row row-cols-1 row-cols-md-2 g-4">
      @foreach ($devotions as $post) 
        <div class="col">
          <a href="{{ route('show.devotion', $post->id) }}">
            <div class="card my-card h-100">
              <img src="/storage/{{ $post->thumbnail }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <h5 class="card-title">{{ $post->display_date }}</h5>
                <p class="card-text">{!! Str::limit($post->body, 200) !!}</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">uploaded {{$post->updated_at->diffForHumans()}}</small>
              </div>
            </div>
          </a>
        </div>
      @endforeach
    </div>
    
  
  </section>