<header class="header">
    <nav class="navbar navbar-expand-lg">
        <div class="container-xxl">
        <a class="navbar-brand" href="#">
            <div class="logo">
            <img src="https://www.acma.in/images/logo.png" alt="">
            </div>
        </a>
        <div class="top-header-right">
            <div class="nav-item navbar-dropdown dropdown-user dropdown">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                <div class="avatar avatar-online">
                <img src="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/img/avatars/1.png"
                    alt="" class="w-px-40 h-auto rounded-circle">
                </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                <li>
                <a class="dropdown-item" href="pages-account-settings-account.html">
                    <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                        <div class="avatar avatar-online">
                        <img
                            src="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/img/avatars/1.png"
                            alt="" class="w-px-40 h-auto rounded-circle">
                        </div>
                    </div>
                    <div class="flex-grow-1">
                        <span class="fw-medium d-block">John Doe</span>
                        <small class="text-muted">Admin</small>
                    </div>
                    </div>
                </a>
                </li>
                <li>
                <div class="dropdown-divider"></div>
                </li>
                <li>
                <a class="dropdown-item" href="">
                    <i class='bx bx-user-plus me-2'></i>
                    <span class="align-middle">Account Details List</span>
                </a>
                </li>
                <li>
                <a class="dropdown-item" href="pages-profile-user.html">
                    <i class='bx bx-building-house me-2'></i>
                    <span class="align-middle">Company Name</span>
                </a>
                </li>
                <li>
                <a class="dropdown-item" href="pages-profile-user.html">
                    <i class='bx bx-envelope me-2'></i>
                    <span class="align-middle">Email</span>
                </a>
                </li>
                <li>
                <a class="dropdown-item" href="pages-profile-user.html">
                    <i class='bx bx-map me-2'></i>
                    <span class="align-middle">Address</span>
                </a>
                </li>
            </ul>
            </div>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            
            <li class="nav-item">
                <a class="nav-link me-4" href="http://127.0.0.1:8000/company/profiles">Profile</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <div class="avatar avatar-online">
                    <img
                    src="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/img/avatars/1.png"
                    alt="" class="w-px-40 h-auto rounded-circle">
                </div>
                </a>

                @php
                $authenticatedCompany = Auth::guard('company')->user();
                @endphp
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                    <a class="dropdown-item" href="/">
                    <div class="d-flex">
                        <div class="flex-shrink-0 me-4">
                        <div class="avatar avatar-online">
                            <img
                            src="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/img/avatars/1.png"
                            alt="" class="w-px-40 h-auto rounded-circle">
                        </div>
                        </div>
                        <div class="flex-grow-1">
                        <span class="fw-medium d-block">{{ $authenticatedCompany->name }}</span>
                        </div>
                    </div>
                    </a>
                </li>
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('company.fillUpDetails') }}">
                    <i class='bx bx-user-plus me-2'></i>
                    <span class="align-middle">Account Details</span>
                    </a>
                </li>


 
                <li>


                  <a class="dropdown-item" href="pages-profile-user.html">
                    <i class='bx bx-building-house me-2'></i>
                    <span class="align-middle">{{ $authenticatedCompany->name }}</span>
                    </a>
                </li>

                <li>


                    <a class="dropdown-item" href="pages-profile-user.html">
                        <i class='bx bxs-envelope'></i>
                      <span class="align-middle">{{ $authenticatedCompany->email }}</span>
                      </a>
                  </li>


                <li>
                     <a class="dropdown-item" href="{{ route('company.logout') }}"><i class='bx bx-power-off me-2'></i> <span class="align-middle">Logout</span></a>
                </li>
                </ul>
            </li>
            </ul>
        </div>
        </div>
    </nav>
</header>