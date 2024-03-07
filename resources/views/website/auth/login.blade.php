<!DOCTYPE html>
<html lang="en" class="light-style layout-wide  customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="{{ asset('admin/') }}/assets/" data-template="vertical-menu-template">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Company Login</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://www.acma.in/img/favicon.ico" />
    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com/"> --}}
    {{-- <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin> --}}
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/fonts/fontawesome.css" />
    {{-- <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/fonts/flag-icons.css" /> --}}
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/css/style.css" />
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"> --}}
    <!-- Vendors CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/typeahead-js/typeahead.css" /> --}}
    <!-- Vendor -->
    {{-- <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/%40form-validation/umd/styles/index.min.css" /> --}}
    {{-- <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/css/pages/page-auth.css"> --}}
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/toastr/toastr.css" />
    {{-- <script src="{{ asset('admin/') }}/assets/vendor/js/helpers.js"></script> --}}
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
                   <a href="https://www.acma.in/"> <img src="https://www.acma.in/images/logo.png" alt=""></a>
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
                <p class="mb-0">© Copyright 2024 ACMA India, All Right Reserved.</p>
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
                          <h4 class="fw-24 login-header" data-bs-toggle="pill">Sign in to your account</h4>
                          <p class="text-start">Enter Your Email & Get OTP</p>
                        </li>
                      </ul>
                    </div>
                    <div class="tab-content">
                      <form id="login" class="tab-pane active signup" action="" method="POST"> 
                        @csrf 
                        <div class="mb-3">
                          <input type="text" class="form-control" id="email" name="email"  placeholder="Enter your email" autofocus>
                        </div>
                        <div class="mb-3 otp_section d-none">
                          <input type="number" class="form-control" name="otp" id="otp" placeholder="Enter OTP" autofocus>
                        </div>
                          <button class="btn btn-primary d-grid w-100 login_btn" type="submit">Sign In</button>
                      </form>
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
  {{-- <script src="{{ asset('admin/') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="{{ asset('admin/') }}/assets/vendor/libs/hammer/hammer.js"></script>
  <script src="{{ asset('admin/') }}/assets/vendor/libs/i18n/i18n.js"></script>
  <script src="{{ asset('admin/') }}/assets/vendor/libs/typeahead-js/typeahead.js"></script>
  <script src="{{ asset('admin/') }}/assets/vendor/js/menu.js"></script> --}}
  
  <!-- endbuild -->

  <!-- Vendors JS -->
  {{-- <script src="{{ asset('admin/') }}/assets/vendor/libs/%40form-validation/umd/bundle/popular.min.js"></script>
  <script src="{{ asset('admin/') }}/assets/vendor/libs/%40form-validation/umd/plugin-bootstrap5/index.min.js"></script>
  <script src="{{ asset('admin/') }}/assets/vendor/libs/%40form-validation/umd/plugin-auto-focus/index.min.js"></script> --}}

  <!-- Main JS -->
  <script src="{{ asset('admin/') }}/assets/js/main.js"></script>
  <script src="{{ asset('admin/') }}/assets/js/pages-auth.js"></script>

  <script src="{{ asset('admin/') }}/assets/vendor/libs/toastr/toastr.js"></script>
  <script src="{{ asset('admin/') }}/assets/js/ui-toasts.js"></script>
  {{-- <script src="{{ asset('website/') }}/validations/register.js"></script> --}}
  

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

<script>
  $(document).ready(function(){

    
   $('#login').submit(function (e) {
    e.preventDefault(); // Prevent the default form submission

    let previous_value = $(".login_btn").html();

    $(".login_btn").html('Please wait...');

    var formData = $(this).serialize();

    let btn = $(".login_btn");

    let otp_section = $(".otp_section");

    if(otp_section.hasClass('d-none') == false){
      $.ajax({
          type: 'POST',
          url: '{{ route('company.verify_otp') }}',
          data: formData,
          success: function (response) {
              if(response.success){
                  localStorage.removeItem('checked_companies');
                  toast('success','Login Successfully','success');
                  window.location.href = "{{ route('company.dashboard') }}";
              }else{
                  toast('Error',response.message,'success');
              }
          },
          error: function (error) {
           
              error = error.responseJSON;
              if(error.errors){
                  $.each(error.errors, function (key, value) {
                      toast('Error',value,'danger');
                  });
              }else{
                  toast('Error',error.message,'danger');
              }
              $(".login_btn").html(previous_value);
          }
      });
    }else{
      $.ajax({
          type: 'POST',
          url: '{{ route('company.generate_otp') }}',
          data: formData,
          success: function (response) {

              if(response.success){
               
                  $('.otp_section').removeClass('d-none');
                  $('#email').attr('readonly', true);
                  toast('Success',response.message,'success');
                  $(".login_btn").html('Verify OTP');
              }else{
               

                  if (response.code == 419) {
                      
                     toast('Error','Session Expired','success');
                      window.location.reload();
                  }
             
                  //toast('Error',response.message,'success');
                  // $(".login_btn").html('Verify OTP');
                  $(".login_btn").html(previous_value);

              }
          },
          error: function (error) {
              error = error.responseJSON;
              if(error.errors){
                  $.each(error.errors, function (key, value) {
                      toast('Error',value,'danger');
                  });
                  $(".login_btn").html(previous_value);
              }else{
                  toast('Error',error.message,'danger');
                  $(".login_btn").html(previous_value);
              }
          }
      });
    }
});

  });
  </script>
  
</body>

</html>

