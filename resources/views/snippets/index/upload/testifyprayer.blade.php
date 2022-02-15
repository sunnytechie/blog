<div class="modal fade" id="staticBackdropTestifyPrayer" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Fill form</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
        <form action="{{ route('store.testifyprayer') }}" method="POST">
          @csrf
  
        <div class="modal-body">

            <div class="form-group">
                <label for="senderName">Full Name</label>
                <input type="text" class="form-control" id="senderName" name="senderName" placeholder="Enter Your Name">

                @error('senderName')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="senderEmail">Your Personal Email (Optional)</label>
                <input type="email" class="form-control" id="senderEmail" name="senderEmail" placeholder="Enter Your Email">

                @error('senderEmail')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="senderPhone">Your Phone Number</label>
                <input type="tel" class="form-control" id="senderPhone" name="senderPhone" placeholder="Enter Your Phone Number">

                @error('senderPhone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

              <div class="form-group">
                <label for="senderAddress">Chapter, Area and City</label>
                <input type="text" class="form-control" id="senderAddress" name="senderAddress" placeholder="E.g. Abuja, Area 1">

                @error('senderAddress')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="category">Choose a Category</label>
                    <select id="category" class="form-control" name="category">
                        <option disabled selected value="">Select Option</option>
                        <option>Prayer Request</option>
                        <option>Testimony</option>
                    </select>

                @error('category')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
  
              <div class="form-group">
                  <label for="body">Details.</label>
                  <textarea class="form-control" id="editor1" name="details" rows="3" placeholder="Enter notes..."></textarea>
  
                  @error('editor1')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>


        </div>
  
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary btn-upload">Submit form</button>
          <button type="button" class="btn btn-secondary btn-upload" data-bs-dismiss="modal">Close</button>
        </div>
  
      </form>
      </div>
    </div>
  </div>

    @if(Session::has('msgSuccess'))
        <div class="alert alert-warning alert-dismissible fade show" id="alert-dismissible" role="alert">
            <strong>Beloved!</strong> You have successfully submitted the form to Sisters' Fellowship International, Please note, we might contact you through your phone number or your email address <br> Kind Regards <br> Sisters' Fellowship In'tl.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
  @endif

  <script>
    $(document).ready(function() {
        setTimeout(function(){$("#alert-dismissible").hide();},12000);
    });
  </script>