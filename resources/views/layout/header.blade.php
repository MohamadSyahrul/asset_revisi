<style>
    .navbar .navbar-content .navbar-nav .nav-item.nav-profile .dropdown-menu .dropdown-body .profile-nav .nav-item:hover .nav-link{
        color: #ff3366;
    }
</style>

<nav class="navbar">
  <a href="#" class="sidebar-toggler">
    <i data-feather="menu"></i>
  </a>
  <div class="navbar-content">
    <form class="search-form">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i data-feather="search"></i>
          </div>
        </div>
        <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
      </div>
    </form>
    <ul class="navbar-nav">
      <li class="nav-item dropdown nav-profile">
        <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="{{ asset('img/'. Auth::user()->gambar ) }}" alt="no image" width="30%" class="img-sm rounded-circle">
        </a>
        <div class="dropdown-menu" aria-labelledby="profileDropdown">
          <div class="dropdown-header d-flex flex-column align-items-center">
            <div class="figure mb-3">
                <img src="{{ asset('img/'. Auth::user()->gambar ) }}" alt="no image" style="height: 100%; border:1px solid #030303" class="img-sm rounded-circle">
             </div>
            <div class="info text-center">
              <p class="name font-weight-bold mb-0"> {{ Auth::user()->name }}</p>
              <p class="email text-muted mb-3"> {{ Auth::user()->email }}</p>
            </div>
          </div>
          <div class="dropdown-body">
            <ul class="profile-nav p-0 pt-3">
              <li class="nav-item">
                <a href="{{ url('/profile') }}" class="nav-link">
                  <i data-feather="user"></i>
                  <span>Profile</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link"
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                  <i data-feather="log-out"></i>
                  <span>Log Out</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </li>

            </ul>
          </div>
        </div>
      </li>
    </ul>
  </div>
</nav>
