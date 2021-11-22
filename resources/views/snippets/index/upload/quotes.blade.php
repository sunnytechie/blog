<div class="modal fade" id="staticBackdropQoutes" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Quotes</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('store.post') }}" method="POST" enctype="multipart/form-data">
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
                  <label for="body">Description</label>
                  <textarea class="form-control" id="editor1" name="body" rows="3" placeholder="Enter notes..."></textarea>
  
                  @error('editor1')
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
                      <option value="7">Transcript</option>
                      <option value="8">Bible/Declaration</option>
                  </select>
  
                  @error('category')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>

        </div>
  
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary btn-upload">Publish Post</button>
          <button type="button" class="btn btn-secondary btn-upload" data-bs-dismiss="modal">Close</button>
        </div>
  
      </form>
      </div>
    </div>
  </div>