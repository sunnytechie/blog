<nav class="navbar navbar1 fixed-top navbar-expand-md" style="background: #1b1b1b; color: #fff">
    <div class="container">
      <a class="navbar-brand" href="#">
        {{-- <img src="https://www.sfiloveinaction.org/wp-content/uploads/2019/10/cropped-SFI-Logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top"> --}}
         <span>Sisters.FellowShip.Int'l</span>
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
            <a class="nav-link" href="#"><i class="bi bi-chat-text"></i> Discussions</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-house-door"></i> Ministry
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" style="padding: 6px 20px;" href="#"><span style="margin-right: 6px"><i class="bi bi-star"></i></span> prayer requests</a></li>
              <li><a class="dropdown-item" style="padding: 6px 20px;" href="#"><span style="margin-right: 6px"><i class="bi bi-star"></i></span> Testimony</a></li>
              <li><a class="dropdown-item" style="padding: 6px 20px;" href="#"><span style="margin-right: 6px"><i class="bi bi-star"></i></span> Donations</a></li>
            </ul>
          </li>

          @guest
          @if (Route::has('login'))
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-box-arrow-left"></i> Login</a>
          </li>
          @endif
          @endguest

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle"></i> Info
            </a>
            <ul class="dropdown-menu dropdown-menu-2" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" style="padding: 6px 20px;" href="#"><span style="margin-right: 6px"><i class="bi bi-person"></i></span> Profile</a></li>
              <li><a class="dropdown-item" style="padding: 6px 20px;" href="#"><span style="margin-right: 6px"><i class="bi bi-telephone"></i></span> Contact us</a></li>
              <li><a class="dropdown-item" style="padding: 6px 20px;" href="#"><span style="margin-right: 6px"><i class="bi bi-house"></i></span> About Us</a></li>
              <li><a class="dropdown-item" style="padding: 6px 20px;" href="#"><span style="margin-right: 6px"><i class="bi bi-info-square"></i></span> FAQ</a></li>
              <li><a class="dropdown-item" style="padding: 6px 20px;" href="#"><span style="margin-right: 6px"><i class="bi bi-question"></i></span> Help</a></li>
              <div style="height: 1px; width: 100%; background: rgb(41, 40, 40)"></div>
              <li><a class="dropdown-item" style="padding: 6px 20px;" href="#"><span style="margin-right: 6px"><i class="bi bi-box-arrow-left"></i></span> SignOut</a></li>
            </ul>
          </li>
          {{-- <li class="nav-item">
            <a href="#" class="nav-link btn btn-default btn-md mt-1" role="button" data-bs-toggle="button" style="background: rgb(255, 255, 255); color: #000; padding: 4px 6px;">Sign Up</a>
          </li> --}}

        </ul>
      </div>
    </div>
  </nav>

  @include('snippets.navbar2')
  