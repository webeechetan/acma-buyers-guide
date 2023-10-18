<!DOCTYPE html>

<html lang="en" class="light-style layout-wide  customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="{{ asset('admin/') }}/assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Details</title>

    
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
    
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/typeahead-js/typeahead.css" /> 
    <!-- Vendor -->
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/%40form-validation/umd/styles/index.min.css" />

    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/css/pages/page-auth.css">
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/toastr/toastr.css" />
    <script src="{{ asset('admin/') }}/assets/vendor/js/helpers.js"></script> 
    <script src="{{ asset('admin/') }}/assets/js/config.js"></script>
    <link rel="stylesheet" href="{{ asset('admin/') }}/assets/vendor/libs/bs-stepper/bs-stepper.css" />
    
</head>

<body>
  <!-- Content -->
  <!--- Header --->
  <header class="header">
    <div class="container-xxl">
      <div class="top-header">
        <div class="top-header-left">
          <div class="logo">
          <img src="https://www.acma.in/images/logo.png" alt="">
          </div>
        </div>
        <div class="top-header-right">
              <div class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/img/avatars/1.png" alt="" class="w-px-40 h-auto rounded-circle">
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="pages-account-settings-account.html">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/img/avatars/1.png" alt="" class="w-px-40 h-auto rounded-circle">
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
                      <a class="dropdown-item" href="pages-profile-user.html">
                        <i class='bx bx-user-plus me-2'></i>
                        <span class="align-middle">Account Details List</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-profile-user.html">
                        <i class='bx bx-building-house me-2' ></i>
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
                    <!-- <li>
                      <a class="dropdown-item" href="auth-login-cover.html" target="_blank">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li> -->
                  </ul>
              </div>
        </div>
      </div>
    </div>
  </header>
  <!---- Main Dahboard ----->
  <section class="sec-space">
    <div class="container-xxl">
      <div class="row">
        <div class="col-md-2">
          <div class="advertisement-one">
                <img src="http://dummyimage.com/700x500/" alt="placeholder" class="img-fluid img-placeholder">
          </div>
        </div>
        <div class="col-md-8">
          <!--- Search Filter ---->
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-3 mb-3">
                  <div class="custom_search_filter">
                    <form action="https://inquiry.webeesocial.tech/admin/inquiries" method="GET">
                      <input type="text" class="form-control" id="search" name="search" placeholder="Quick Search" value="">
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
                    <form action="https://inquiry.webeesocial.tech/admin/inquiries" method="GET">
                      <input type="text" class="form-control" id="filter_category" name="filter_category" placeholder="Filter By Category" value="">
                      <div class="custom_search_filter_inputMask">
                        <i class="bx bx-search"></i>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--- Company Card --->
          <div class="company-card">
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="company-information_card bg-light_green">
                  <h5 class="company_title">Webeesocial</h5>
                  <div class="company-profile">
                    <h4 class="title mb-0">
                      </b>
                    </h4>
                    <p>
                      <b>Director General</b>
                    </p>
                    <p>Automotive Component Manufacturers Association of India The Capital Court 6th Floor, Olof Palme Marg, Munirka New Delhi : 110 067</p>
                  </div>
                  <div class="information-list">
                    <ul>
                      <li>
                        <div>
                          <i class="fa fa-phone"></i>PHONE (s)
                        </div>
                        <div>
                          <a href="tel:+91-11-26160315">+91-11-26160315</a>
                        </div>
                      </li>
                      <li>
                        <div>
                          <i class="fa fa-fax"></i>FAX
                        </div>
                        <span>
                          <a href="fax:+91-11-26160317">+91-11-26160317</a>
                        </span>
                      </li>
                      <li>
                        <div>
                          <i class="fa fa-envelope"></i>E-mail
                        </div>
                        <div>
                          <a href="mail-to:acma@acma.in">acma@acma.in</a>
                        </div>
                      </li>
                      <li>
                        <div>
                          <i class="fa fa-globe"></i>Website
                        </div>
                        <div>
                          <a href="http://www.acma.in">www.acma.in</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="company-information_card bg-light_green">
                  <h5 class="company_title company_title2">Webeesocial</h5>
                  <div class="company-profile">
                    <h4 class="title mb-0">
                      </b>
                    </h4>
                    <p>
                      <b>Director General</b>
                    </p>
                    <p>Automotive Component Manufacturers Association of India The Capital Court 6th Floor, Olof Palme Marg, Munirka New Delhi : 110 067</p>
                  </div>
                  <div class="information-list">
                    <ul>
                      <li>
                        <div>
                          <i class="fa fa-phone"></i>PHONE (s)
                        </div>
                        <div>
                          <a href="tel:+91-11-26160315">+91-11-26160315</a>
                        </div>
                      </li>
                      <li>
                        <div>
                          <i class="fa fa-fax"></i>FAX
                        </div>
                        <span>
                          <a href="fax:+91-11-26160317">+91-11-26160317</a>
                        </span>
                      </li>
                      <li>
                        <div>
                          <i class="fa fa-envelope"></i>E-mail
                        </div>
                        <div>
                          <a href="mail-to:acma@acma.in">acma@acma.in</a>
                        </div>
                      </li>
                      <li>
                        <div>
                          <i class="fa fa-globe"></i>Website
                        </div>
                        <div>
                          <a href="http://www.acma.in">www.acma.in</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="company-information_card bg-light_green">
                  <h5 class="company_title company_title2">Webeesocial</h5>
                  <div class="company-profile">
                    <h4 class="title mb-0">
                      </b>
                    </h4>
                    <p>
                      <b>Director General</b>
                    </p>
                    <p>Automotive Component Manufacturers Association of India The Capital Court 6th Floor, Olof Palme Marg, Munirka New Delhi : 110 067</p>
                  </div>
                  <div class="information-list">
                    <ul>
                      <li>
                        <div>
                          <i class="fa fa-phone"></i>PHONE (s)
                        </div>
                        <div>
                          <a href="tel:+91-11-26160315">+91-11-26160315</a>
                        </div>
                      </li>
                      <li>
                        <div>
                          <i class="fa fa-fax"></i>FAX
                        </div>
                        <span>
                          <a href="fax:+91-11-26160317">+91-11-26160317</a>
                        </span>
                      </li>
                      <li>
                        <div>
                          <i class="fa fa-envelope"></i>E-mail
                        </div>
                        <div>
                          <a href="mail-to:acma@acma.in">acma@acma.in</a>
                        </div>
                      </li>
                      <li>
                        <div>
                          <i class="fa fa-globe"></i>Website
                        </div>
                        <div>
                          <a href="http://www.acma.in">www.acma.in</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="company-information_card bg-light_green">
                  <h5 class="company_title">Webeesocial</h5>
                  <div class="company-profile">
                    <h4 class="title mb-0">
                      </b>
                    </h4>
                    <p>
                      <b>Director General</b>
                    </p>
                    <p>Automotive Component Manufacturers Association of India The Capital Court 6th Floor, Olof Palme Marg, Munirka New Delhi : 110 067</p>
                  </div>
                  <div class="information-list">
                    <ul>
                      <li>
                        <div>
                          <i class="fa fa-phone"></i>PHONE (s)
                        </div>
                        <div>
                          <a href="tel:+91-11-26160315">+91-11-26160315</a>
                        </div>
                      </li>
                      <li>
                        <div>
                          <i class="fa fa-fax"></i>FAX
                        </div>
                        <span>
                          <a href="fax:+91-11-26160317">+91-11-26160317</a>
                        </span>
                      </li>
                      <li>
                        <div>
                          <i class="fa fa-envelope"></i>E-mail
                        </div>
                        <div>
                          <a href="mail-to:acma@acma.in">acma@acma.in</a>
                        </div>
                      </li>
                      <li>
                        <div>
                          <i class="fa fa-globe"></i>Website
                        </div>
                        <div>
                          <a href="http://www.acma.in">www.acma.in</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 text-center">
                <button class="btn btn-primary" class="download-button">Download Pdf</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="advertisement-one">
                <img src="http://dummyimage.com/700x500/" alt="placeholder" class="img-fluid img-placeholder">
          </div>
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
                <li><i class="fas fa-phone-alt"></i>  <a href="tel:+91-11-26160315">+91-11-26160315</a>
                </li>
                <li><i class="fas fa-envelope-open-text"></i>  <a href="mailto:acma@acma.in">acma@acma.in</a>
                </li>	
                <li>
                  <div class="d-flex ml-4 mt-3">
                    <div>
                      <a href="https://www.facebook.com/india.acma/" target="_blank" class="fb"><i class="fab fa-facebook-square"></i></a>
                  </div>
                    <div>
                      <a href="https://twitter.com/acmaindia" target="_blank" class="twitter"><i class="fab fa-twitter-square"></i></a> 
                    </div>
                    <div>
                      <a href="https://www.linkedin.com/company/acma-india/" target="_blank" class="linkedin"><i class="fab fa-linkedin"></i></a>
                    </div>
                  </div>	
                </li>
              </ul>
        </div>
        <div class="col-md-6">
          <p class="text-white d-flex mb-0"><span class="fas fa-map-marker-alt me-2 pt-1"></span>Automotive Component Manufacturers Association of India The Capital Court, 6th Floor, Olof Palme Marg, Munirka, New Delhi : 110 067</p>
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
  <script src="{{ asset('admin/') }}/assets/vendor/libs/bootstrap-select/bootstrap-select.js"></script>
  <script src="{{ asset('admin/') }}/assets/vendor/libs/select2/select2.js"></script>
  <script src="{{ asset('admin/') }}/assets/vendor/libs/bs-stepper/bs-stepper.js"></script>
  <script src="{{ asset('admin/') }}/assets/js/form-wizard-icons.js"></script>

