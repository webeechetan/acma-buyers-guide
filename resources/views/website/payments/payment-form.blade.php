<!DOCTYPE html>
<html lang="en" class="light-style layout-wide  customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="{{ asset('admin/') }}/assets/" data-template="vertical-menu-template">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Admin Login</title>
    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/img/favicon/favicon.ico" />
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
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/css/demo.css" />
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
  <div class="container-xxl subscribe">
     <div class="authentication-wrapper authentication-basic">
        <div class="authentication-inner subscribe-box">
          <!-- Pyament form -->
            <div class="subscribe-box-wrapper">
            <div class="subscribe-banner">
              <div class="signup-logo">
                <img src="https://www.acma.in/images/logo.png" alt="">
              </div>
              <div class="subscribe-content">
                <h2 class="title">Buyers Guide</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat repellendus minima consequuntur asperiores incidunt modi optio nihil amet excepturi a labore, cumque, velit vero quisquam ipsa nam sequi repellat eos earum dolore autem qui, vitae iusto vel? Amet sapiente, facilis, adipisci, fuga veniam illo consequuntur ad deserunt earum exercitationem aliquam.</p>
              </div>
              <div class="subscribe-social">
                <h4 class="sub-title text-white mb-0"> Follow Us</h4>
                <div class="subscribe-social-icons">
                  <a href=""><i class='bx bxl-facebook'></i></a>
                  <a href=""><i class='bx bxl-linkedin' ></i></a>
                  <a href=""><i class='bx bxl-instagram' ></i></a>
                </div>
              </div>  
              <div class="copyright">
                <p>© Copyright 2022 ACMA India, All Right Reserved.</p>
              </div>
            </div>
            <div class="subscribe-form">
                <div class="subscribe-form-wrapper">
                    <div class="subscribe-form-border">
                      <form action="{{ route('payment.request') }}" method="POST" name="form_subscription_payment">  
                        @csrf 
                        <div class="subscribe-plan">
                         <h2 class="title text-center">Subscribe Plan</h2>
                         <p class="text-center">Proceed to payments for subscribe</p>
                          <div class="company-user-detail">
                              <div class="user-detail">
                                  <p>Company Name:- {{ $company_contact_details->name }}</p>   
                              </div>
                              <div class="user-detail">
                                  <p>Phone No:- {{ $company_contact_details->phone }} </p>                                    
                              </div>
                              <div class="user-detail">
                                  <p>Company Email:-{{ $company_contact_details->email }}</p>
                              </div>
                          </div>
                        </div>
                        <div class="payment-card">
                          <div class="payment-check"><span class="bx bx-check"></span></div>
                          <div>Rs 600 / 6 months </div>
                        </div>
                        <button class="btn btn-primary d-grid w-100" type="submit">Proceed to pay</button>
                      </form>
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
        <!-- /Payment form -->
      </div>
    </div>
  </div>
   
  <div class="footer-copyright py-3  d-lg-none d-block">
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