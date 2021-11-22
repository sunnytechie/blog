<div class="modal fade" id="staticBackdropDevotional" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Searching for GHB</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('store.devotion') }}" method="POST" enctype="multipart/form-data">
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
                <label for="memory_verse">Memory Verse</label>
                <textarea class="form-control" id="editor2" name="memory_verse" placeholder="Enter memory verse..." rows="2"></textarea>

                @error('editor2')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
  
              <div class="form-group">
                  <label for="body">GHB</label>
                  <textarea class="form-control" id="editor3" name="body"  placeholder="Enter GHB..." rows="3"></textarea>
  
                  @error('editor3')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>

              <div class="form-group">
                <label for="body">Prayer</label>
                <textarea class="form-control" id="editor4" name="prayer"  placeholder="Enter prayer..." rows="2"></textarea>

                @error('editor4')
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

              {{-- <div class="form-group">
                <label for="sound">Audio</label>
                <input type="file" class="form-control-file w-100" id="sound" name="sound">

                @error('sound')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div> --}}
  
              <div class="form-group">
                  <label for="category">Category</label>
                  <select class="form-control" id="category" name="category">
                      <option selected value="6">Devotional</option>
                  </select>
  
                  @error('category')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
  
  
              <div class="form-group">
                  <label for="display_date">Display Date</label>
                  <input type="date" class="form-control" id="display_date" name="display_date">
  
                  @error('display_date')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
  
        </div>
  
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary btn-upload">Publish GHB</button>
          <button type="button" class="btn btn-secondary btn-upload" data-bs-dismiss="modal">Close</button>
        </div>
  
      </form>
      </div>
    </div>
  </div>