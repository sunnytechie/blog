<div class="modal fade" id="staticBackdropMedia" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Media Video/Podcast</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('store.media') }}" method="POST" enctype="multipart/form-data">
          @csrf
  
        <div class="modal-body">
              <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
  
                  @error('title')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
  
              <div class="form-group">
                  <label for="body">More Details</label>
                  <textarea class="form-control" id="editor5" name="body" rows="3" placeholder="Enter note..."></textarea>
  
                  @error('editor5')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
  
              <div class="form-group">
                  <label for="thumbnail">thumbnail</label>
                  <input type="file" class="form-control-file w-100" id="thumbnail" name="thumbnail">
  
                  @error('thumbnail')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
  
              <div class="form-group">
                  <label for="category">Category</label>
                  <select class="form-control" id="category" name="category">
                      <option disabled selected value="">Select Category</option>
                      <option value="4">Podcast</option>
                      <option value="5">Video</option>
                  </select>
  
                  @error('category')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
  
  
              <div class="form-group">
                  <label for="display_date">Event Date</label>
                  <input type="date" class="form-control" id="display_date" name="display_date">
  
                  @error('display_date')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
  
              <div class="form-group">
                  <label for="url">Video/Podcast url</label>
                  <input type="text" class="form-control" id="url" name="url" placeholder="Enter Event Location">
  
                  @error('url')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
        </div>
  
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary btn-upload">Publish Media</button>
          <button type="button" class="btn btn-secondary btn-upload" data-bs-dismiss="modal">Close</button>
        </div>
  
      </form>
  
      </div>
    </div>
  </div>