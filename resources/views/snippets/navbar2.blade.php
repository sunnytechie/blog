<nav class="navbar2 fixed-top shadow" style="background: #242526; color: #fff">
    <div class="container">
        <div class="d-flex justify-content-between" style="padding: 16px 0 8px 0">
            <div class="nav-brand-mobile">
              <a href="/" style="color: #ffc">
                Sisters.Fellowship.Int'l
              </a>
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
                            <span><i class="bi bi-person-circle"></i></span>
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
              <li><a href="#"><span><i class="bi bi-person-badge"></i></span> Profile</a></li>
              <li><a href="#"><span><i class="bi bi-book"></i></span> Prayer Request</a></li>
              <li><a href="#"><span><i class="bi bi-blockquote-right"></i></span> Testimony</a></li>
              <li><a href="#"><span><i class="bi bi-cash-coin"></i></span> Donation</a></li>
              <li><a href="#"><span><i class="bi bi-person-rolodex"></i></span> Contact Us</a></li>
              <li><a href="#"><span><i class="bi bi-building"></i></span> About Us</a></li>
              <li><a href="#"><span><i class="bi bi-box-arrow-left"></i></span> LogOut</a></li>
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