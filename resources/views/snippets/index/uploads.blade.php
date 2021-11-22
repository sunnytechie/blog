<div class="upload-section">
    <div class="card my-card mb-2">
        <div class="card-header d-flex align-items-center" style="border-bottom: 1px solid rgb(88, 75, 75)">
            <div><img height="45" width="45" class="rounded-circle img-fluid border border-3 border-primary" src="{{ asset('assets/imgs/sfi-favicon.png') }}" alt=""></div>
          <div class="p-2 fw-normal">Admin Upload Section (Authorized Persons only)</div>
        </div>
        <div class="card-body p-1">
            <div class="btn-group w-100">
                <button class="btn btn-default btn-upload m-1 active" aria-current="page" data-bs-toggle="modal" data-bs-target="#staticBackdropPost"> <span style="color: rgb(199, 113, 113); font-size: 18px"><i class="bi bi-pencil-square"></i></span> Post</button>
                <button class="btn btn-default btn-upload m-1" data-bs-toggle="modal" data-bs-target="#staticBackdropMedia"><span style="color: rgb(217, 238, 24); font-size: 18px"><i class="bi bi-collection-play"></i></span> Media</button>
                <button class="btn btn-default btn-upload m-1" data-bs-toggle="modal" data-bs-target="#staticBackdropDevotional"><span style="color: rgb(241, 157, 78); font-size: 18px"><i class="bi bi-book"></i></span> Devotional</button>
                <button class="btn btn-default btn-upload m-1" data-bs-toggle="modal" data-bs-target="#staticBackdropQoutes"><span style="color: rgb(134, 25, 25); font-size: 18px"><i class="bi bi-stickies"></i></span> Quotes</button>
              </div>
        </div>
      </div>
</div>

{{-- Post modal --}}
<!-- Modal -->
@include('snippets.index.upload.post')

{{-- Media modal --}}
<!-- Modal -->
@include('snippets.index.upload.media')


{{-- Devotional modal --}}
<!-- Modal -->
@include('snippets.index.upload.ghb')


{{-- Quotes modal --}}
<!-- Modal -->
@include('snippets.index.upload.quotes')
