<section>
    <div class="card my-card mb-2">
      <a target="_blank" href="#">
        <div style="cursor: pointer">

        <button class="btn btn-default w-100" type="button" style="color: #ddd">
            <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
            Happening Live...
        </button>

      </div>
      </a>
    </div>

    <div class="card my-card mb-2">
      <div class="card-header">
        donate
      </div>
      <div class="card-body">
          <p>Give tithe and offering on paystack or paypal</p>
          <a href="#" class="btn btn-default btn-sidebar w-100 btn-color">Pay Securely</a>
      </div>
    </div>

      <div class="info-section">
        @if ($latest_declaration != null)
        <div class="card my-card mb-2">
          <div class="card-header">
            weekly declarations
          </div>

          <div class="card-body d-flex justify-content-between">
            <div class="blockqout">
              <blockquote class="blockquote mb-0">
              <p>{!! $latest_declaration->body !!}</p>
              <footer class="blockquote-footer">Rev. Mrs. Nches Iredu <cite title="Source Title">President & Founder S.F.I</cite></footer>
            </blockquote>
            </div>
            <div class="icon-to-the-right">
              <span><i class="bi bi-sticky"></i></span>
            </div>
          </div>
        </div>
        @endif


        <div class="card my-card mb-2">
          <div class="card-header">
            join the Conference
          </div>
          <div class="card-body">
              <p>Higher official conference 2021</p>
              <a href="{{ route('index.conferences') }}" class="btn btn-default btn-sidebar w-100 btn-color">Registered Now</a>
          </div>
        </div>

      </div>


</section>
