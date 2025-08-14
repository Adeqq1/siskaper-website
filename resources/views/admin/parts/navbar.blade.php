<style>
  /* biar menu bisa “keluar” dari header & ketindihan */
  .main-header .topbar-nav {
    margin-left: auto !important;
  }


  .navbar .dropdown-menu {
    z-index: 2050 !important;
  }

  /* mobile fix */
  @media (max-width: 991.98px) {
    .navbar .dropdown-menu {
      position: fixed !important;
      right: 8px;
      /* mepet kanan */
      left: auto;
      top: 56px;
      transform: none !important;
    }
  }
</style>


<ul class="navbar-nav topbar-nav ms-auto align-items-center pe-2">
  <li class="nav-item dropdown" data-bs-display="static">
    <a class="nav-link d-flex align-items-center dropdown-toggle" href="#" id="userMenu" data-bs-toggle="dropdown"
      aria-expanded="false">
      <img src="{{ Auth::user()->profile_photo_url ?? asset('admin/assets/img/default-avatar.png') }}"
        class="rounded-circle me-2" width="28" height="28" alt="">
      <span class="d-none d-sm-inline">{{ Auth::user()->name }}</span>
    </a>

    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="userMenu">
      <li>
        <h6 class="dropdown-header text-muted">Manage Account</h6>
      </li>
      <li><a class="dropdown-item" href="{{ route('profile.show') }}">Profile</a></li>
      <li>
        <hr class="dropdown-divider">
      </li>
      <li>
        <form method="POST" action="{{ route('logout') }}">@csrf
          <button type="submit" class="dropdown-item">Log Out</button>
        </form>
      </li>
    </ul>
  </li>

</ul>
</div>