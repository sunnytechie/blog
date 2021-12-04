<nav class="navbar navbar1 fixed-top navbar-expand-md" style="background: #242526; color: #fff">
    <div class="container">
      <a class="navbar-brand" href="/">
        {{-- <img src="https://www.sfiloveinaction.org/wp-content/uploads/2019/10/cropped-SFI-Logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top"> --}}
         <span style="color: rgb(238, 238, 232)"> <img height="28" width="28" class="img-fluid" src="{{ asset('assets/imgs/sfi-favicon.png') }}" alt=""> Sisters.FellowShip.Int'l</span>
      </a>
      <button style="border: 0 !important" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span style="color: #fff"><i class="bi bi-menu-down"></i></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">

            <div class="navbar-right-search">
              <form class="searchbar">
                <input type="search" placeholder="Search here" name="search" class="searchbar-input" onkeyup="buttonUp();" required>
                <span class="searchbar-icon">
                  <i class="bi bi-search"></i>
                </span>
              </form>
            </div>

          </li>

          <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-sort-up-alt"></i> Library</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-people-fill"></i> MeetUp</a>
          </li>



          @guest
          @if (Route::has('login'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}"><i class="bi bi-box-arrow-left"></i> Login</a>
          </li>
          @endif

          @else
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle"></i> Info
            </a>
            <ul class="dropdown-menu dropdown-menu-2" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" style="padding: 10px 20px;" href="#"><span style="margin-right: 6px"><i class="bi bi-person"></i></span> Profile</a></li>
              <li><a class="dropdown-item" style="padding: 10px 20px;" href="#"><span style="margin-right: 6px"><i class="bi bi-telephone"></i></span> Contact us</a></li>
              <li><a class="dropdown-item" style="padding: 10px 20px;" href="#"><span style="margin-right: 6px"><i class="bi bi-house"></i></span> About Us</a></li>
              <li><a class="dropdown-item" style="padding: 10px 20px;" href="#"><span style="margin-right: 6px"><i class="bi bi-info-square"></i></span> FAQ</a></li>
              <li><a class="dropdown-item" style="padding: 10px 20px;" href="#"><span style="margin-right: 6px"><i class="bi bi-question"></i></span> Help</a></li>

              <div style="height: 1px; width: 100%; background: #3A3B3C;"></div>

              <li>
                <a class="dropdown-item" style="padding: 10px 20px;"
                href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <span style="margin-right: 6px">
                  <i class="bi bi-box-arrow-left"></i>
                </span> SignOut
                </a>
              </li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            </ul>
          </li>
          @endguest

          {{-- @guest
            @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}"><span><i class="bi bi-person-circle"></i></span> Sign Up</a>
          </li>
          @endif
          @endguest --}}


        </ul>
      </div>
    </div>
  </nav>

  @include('snippets.navbar2')
