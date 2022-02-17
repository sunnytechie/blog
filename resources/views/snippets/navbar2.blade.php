<nav class="navbar2 fixed-top" style="background: #242526; color: #fff; border-bottom: 0.1rem solid rgb(81, 78, 78)">
    <div class="container">
        <div class="d-flex justify-content-between">
              <a class="navbar-brand" href="/" style="color: #fff">
                <span>
                  <img height="32" width="32" class="img-fluid" src="{{ asset('assets/imgs/Untitled_design__8_-removebg-preview.png') }}" alt=""> S.F.G.H.B
                </span>
              </a>
            <div class="d-flex pt-1 pb-2">
                <div style="margin-right: 5px">
                    <form class="searchbar-2" action="{{ route('search.post') }}"  method="GET" role="search"> 
                        <input type="search" placeholder="Search here" name="search" class="searchbar-input-2" onkeyup="buttonUp2();">
                        <span class="searchbar-icon-2">
                          <i class="bi bi-search"></i>
                        </span> 
                    </form>
                </div>
                <div>
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
          <h5 class="modal-title" id="exampleModalLabel" style="font-family: 'Raleway', sans-serif;">Sisters' Fellowship Int'l</h5>
        <span style="color: #fff !important" data-bs-dismiss="modal" aria-label="Close">
            <i class="bi bi-x-lg"></i>
        </span>
        </div>
        <div class="modal-body">
          <ul class="sidebar-list-mobile">
            @if (Auth::check())
              <li><a href="#"><span><i class="bi bi-person-badge"></i></span> Profile</a></li>
              <li><a href="#"><span><i class="bi bi-book"></i></span> Prayer Request</a></li>
              <li><a href="#"><span><i class="bi bi-blockquote-right"></i></span> Testimony</a></li>
              <li><a href="#"><span><i class="bi bi-cash-coin"></i></span> Donation</a></li>
              <li><a href="#"><span><i class="bi bi-person-rolodex"></i></span> Contact Us</a></li>
              <li><a href="#"><span><i class="bi bi-building"></i></span> About Us</a></li>
              <li>
                <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <span><i class="bi bi-box-arrow-left"></i></span> Log Out</a>
              </li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            @else
            <li>
              <a href="{{ route('login') }}">
                <span><i class="bi bi-box-arrow-left"></i></span> Sign In
              </a>
              </li>
            @endif
              
              
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