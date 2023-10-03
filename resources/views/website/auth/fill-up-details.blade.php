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

<div class="container-xxl">
    <div class="col-12 mb-4">
        <small class="text-light fw-medium">Vertical Icons</small>
        <div class="bs-stepper wizard-vertical vertical wizard-vertical-icons-example mt-2">
          <div class="bs-stepper-header">
            <div class="step crossed" data-target="#company_contact_details">
              <button type="button" class="step-trigger" aria-selected="false">
                <span class="bs-stepper-circle">
                  <i class="bx bx-detail"></i>
                </span>
                <span class="bs-stepper-label mt-1">
                  <span class="bs-stepper-title">Company Contact Details</span>
                  <span class="bs-stepper-subtitle company_contact_details_last_upload">
                    <i class="bx bx-cloud-upload align-middle fs-5 ms-2"></i>
                    <span class="company_contact_details_last_upload_counter">0</span> seconds ago
                  </span>
                </span>
              </button>
            </div>
            <div class="line"></div>
            <div class="step crossed" data-target="#personal-info-vertical">
              <button type="button" class="step-trigger" aria-selected="false">
                <span class="bs-stepper-circle">
                  <i class="bx bx-user"></i>
                </span>
                <span class="bs-stepper-label mt-1">
                  <span class="bs-stepper-title">Personal Info</span>
                  <span class="bs-stepper-subtitle">Add personal info</span>
                </span>
              </button>
            </div>
            <div class="line"></div>
            <div class="step active" data-target="#social-links-vertical">
              <button type="button" class="step-trigger" aria-selected="true">
                <span class="bs-stepper-circle">
                  <i class="bx bxl-instagram"></i>
                </span>
                <span class="bs-stepper-label mt-1">
                  <span class="bs-stepper-title">Social Links</span>
                  <span class="bs-stepper-subtitle">Add social links</span>
                </span>
              </button>
            </div>
          </div>
          <div class="bs-stepper-content">
            <form id="details_form" method="POST">
              <!-- Account Details -->
              <div id="company_contact_details" class="content dstepper-block">
                <div class="content-header mb-3">
                  <h6 class="mb-0">Company Contact Details</h6>
                  <small>Enter Company Contact Details.</small>
                </div>
                <div class="row g-3">


                  <div class="col-sm-6">
                    <label class="form-label" for="company_name">Company Name</label>
                    <input type="text" id="company_name" name="company_name" class="form-control" placeholder="Acma" value="{{ $company_contact_details->company_name }}">
                  </div>

                  <div class="col-sm-6">
                    <label class="form-label" for="company_address">Company Address</label>
                    <textarea id="company_address" name="company_address" class="form-control" placeholder="ACMA" height="220" >{{ $company_contact_details->company_address }}</textarea>
                  </div>

                  <div class="col-sm-6">
                    <label class="form-label" for="pin">Company Pin</label>
                    <input type="text" id="pin" name="pin" class="form-control" placeholder="121212" value="{{ $company_contact_details->pin }}">
                  </div>

                  <div class="col-sm-6">
                    <label class="form-label" for="fax">Company Fax</label>
                    <input type="text" id="fax" name="fax" class="form-control" placeholder="121212" value="{{ $company_contact_details->fax }}">
                  </div>

                  <div class="col-sm-6">
                    <label class="form-label" for="phone">Company Phone</label>
                    <input type="text" id="phone" name="phone" class="form-control" placeholder="9999999999" value="{{ $company_contact_details->phone }}">
                  </div>

                  <div class="col-sm-6">
                    <label class="form-label" for="email">Company Email</label>
                    <input type="text" id="email" name="email" class="form-control" placeholder="email@acma.in" value="{{ $company_contact_details->email }}">
                  </div>

                  <div class="col-sm-6">
                    <label class="form-label" for="website">Company Webiste</label>
                    <input type="text" id="website" name="website" class="form-control" placeholder="acma.in" value="{{ $company_contact_details->website }}">
                  </div>

                  <div class="col-sm-6">
                    <label class="form-label" for="company_address">Website Address (if any)</label>
                    <textarea id="website_address" name="website_address" class="form-control" placeholder="ACMA" height="220" >{{ $company_contact_details->website_address }}</textarea>
                  </div>

                  <div class="col-sm-6">
                    <label class="form-label" for="main_plant_address">Main Plant Address</label>
                    <textarea id="main_plant_address" name="main_plant_address" class="form-control" placeholder="ACMA" height="220" >{{ $company_contact_details->main_plant_address }}</textarea>
                  </div>

                  <div class="col-sm-6">
                    <label class="form-label" for="plant_pin">Plant Pin</label>
                    <input type="text" id="plant_pin" name="plant_pin" class="form-control" placeholder="121212" value="{{ $company_contact_details->plant_pin }}">
                  </div>

                  <div class="col-sm-6">
                    <label class="form-label" for="plant_phone">Plant Phone</label>
                    <input type="text" id="plant_phone" name="plant_phone" class="form-control" placeholder="9999999999" value="{{ $company_contact_details->plant_phone }}">
                  </div>

                  <div class="col-sm-6">
                    <label class="form-label" for="plant_fax">Plant Fax</label>
                    <input type="text" id="plant_fax" name="plant_fax" class="form-control" placeholder="9999999999" value="{{ $company_contact_details->plant_fax }}">
                  </div>

                  <div class="col-sm-6">
                    <label class="form-label" for="plant_email">Plant Email</label>
                    <input type="text" id="plant_email" name="plant_email" class="form-control" placeholder="plant@acma.in" value="{{ $company_contact_details->plant_email }}">
                  </div>

                  <div class="col-sm-6">
                    <label class="form-label" for="plant_website">Plant Website</label>
                    <input type="text" id="plant_website" name="plant_website" class="form-control" placeholder="acma.in" value="{{ $company_contact_details->plant_website }}">
                  </div>

                  <div class="col-sm-6">
                    <label class="form-label" for="overseas_plant_address">Overseas Plant Address</label>
                    <textarea id="overseas_plant_address" name="overseas_plant_address" class="form-control" placeholder="ACMA" height="220" >{{ $company_contact_details->overseas_plant_address }}</textarea>
                  </div>

                  <div class="col-sm-6">
                    <label class="form-label" for="other_plant_address">Other Plant Address</label>
                    <textarea id="other_plant_address" name="other_plant_address" class="form-control" placeholder="ACMA" height="220" >{{ $company_contact_details->other_plant_address }}</textarea>
                  </div>


                  <div class="col-12 d-flex justify-content-between">
                    <button class="btn btn-label-secondary btn-prev" disabled="">
                      <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                      <span class="align-middle d-sm-inline-block d-none">Previous</span>
                    </button>
                    <button class="btn btn-primary btn-next">
                      <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                      <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                    </button>
                  </div>
                </div>
              </div>
              <!-- Personal Info -->
              <div id="personal-info-vertical" class="content dstepper-block">
                <div class="content-header mb-3">
                  <h6 class="mb-0">Personal Info</h6>
                  <small>Enter Your Personal Info.</small>
                </div>
                <div class="row g-3">
                  <div class="col-sm-6">
                    <label class="form-label" for="first-name1">First Name</label>
                    <input type="text" id="first-name1" class="form-control" placeholder="John">
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="last-name1">Last Name</label>
                    <input type="text" id="last-name1" class="form-control" placeholder="Doe">
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="country1">Country</label>
                    <div class="position-relative"><select class="select2 select2-hidden-accessible" id="country1" data-select2-id="country1" tabindex="-1" aria-hidden="true">
                      <option label=" " data-select2-id="4"></option>
                      <option>UK</option>
                      <option>USA</option>
                      <option>Spain</option>
                      <option>France</option>
                      <option>Italy</option>
                      <option>Australia</option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-country1-container"><span class="select2-selection__rendered" id="select2-country1-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select value</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="language1">Language</label>
                    <div class="dropdown bootstrap-select show-tick w-auto"><select class="selectpicker w-auto" id="language1" data-style="btn-default" data-icon-base="bx" data-tick-icon="bx-check text-white" multiple="">
                      <option>English</option>
                      <option>French</option>
                      <option>Spanish</option>
                    </select><button type="button" tabindex="-1" class="btn dropdown-toggle bs-placeholder btn-default" data-bs-toggle="dropdown" role="combobox" aria-owns="bs-select-2" aria-haspopup="listbox" aria-expanded="false" title="Nothing selected" data-id="language1"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Nothing selected</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-2" tabindex="-1" aria-multiselectable="true"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
                  </div>
                  <div class="col-12 d-flex justify-content-between">
                    <button class="btn btn-primary btn-prev">
                      <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                      <span class="align-middle d-sm-inline-block d-none">Previous</span>
                    </button>
                    <button class="btn btn-primary btn-next">
                      <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                      <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                    </button>
                  </div>
                </div>
              </div>
              <!-- Social Links -->
              <div id="social-links-vertical" class="content dstepper-block active">
                <div class="content-header mb-3">
                  <h6 class="mb-0">Social Links</h6>
                  <small>Enter Your Social Links.</small>
                </div>
                <div class="row g-3">
                  <div class="col-sm-6">
                    <label class="form-label" for="twitter1">Twitter</label>
                    <input type="text" id="twitter1" class="form-control" placeholder="https://twitter.com/abc">
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="facebook1">Facebook</label>
                    <input type="text" id="facebook1" class="form-control" placeholder="https://facebook.com/abc">
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="google1">Google+</label>
                    <input type="text" id="google1" class="form-control" placeholder="https://plus.google.com/abc">
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="linkedin1">Linkedin</label>
                    <input type="text" id="linkedin1" class="form-control" placeholder="https://linkedin.com/abc">
                  </div>
                  <div class="col-12 d-flex justify-content-between">
                    <button class="btn btn-primary btn-prev">
                      <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                      <span class="align-middle d-sm-inline-block d-none">Previous</span>
                    </button>
                    <button class="btn btn-success btn-submit">Submit</button>
                  </div>
                </div>
              </div>
            </form>
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
</script>
  
</body>

</html>

