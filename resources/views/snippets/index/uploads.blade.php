<div class="upload-section">
    <div class="card my-card mb-2">
        <div class="card-body p-1">
            <div class="btn-group w-100">
                <button class="btn btn-default btn-upload m-1 active" aria-current="page" data-bs-toggle="modal" data-bs-target="#staticBackdropPost"> <span>40</span>  <span style="color: rgb(199, 113, 113); font-size: 18px"><i class="bi bi-pencil-square"></i></span> Post</button>
                <button class="btn btn-default btn-upload m-1" data-bs-toggle="modal" data-bs-target="#staticBackdropMedia"> <span>39</span> <span style="color: rgb(217, 238, 24); font-size: 18px"><i class="bi bi-collection-play"></i></span> Media</button>
                <button class="btn btn-default btn-upload m-1" data-bs-toggle="modal" data-bs-target="#staticBackdropDevotional"> <span>20</span> <span style="color: rgb(241, 157, 78); font-size: 18px"><i class="bi bi-book"></i></span> Devotional</button>
                <button class="btn btn-default btn-upload m-1" data-bs-toggle="modal" data-bs-target="#staticBackdropQoutes"> <span>301</span> <span style="color: rgb(134, 25, 25); font-size: 18px"><i class="bi bi-stickies"></i></span> Quotes</button>
              </div>
        </div>
      </div>
</div>

{{-- Post modal --}}
@include('snippets.index.upload.post')

{{-- Media modal --}}
@include('snippets.index.upload.media')

{{-- Devotional modal --}}
@include('snippets.index.upload.ghb')

{{-- Quotes modal --}}
@include('snippets.index.upload.quotes')


