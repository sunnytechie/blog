<section class="sidebar">

  {{-- <div class="card my-card mb-2">
    <div class="card-header">
      Business Profile
    </div>
    <div class="card-body">
        <p>Build a personal Business account with other Sisters' in the ministry.</p>
        <a href="#" class="btn btn-default btn-sidebar w-100 btn-color">Let Build</a>
    </div>
  </div> --}}

  <div class="card my-card mb-2">
    <div class="card-header">
      Prayer Request & Testimony
    </div>
    <div class="card-body">
        <p>Kindly Send Your Prayer Request or Testimonies here and we will recieve it.</p>
        <button class="btn btn-default btn-sidebar w-100 btn-color" data-bs-toggle="modal" data-bs-target="#staticBackdropTestifyPrayer">Send now!</button>
    </div>
  </div>

  @if ($latest_declaration != null)
  <div class="card my-card mb-2">
    <div class="card-header">
     Weekly declaration
    </div>
    <div class="card-body d-flex justify-content-between">
      {{-- <div class="thumbnail">
        <img height="45" width="45" src="{{ asset('assets/imgs/icons-hero.png') }}" alt="">
      </div> --}}
      <div class="blockqout">
        <blockquote class="blockquote mb-0">
          
          <p>{!! $latest_declaration->body !!}</p>
         
        
        <footer class="blockquote-footer">Rev. Mrs. Nches Iredu <cite title="Source Title">President & Founder S.F.I</cite></footer>
      </blockquote>
      </div>
      <div class="icon-to-the-right">
        <span><i class="bi bi-stickies"></i></span>
      </div>
    </div>
  </div>
  @endif
</section>