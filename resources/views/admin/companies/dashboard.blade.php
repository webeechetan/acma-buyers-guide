<!DOCTYPE html>
<html lang="en" class="light-style layout-wide  customizer-hide" dir="ltr" data-theme="theme-default"
  data-assets-path="{{ asset('admin/') }}/assets/" data-template="vertical-menu-template">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <title>Dashboard</title>
  <meta name="description"
    content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
  <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon"
    href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/img/favicon/favicon.ico" />
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
    rel="stylesheet">
  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/fonts/boxicons.css" />
  <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/fonts/fontawesome.css" />
  <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/fonts/flag-icons.css" />
  <!-- Core CSS -->
  <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/css/rtl/core.css"
    class="template-customizer-core-css" />
  <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/css/rtl/theme-default.css"
    class="template-customizer-theme-css" />
  <link rel="stylesheet" href=" {{ asset('admin/') }}/assets/vendor/libs/select2/select2.css " />
  <link rel="stylesheet" href="{{ asset('admin/') }}/assets/css/demo.css" />
</head>

<body>
  <!-- Content -->
  <!--- Header --->
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
              <!-- <li><a class="dropdown-item" href="auth-login-cover.html" target="_blank"><i class="bx bx-power-off me-2"></i><span class="align-middle">Log Out</span></a></li> -->
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
              <a class="nav-link active me-3" aria-current="page" href="#">Billing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-4" href="#">Profile</a>
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
                  <a class="dropdown-item" href="{{ route('company.fillUpDetails') }}">
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
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!---- Main Dahboard ----->
  <!-- <section class="dashboard-banner">

    </section> -->
  <section class="sec-space">
    <div class="container">
      <div class="row">
        <!-- <div class="col-md-2">
            <div class="advertisement-one">
              <img src="http://dummyimage.com/700x500/" alt="placeholder" class="img-fluid img-placeholder">
            </div>
          </div> -->
        <div class="col-md-12">
          <!--- Search Filter ---->
          <div class="card mb-2">
            <div class="card-body">
              <div class="row">
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="custom_search_filter">
                    <form action="" method="GET">
                      <input type="text" class="form-control" id="search" name="search" placeholder="Quick Search"
                        value="">
                      <div class="custom_search_filter_inputMask">
                        <i class="bx bx-search"></i>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div>
                    <h2 class="title mb-md-0 text-center">Highlighted Companies</h2>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="custom_search_filter">
                    <form action="/" method="GET">
                      <input type="text" data-bs-toggle="modal" data-bs-target="#basicModal" class="form-control"
                        id="filter_category" name="filter_category" placeholder="Filter By Category" value="">
                      <div class="custom_search_filter_inputMask">
                        <i class="bx bx-search"></i>
                      </div>
                    </form>
                    <!-- Modal -->
                    <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h2 class="modal-title title text-center" id="exampleModalLabel1">Advance Filter</h2>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <ul class="filter-list">
                              <li  class="filter-name" data-filter="name">
                                <a href="#">Company</a>
                              </li>
                              <li  class="filter-name" data-filter="location">
                                <a href="#">Location</a>
                              </li>
                              <li  class="filter-name" data-filter="region">
                                <a href="#">Region</a>
                              </li>
                              <li  class="filter-name" data-filter="product">
                                <a href="#">Products</a>
                              </li>
                              <li class="filter-name" data-filter="trademark" >
                                <a href="#">Trade Mark</a>
                              </li>
                              <li class="filter-name" data-filter="salesTurnover" >
                                <a href="#">Sales Turnover</a>
                              </li>
                             
                              <li class="filter-name" data-filter="exportTurnover" >
                                <a href="#">Export Turnover</a>
                              </li>
                              
                              <li class="filter-name" data-filter="OverseasAftermarket" >
                                <a href="#">Overseas Aftermarket</a>
                              </li>
                              <li class="filter-name" data-filter="ForeignCollaboration" >
                                <a href="#">Foreign Collaboration</a>
                              </li>
                              <!-- Add more options here -->
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--- Advance Filter Form---->
                    <div class="modal fade" id="advance-filter-modal" tabindex="-1" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h2 class="modal-title title text-center active-filter-name" id="filterModal"  >Filter By Company</h2>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div>
                              <form action="" method="GET">
                                <label for="select2Basic" class="form-label filter_label_name">Company Name</label>
                                <input type="text" name="name" placeholder="Search By Company Name"
                                  class="form-control advance-filter-input" data-allow-clear="true" />
                                <div class="mt-3">
                                  <button class="btn btn-primary">Apply</button>
                                  <button class="btn btn-primary">Reset</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--- Company Card --->

          <div class="company-card">
            <div class="row">
              @foreach ($companies as $company)

              
              <div class="col-md-3 mb-2">
                <div class="card">
                  <div class="company-card">
                    <h4 class="sub-title mb-0"> {{ $company->name }} - {{$company->key_personnels->managing_director}} </h4>
                  </div>

                  <div class="card-body">
                    <div class="information-list">
                      <ul>
                        <li>
                          <div>
                            <i class='bx bxs-location-plus'></i>Address
                          </div>
                          <div>
                            <a href="tel:+91-11-26160315">{{$company->contact_details->company_address}}</a>
                          </div>
                        </li>
                        <li>
                          <div>
                            <i class="fa fa-phone"></i>Phone
                          </div>
                          <div>
                            <a href="tel:+91-11-26160315">{{$company->contact_details->phone}}</a>
                          </div>
                        </li>
                        <li>
                          <div>
                            <i class="fa fa-fax"></i>Fax
                          </div>
                          <span>
                            <a href="fax:+91-11-26160317">{{$company->contact_details->fax}}</a>
                          </span>
                        </li>
                        <li>
                          <div>
                            <i class="fa fa-envelope"></i>E-mail
                          </div>
                          <div>
                            <a href="mail-to:acma@acma.in">{{$company->contact_details->email}}</a>
                          </div>
                        </li>
                        <li>
                          <div>
                            <i class="fa fa-globe"></i>Website
                          </div>
                          <div>
                            <a href="http://www.acma.in">{{$company->contact_details->website}}</a>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>


          <div class="row">
            <div class="col-md-12 text-center mt-2">
              <button class="btn btn-primary" class="download-button">Download Pdf</button>
            </div>
          </div>
          <!--- Multiple select --->

        </div>
      </div>
    </div>
  </section>

  <!--- Footer ---->
  <footer class="sec-space-ft">
    <div class="container-xxl">
      <div class="footer-sec">
        <div class="row">
          <div class="col-md-6 mb-3 mb-md-0">
            <h4 class="mb-3 text-white">Contact Us</h4>
            <ul class="contact-list">
              <li>
                <i class="fas fa-phone-alt"></i>
                <a href="tel:+91-11-26160315">+91-11-26160315</a>
              </li>
              <li>
                <i class="fas fa-envelope-open-text"></i>
                <a href="mailto:acma@acma.in">acma@acma.in</a>
              </li>
              <li>
                <div class="d-flex">
                  <div>
                    <a href="https://www.facebook.com/india.acma/" target="_blank" class="fb">
                      <i class="fab fa-facebook-square"></i>
                    </a>
                  </div>
                  <div>
                    <a href="https://twitter.com/acmaindia" target="_blank" class="twitter">
                      <i class="fab fa-twitter-square"></i>
                    </a>
                  </div>
                  <div>
                    <a href="https://www.linkedin.com/company/acma-india/" target="_blank" class="linkedin">
                      <i class="fab fa-linkedin"></i>
                    </a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-md-6">
            <p class="text-white d-flex mb-0">
              <span class="fas fa-map-marker-alt me-2 pt-1"></span>Automotive Component Manufacturers Association of
              India The Capital Court, 6th Floor, Olof Palme Marg, Munirka, New Delhi : 110 067
            </p>
          </div>
        </div>
      </div>
    </div>
    </div>
  </footer>
  <div class="footer-copyright py-3">
    <div class="container-xxl">
      <div class="row text-center">
        <div class="col-md-6">
          <p class="mb-2 mb-sm-0 text-white text-md-start">© Copyright 2022 ACMA India, All Right Reserved.</p>
        </div>
        <div class="col-md-6 text-md-end">
          <p class="mb-0 text-white">Powered By <a href="https://www.webeesocial.com/"
              class="text-white">Webeesocial</a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('admin/') }}/assets/vendor/libs/jquery/jquery.js"></script>
  <script src="{{ asset('admin/') }}/assets/vendor/libs/popper/popper.js"></script>
  <script src="{{ asset('admin/') }}/assets/vendor/js/bootstrap.js"></script>
  <script src="{{ asset('admin/') }}/assets/vendor/libs/select2/select2.js"></script>
  <script src="{{ asset('admin/') }}/assets/vendor/libs/bootstrap-select/bootstrap-select.js"></script>

  <script>
    $(document).ready(function () {

      $(".filter-name").click(function(e){
        e.preventDefault();
        let filter_name = $(this).data('filter');
        $(".active-filter-name").html(filter_name);
        // hide modal with data-dismiss
        $("#basicModal").hide();
        $(".modal-backdrop").hide();
        // show advance filter modal
        $("#advance-filter-modal").modal('show');
        $(".advance-filter-input").attr('name', filter_name);
        $(".filter_label_name").html(filter_name);
        $(".advance-filter-input").attr('placeholder', 'Search By '+filter_name);

      });

    });
  </script>

</body>

</html>