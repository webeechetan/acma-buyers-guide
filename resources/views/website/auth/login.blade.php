<!DOCTYPE html>
<html lang="en" class="light-style layout-wide  customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="{{ asset('admin/') }}/assets/" data-template="vertical-menu-template">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Company Login</title>
    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://www.acma.in/img/favicon.ico" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/fonts/flag-icons.css" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css">
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/typeahead-js/typeahead.css" />
    <!-- Vendor -->
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/%40form-validation/umd/styles/index.min.css" />
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/css/pages/page-auth.css">
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/toastr/toastr.css" />
    <script src="{{ asset('admin/') }}/assets/vendor/js/helpers.js"></script>
    <script src="{{ asset('admin/') }}/assets/js/config.js"></script>
  </head>
  <body>
    <!-- Content -->
    <!--- Header --->
    <div class="subscribe">
      <div class="authentication-wrapper authentication-basic">
        <div class="authentication-inner subscribe-box">
          <!-- Register -->
          <div class="subscribe-box-wrapper">
            <div class="subscribe-banner">
             <div class="subscribe-banner-content">
                 <div class="signup-logo">
                    <img src="https://www.acma.in/images/logo.png" alt="">
                  </div>
                  <div class="subscribe-content">
                    <h2 class="title">Buyers Guide</h2>
                    <p>List of ACMA member Companies and automobile manufacturers with Contact Details.</p>
                  </div>
                  <div class="subscribe-social">
                    <h4 class="sub-title text-white mb-0"> Follow Us</h4>
                    <div class="subscribe-social-icons">
                      <a href="https://www.facebook.com/india.acma/"><i class='bx bxl-facebook'></i></a>
                      <a href="https://twitter.com/acmaindia"><i class='bx bxl-linkedin' ></i></a>
                      <a href="https://www.linkedin.com/company/acma-india/"><i class='bx bxl-instagram' ></i></a>
                    </div>
                  </div>
             </div>
              
              <div class="copyright">
                <p>© Copyright 2024 ACMA India, All Right Reserved.</p>
              </div>
            </div>
            <div class="subscribe-form">
              <div class="subscribe-form-wrapper">
                <div class="subscribe-form-border">
                    <div class="subscribe-btn">
                      <ul class="nav nav-pills nav-fill align-items-center subscribe-form-tab" role="tablist">
                        <!-- <li class="nav-item">
                          <a class="nav-link" data-bs-toggle="pill" href="#formRegistration">Sign Up</a>
                        </li> -->
                        <!-- <li class="nav-item">or</li> -->
                        <li class="nav-item">
                          <a class="nav-link fw-24 border-none p-0 text-start" data-bs-toggle="pill" href="#login">Sign in to your account</a>
                        </li>
                      </ul>
                    </div>
                    <div class="tab-content">
                      <form id="login" class="tab-pane active signup" action="{{ route('company.generate_otp') }}" method="POST"> 
                        @csrf 
                        <div class="mb-3">
                          <label for="email" class="form-label">Email </label>
                          <input type="text" class="form-control" id="email" name="email"  placeholder="Enter your email" autofocus>
                          <x-validation-error name="email"/>
                         
                        </div>
                          {{-- <div class="mb-3 form-password-toggle">
                            <label class="form-label" for="password">Password</label>`
                            <div class="input-group input-group-merge">
                              <input type="password" id="password" class="form-control" name="password" @if(isset($_COOKIE["password"]))  value="{{ $_COOKIE["password"] }}" @endif placeholder="Password" aria-describedby="password" />
                              <span class="input-group-text cursor-pointer">
                                <i class="bx bx-hide"></i>
                              </span>
                            </div>
                          </div> --}}
                          {{-- <div class="d-flex align-item-center mb-3 justify-content-between sign-in-footer">
                            <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="remember" @if(isset($_COOKIE['email'])) checked="" @endif > <label class="form-check-label">Remember me</label></div>
                             <a href="{{route('company.forgotpassword.view')}}" class="forgot-password">Forgot password?</a>
                          </div> --}}
                          <button class="btn btn-primary d-grid w-100" type="submit">Sign In</button>
                            
                        
                      </form>
                      <!--- Register ---->
                         {{-- <form id="formRegistration" class="mb-3 tab-pane fade" action="{{ route('company.store') }}" method="POST">
                         @csrf
                          <div class="mb-3">
                              <label for="name" class="form-label"> Company Name </label>
                              <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Enter company name" autofocus>
                              <x-validation-error name="name" />
                          </div>
                          <div class="mb-3">
                            <label for="email" class="form-label">Email </label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email or username" autofocus>
                            <x-validation-error name="email" />
                          </div>
                          <div class="mb-3 form-password-toggle">
                            <div class="d-flex justify-content-between">
                              <label class="form-label" for="password">Password</label>
                            </div>
                            <div class="input-group input-group-merge">
                              <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                              <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                          </div>
                          <x-validation-error name="password" />
                          </div>
                          <div class="mb-3">
                            <button class="btn btn-primary d-grid w-100" type="submit">Sign Up</button>
                          </div>
                        </form>  --}}
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="bs-toast toast toast-placement-ex m-2 fade  top-0 end-0 hide" role="alert" aria-live="assertive" aria-atomic="true" data-delay="2000">
          <div class="toast-header">
            <i class="bx bx-bell me-2"></i>
            <div class="me-auto fw-semibold" id="toastHead"></div>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body" id="toastBody"></div>
        </div>
      </div>
      <!-- /Register -->
    </div>
    </div>
    </div>
    <div class="footer-copyright py-3 d-lg-none d-block">
      <div class="container-xxl">
        <div class="row text-center text-md-start">
          <div class="col-md-6">
            <p class="mb-2 mb-sm-0 text-white">© Copyright 2022 ACMA India, All Right Reserved.</p>
          </div>
          <div class="col-md-6 text-md-end">
            <p class="mb-0 text-white">Powered By <a href="https://www.webeesocial.com/" class="text-white">Webeesocial</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div> 
  <script src="{{ asset('admin/') }}/assets/vendor/libs/jquery/jquery.js"></script>
  <script src="{{ asset('admin/') }}/assets/vendor/libs/popper/popper.js"></script>
  <script src="{{ asset('admin/') }}/assets/vendor/js/bootstrap.js"></script>
  <script src="{{ asset('admin/') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="{{ asset('admin/') }}/assets/vendor/libs/hammer/hammer.js"></script>
  <script src="{{ asset('admin/') }}/assets/vendor/libs/i18n/i18n.js"></script>
  <script src="{{ asset('admin/') }}/assets/vendor/libs/typeahead-js/typeahead.js"></script>
  <script src="{{ asset('admin/') }}/assets/vendor/js/menu.js"></script>
  
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="{{ asset('admin/') }}/assets/vendor/libs/%40form-validation/umd/bundle/popular.min.js"></script>
  <script src="{{ asset('admin/') }}/assets/vendor/libs/%40form-validation/umd/plugin-bootstrap5/index.min.js"></script>
  <script src="{{ asset('admin/') }}/assets/vendor/libs/%40form-validation/umd/plugin-auto-focus/index.min.js"></script>

  <!-- Main JS -->
  <script src="{{ asset('admin/') }}/assets/js/main.js"></script>
  <script src="{{ asset('admin/') }}/assets/js/pages-auth.js"></script>

  <script src="{{ asset('admin/') }}/assets/vendor/libs/toastr/toastr.js"></script>
  <script src="{{ asset('admin/') }}/assets/js/ui-toasts.js"></script>
  <script src="{{ asset('website/') }}/validations/register.js"></script>


  @if(session()->has('alert'))
      @php
          $alert = Session::get('alert');
          $toastHead = $alert['msg'];
          $toastBody = $alert['body'];
          $toastType = $alert['type'];
      @endphp
      <script>
          $(document).ready(function() {
              toast('{{ $toastHead }}','{{ $toastBody }}','{{ $toastType }}');
          });
      </script>
  @endif
  
</body>

</html>

