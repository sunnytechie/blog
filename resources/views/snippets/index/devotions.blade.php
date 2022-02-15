<section class="tab-pane fade" role="tabpanel" aria-labelledby="devotions-tab" id="devotions">

       

    <div class="row row-cols-1 row-cols-md-2 g-4">
      @foreach ($devotions as $devotion)
        <div class="col">
          <a style="text-decoration: none" href="{{ route('show.devotion', $devotion->id) }}">
            <div class="card my-card h-100">
              <img src="/storage/{{ $devotion->thumbnail }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title" style="text-transform: capitalize">{{ $devotion->title }}</h5>
                @php
                    $date = Carbon::parse($devotion->display_date);
                    $read_time = $date->isoFormat('MMMM Do YYYY'); 
                @endphp
                <h5 class="card-title" style="color: rgb(179, 171, 171); text-transform: capitalize">{{ $read_time }}</h5>
                <p class="card-text" style="text-transform: capitalize">{!! Str::limit($devotion->memory_verse, 200) !!}</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">uploaded {{$devotion->updated_at->diffForHumans()}}</small>
              </div>
            </div>
          </a>
        </div>
      @endforeach
    </div>
    
  
  </section>