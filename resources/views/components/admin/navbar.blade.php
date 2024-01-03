<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
  id="layout-navbar">

  <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
      <i class="bx bx-menu bx-sm"></i>
    </a>
  </div>

  <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
    <ul class="navbar-nav flex-row align-items-center ms-auto">
      <li>
        <a class="dropdown-item" href="{{ route('admin.logout') }}">
          <i class="bx bx-power-off text-danger me-2"></i>
          <span class="align-middle text-danger">Log Out</span>
        </a>
      </li>
    </ul>
  </div>

</nav>