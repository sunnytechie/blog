
  <section class="tab-pane fade" role="tabpanel" aria-labelledby="transcript-tab" id="transcript">
    
    {{-- <h4 class="mb-0">Sermon Notes</h4>
    <span style="color: #fff">Transcripts</span> --}}

    @foreach ($transcripts as $post)
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

        <div class="link-div" onclick="location.href='{{ route('show.post', $post->id) }}';">
          <img class="img-fluid" src="/storage/{{ $post->thumbnail }}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">{!! Str::limit($post->body, 400) !!}</p>
            </div>
        </div>

        <div class="card-footer d-flex justify-content-between">
          <div class="p-1">
            <div class="icon-plus-counts p-2">
              <span style="padding-right: 10px"><i class="bi bi-eye"></i> 100</span>
              <span><i class="bi bi-chat-right-dots"></i> 120</span>
            </div>
          </div>

          <div class="p-1">
            <div class="icon-plus-counts p-2"><span><i class="bi bi-three-dots-vertical"></i> Option</span></div>
          </div>
          
        </div>
      </div>
    @endforeach
  
  </section>