<script>
    $(document).ready(function(){


        function autoSave(){
            let formData = new FormData($('#details_form')[0]);
            formData.append('_token', "{{ csrf_token() }}");
            $.ajax({
                url: "{{ route('company.fillUpDetailsStore') }}",
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function (data) {
                    
                },
                error: function (data) {
                    
                }
            })
        }

        setInterval(() => {
            autoSave();
            $(".company_contact_details_last_upload_counter").text('Saved');
            $(".company_contact_details_last_upload").addClass('text-success');
            $(".bx-cloud-upload").addClass('bx-fade-up');
            setTimeout(() => {
                $(".company_contact_details_last_upload_counter").text(parseInt(0));
                $(".company_contact_details_last_upload").removeClass('text-success');
                $(".bx-cloud-upload").removeClass('bx-fade-up');
            }, 1000);
        }, 11000);

        setInterval(()=>{
            $(".company_contact_details_last_upload_counter").text(parseInt($(".company_contact_details_last_upload_counter").text()) + 5);
        },5000)

    });
    $(document).ready(function() {
        var currentStep = 0;
        var formSteps = $('.form-step');
        var formNavigation = $('.form-navigation');
        var progressBar = $('#progress');
        var prevButton = $('#prev');
        var nextButton = $('#next');
        var submitButton = $('#submit');
        var progressSteps = $('.progress-step');

        function showStep(step) {
          formSteps.removeClass('active');
          $(formSteps[step]).addClass('active');

          progressSteps.removeClass('active'); // Remove active class from all progress steps
          for (var i = 0; i <= step; i++) {
            $(progressSteps[i]).addClass('active'); // Add active class to progress steps up to the current step
          }

          if (step === 0) {
            prevButton.hide();
          } else {
            prevButton.show();
          }

          if (step === formSteps.length - 1) {
            nextButton.hide();
            submitButton.show();
          } else {
              nextButton.show();
              submitButton.hide();
            }

        var progress = (step / (formSteps.length - 1)) * 100;
        progressBar.width(progress + "%");
        progressBar.attr('aria-valuenow', progress);
      }

        nextButton.click(function() {
          if (currentStep < formSteps.length - 1) {
            currentStep++;
            showStep(currentStep);
          }
        });

        prevButton.click(function() {
        if (currentStep > 0) {
          currentStep--;
          showStep(currentStep);
        }
      });

      showStep(currentStep);
   });


   
</script>

</body>

</html>

