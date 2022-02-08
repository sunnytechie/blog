<section class="tab-pane fade show active" role="tabpanel" aria-labelledby="featured-tab" id="featured">
    {{-- Devotional Slider section --}}
    @include('snippets.index.slides.devotion')
    {{-- Devotional Slider section --}}

    {{-- Hide below slide from desktop view --}}
    {{-- Post section --}}
    @include('snippets.index.slides.post')
    {{-- Post section --}}

    {{-- book section --}}
    @include('snippets.index.slides.book')
    {{-- book section --}}
    {{-- Post section --}}
    {{-- Post section --}}

  @foreach ($collection as $post)
  <div class="card my-card mb-3">
    <div class="card-header mb-0 pb-0">
      
      <div class="d-flex">
        <div class="flex-shrink-0">
          <img height="45" width="45" class="rounded-circle img-fluid border border-3 border-primary" src="{{ asset('assets/imgs/sfi-favicon.png') }}" alt="...">
        </div>
        <div class="flex-grow-1 ms-2">
          <Span style="font-weight: 550">Sisters' Fellowship International</Span> <br>
          <span style="font-size: 12px; color: rgb(179, 171, 171)">uploaded {{$post->updated_at->diffForHumans()}}</span>
        </div>
      </div>
      {{-- end header flex --}}
      
      <div class="pt-2">
        <p>{{ $post->title }}</p>
      </div>
    </div>
    @switch($post->category)
{{-- Starts--}}
        {{-- The switch statement here changes the link on the div based on the category Id of the post submitted to the database. --}}
        @case(4)
          <div class="link-div" onclick="location.href='{{ route('show.media', $post->id) }}';">
        @break

        @case(5)
          <div class="link-div" onclick="location.href='{{ route('show.media', $post->id) }}';">
        @break

        @case(6)
          <div class="link-div" onclick="location.href='{{ route('show.devotion', $post->id) }}';">
        @break
        
        @default
            <div class="link-div" onclick="location.href='{{ route('show.post', $post->id) }}';">
        @endswitch
        {{-- After switch the tag bellow is included --}}
              <img class="img-fluid" src="/storage/{{ $post->thumbnail }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">{!! Str::limit($post->body, 350) !!}</p>
                </div>
            </div>
        

        <div class="card-footer d-flex justify-content-start">
          <div class="icon-plus-counts p-2"><span><i class="bi bi-eye"></i> 100</span></div>
          <div class="icon-plus-counts p-2"><span><i class="bi bi-chat-right-dots"></i> 120</span></div>
        </div>
      </div>
{{-- end link div --}}
  @endforeach
    



  </section>