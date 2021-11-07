<nav class="navbar2 fixed-top" style="background: #1b1b1b; color: #fff">
    <div class="container">
        <div class="d-flex justify-content-between" style="padding: 16px 0 8px 0">
            <div class="nav-brand-mobile">
                Sisters.Fellowship.Int'l
            </div>
            <div class="d-flex">
                <div style="margin-top: -7px; margin-right: 5px">
                    <form class="searchbar-2"> 
                        <input type="search" placeholder="Search here" name="search" class="searchbar-input-2" onkeyup="buttonUp2();" required>
                        <span class="searchbar-icon-2">
                          <i class="bi bi-search"></i>
                        </span> 
                      </form>
                </div>
                <div style="margin-top: -6px">
                        <button style="color: #fff" type="button" class="btn btn-default" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <span><i class="bi bi-gear"></i></span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

{{-- Modal for sidebar --}}
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-scrollable modal-dialog-2">
      <div class="modal-content modal-content-2">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel" style="font-family: 'Bebas Neue', cursive;">Sisters' Fellowship Int'l</h5>
        <span style="color: #fff !important" data-bs-dismiss="modal" aria-label="Close">
            <i class="bi bi-x-lg"></i>
        </span>
        </div>
        <div class="modal-body">
          <ul class="sidebar-list-mobile">
              <li><a href="#"><span><i class="bi bi-bookmark-plus"></i></span> Prayer Request</a></li>
              <li><a href="#"><span><i class="bi bi-bookmark-plus"></i></span> Prayer Request</a></li>
          </ul>
        </div>
        <div class="modal-footer d-flex" style="color: rgb(216, 201, 201)">
          <div>Privacy Policy</div>
          <div>Terms of Service</div>
          <div>About Us</div>
        </div>
      </div>
    </div>
  </div>