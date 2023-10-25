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
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="auth-login-cover.html" target="_blank">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
              </div>
        </div>
      </div>
    </div>
  </header>
  <div class="container-xxl">
          <div class="row justify-content-center sec-space">
              <div class="col-md-2 mb-3 mb-md-0">
                <div class="advertisement-one">
                  <img src="http://dummyimage.com/700x500/" alt="placeholder" class="img-fluid img-placeholder">
                </div>
              </div>
              <div class="col-md-8 mb-3 mb-md-0">
                <div class="card">
                    <h2 id="heading" class="text-center title">Company Details</h2>
                    <p class="text-center">Fill all form field to go to next step</p>
                    <form action="{{route('company.fillUpDetailsStore')}}" id="Multi-Steps-form" method="post" class="multi-steps-form">
                      @csrf
                        <div class="progress-bar mt-2">
                          <div class="progress" id="progress"></div>
                          <div class="progress-step active" data-title="Contact"></div>
                          <div class="progress-step" data-title="Personal"></div>
                          <!-- <div class="progress-connector"></div> -->
                          <div class="progress-step" data-title="Business"></div>
                          <!-- <div class="progress-connector"></div> -->
                          <div class="progress-step" data-title="Policy"></div>
                        
                        </div>
                        <!-- Company Contact Details --->
                        <div class="form-step active">
                          <div id="company_contact_details" class="form-card content">
                              <div class="row g-3">
                                <div class="col-sm-6">
                                <label class="form-label" for="company_name">Company Name</label>
                                <input type="text" id="company_name" name="company_name" class="form-control" placeholder="Acma" value="{{ $company_contact_details->company_name }}">
                                </div>

                                <div class="col-sm-6">
                                <label class="form-label" for="company_address">Company Address</label>
                                <textarea id="company_address" name="company_address" class="form-control" placeholder="ACMA" rows="1" >{{ $company_contact_details->company_address }}</textarea>
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
                                <textarea id="website_address" name="website_address" class="form-control" placeholder="ACMA" rows="1" >{{ $company_contact_details->website_address }}</textarea>
                                </div>

                                <div class="col-sm-6">
                                <label class="form-label" for="main_plant_address">Main Plant Address</label>
                                <textarea id="main_plant_address" name="main_plant_address" class="form-control" placeholder="ACMA" rows="1" >{{ $company_contact_details->main_plant_address }}</textarea>
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
                                <textarea id="overseas_plant_address" name="overseas_plant_address" class="form-control" placeholder="ACMA" rows="1" >{{ $company_contact_details->overseas_plant_address }}</textarea>
                                </div>

                                <div class="col-sm-6">
                                <label class="form-label" for="other_plant_address">Other Plant Address</label>
                                <textarea id="other_plant_address" name="other_plant_address" class="form-control" placeholder="ACMA" rows="1" >{{ $company_contact_details->other_plant_address }}</textarea>
                                </div>
                                <!-- <div class="col-12 d-flex justify-content-between">
                                  <button class="btn btn-label-secondary btn-sm btn-prev" disabled="">
                                    <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                  </button>
                                  <button class="btn btn-primary btn-sm btn-next">
                                    <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                    <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                                  </button>
                                </div> -->
                              </div>
                            </div>
                        </div>
                        <!--- Contact Details of key Personal --->
                        <div class="form-step">
                          <div id="contact_details_of_key_personnel" class="form-card content">
                            <div class="row g-3">
                              <div class="col-sm-4">
                                <label class="form-label" for="managing_director">Managing Director</label>
                                <input type="text" id="managing_director" name="managing_director" class="form-control" placeholder="John" value="{{ $company_key_personnels->managing_director }}">
                              </div>
                              <div class="col-sm-4">
                                <label class="form-label" for="managing_director_email">Managing Director Email</label>
                                <input type="text" id="managing_director_email" name="managing_director_email" class="form-control" placeholder="enter email" value="{{ $company_key_personnels->managing_director_email }}">
                              </div>
                              <div class="col-sm-4">
                                <label class="form-label" for="managing_director_contact">Managing Director Contact</label>
                                <input type="text" id="managing_director_contact" name="managing_director_contact" class="form-control" placeholder="Contact" value="{{ $company_key_personnels->managing_director_contact }}">
                              </div>

                              <div class="col-sm-4">
                                <label class="form-label" for="cheif_executive">Cheif Executive</label>
                                <input type="text" id="cheif_executive" name="cheif_executive" class="form-control" placeholder="John" value="{{ $company_key_personnels->cheif_executive }}">
                              </div>
                              <div class="col-sm-4">
                                <label class="form-label" for="cheif_executive_email">Cheif Executive Email</label>
                                <input type="text" id="cheif_executive_email" name="cheif_executive_email" class="form-control" placeholder="enter email" value="{{ $company_key_personnels->cheif_executive_email }}">
                              </div>
                              <div class="col-sm-4">
                                <label class="form-label" for="cheif_executive_contact">Cheif Executive Contact</label>
                                <input type="text" id="cheif_executive_contact" name="cheif_executive_contact" class="form-control" placeholder="Contact" value="{{ $company_key_personnels->cheif_executive_contact }}">
                              </div>

                              <div class="col-sm-4">
                                <label class="form-label" for="sales_in_charge">sales incharge</label>
                                <input type="text" id="sales_in_charge" name="sales_in_charge" class="form-control" placeholder="John" value="{{ $company_key_personnels->sales_in_charge }}">
                              </div>
                              <div class="col-sm-4">
                                <label class="form-label" for="sales_in_charge_email">sales incharge email</label>
                                <input type="text" id="sales_in_charge_email" name="sales_in_charge_email" class="form-control" placeholder="enter email" value="{{ $company_key_personnels->sales_in_charge_email }}">
                              </div>
                              <div class="col-sm-4">
                                <label class="form-label" for="sales_in_charge_contact">sales in charge contact</label>
                                <input type="text" id="sales_in_charge_contact" name="sales_in_charge_contact" class="form-control" placeholder="Contact" value="{{ $company_key_personnels->sales_in_charge_contact }}">
                              </div>

                              <div class="col-sm-4">
                                <label class="form-label" for="export_in_charge">export incharge</label>
                                <input type="text" id="export_in_charge" name="export_in_charge" class="form-control" placeholder="John" value="{{ $company_key_personnels->export_in_charge }}">
                              </div>
                              <div class="col-sm-4">
                                <label class="form-label" for="export_in_charge_email">export incharge email</label>
                                <input type="text" id="export_in_charge_email" name="export_in_charge_email" class="form-control" placeholder="enter email" value="{{ $company_key_personnels->export_in_charge_email }}">
                              </div>
                              <div class="col-sm-4">
                                <label class="form-label" for="export_in_charge_contact">export incharge contact</label>
                                <input type="text" id="export_in_charge_contact" name="export_in_charge_contact" class="form-control" placeholder="Contact" value="{{ $company_key_personnels->export_in_charge_contact }}">
                              </div>

                              <div class="col-sm-4">
                                <label class="form-label" for="production_in_charge">production incharge</label>
                                <input type="text" id="production_in_charge" name="production_in_charge" class="form-control" placeholder="John" value="{{ $company_key_personnels->production_in_charge }}">
                              </div>
                              <div class="col-sm-4">
                                <label class="form-label" for="production_in_charge_email">production incharge email</label>
                                <input type="text" id="production_in_charge_email" name="production_in_charge_email" class="form-control" placeholder="enter email" value="{{ $company_key_personnels->production_in_charge_email }}">
                              </div>
                              <div class="col-sm-4">
                                <label class="form-label" for="production_in_charge_contact">production incharge contact</label>
                                <input type="text" id="production_in_charge_contact" name="production_in_charge_contact" class="form-control" placeholder="Contact" value="{{ $company_key_personnels->production_in_charge_contact }}">
                              </div>

                              <div class="col-sm-4">
                                <label class="form-label" for="hr_in_charge">Hr incharge</label>
                                <input type="text" id="hr_in_charge" name="hr_in_charge" class="form-control" placeholder="John" value="{{ $company_key_personnels->hr_in_charge }}">
                              </div>
                              <div class="col-sm-4">
                                <label class="form-label" for="hr_in_charge_email">Hr incharge Email</label>
                                <input type="text" id="hr_in_charge_email" name="hr_in_charge_email" class="form-control" placeholder="enter email" value="{{ $company_key_personnels->hr_in_charge_email }}">
                              </div>
                              <div class="col-sm-4">
                                <label class="form-label" for="hr_in_charge_contact">Hr incharge Contact</label>
                                <input type="text" id="hr_in_charge_contact" name="hr_in_charge_contact" class="form-control" placeholder="Contact" value="{{ $company_key_personnels->hr_in_charge_contact }}">
                              </div>

                              <div class="col-sm-4">
                                <label class="form-label" for="it_in_charge">It incharge</label>
                                <input type="text" id="it_in_charge" name="it_in_charge" class="form-control" placeholder="John" value="{{ $company_key_personnels->it_in_charge }}">
                              </div>
                              <div class="col-sm-4">
                                <label class="form-label" for="it_in_charge_email">It incharge Email</label>
                                <input type="text" id="it_in_charge_email" name="it_in_charge_email" class="form-control" placeholder="enter email" value="{{ $company_key_personnels->it_in_charge_email }}">
                              </div>
                              <div class="col-sm-4">
                                <label class="form-label" for="it_in_charge_contact">It incharge Contact</label>
                                <input type="text" id="it_in_charge_contact" name="it_in_charge_contact" class="form-control" placeholder="Contact" value="{{ $company_key_personnels->it_in_charge_contact }}">
                              </div>

                              <div class="col-sm-4">
                                <label class="form-label" for="quality_in_charge"> Quality incharge</label>
                                <input type="text" id="quality_in_charge" name="quality_in_charge" class="form-control" placeholder="John" value="{{ $company_key_personnels->quality_in_charge }}">
                              </div>
                              <div class="col-sm-4">
                                <label class="form-label" for="quality_in_charge_email">Quality incharge Email</label>
                                <input type="text" id="quality_in_charge_email" name="quality_in_charge_email" class="form-control" placeholder="enter email" value="{{ $company_key_personnels->quality_in_charge_email }}">
                              </div>
                              <div class="col-sm-4">
                                <label class="form-label" for="quality_in_charge_contact">Quality Incharge Contact</label>
                                <input type="text" id="quality_in_charge_contact" name="quality_in_charge_contact" class="form-control" placeholder="Contact" value="{{ $company_key_personnels->quality_in_charge_contact }}">
                              </div>

                              <div class="col-sm-4">
                                <label class="form-label" for="rd_in_charge">Rd incharge</label>
                                <input type="text" id="r_d_in_charge" name="r_d_in_charge" class="form-control" placeholder="John" value="{{ $company_key_personnels->r_d_in_charge }}">
                              </div>
                              <div class="col-sm-4">
                                <label class="form-label" for="rd_in_charge_email">Rd incharge Email</label>
                                <input type="text" id="r_d_in_charge_email" name="r_d_in_charge_email" class="form-control" placeholder="enter email" value="{{ $company_key_personnels->r_d_in_charge_email }}">
                              </div>
                              <div class="col-sm-4">
                                <label class="form-label" for="rd_in_charge_contact">Rd incharge Contact</label>
                                <input type="text" id="r_d_in_charge_contact" name="r_d_in_charge_contact" class="form-control" placeholder="Contact" value="{{ $company_key_personnels->r_d_in_charge_contact }}">
                              </div>

                              <div class="col-sm-4">
                                <label class="form-label" for="metallurgy_in_charge">Metallurgy incharge</label>
                                <input type="text" id="metallurgy_in_charge" name="metallurgy_in_charge" class="form-control" placeholder="John" value="{{ $company_key_personnels->metallurgy_in_charge }}">
                              </div>
                              <div class="col-sm-4">
                                <label class="form-label" for="metallurgy_in_charge_email">Metallurgy incharge Email</label>
                                <input type="text" id="metallurgy_in_charge_email" name="metallurgy_in_charge_email" class="form-control" placeholder="enter email" value="{{ $company_key_personnels->metallurgy_in_charge_email }}">
                              </div>
                              <div class="col-sm-4">
                                <label class="form-label" for="metallurgy_in_charge_contact">Metallurgy incharge Contact</label>
                                <input type="text" id="metallurgy_in_charge_contact" name="metallurgy_in_charge_contact" class="form-control" placeholder="Contact" value="{{ $company_key_personnels->metallurgy_in_charge_contact }}">
                              </div>

                              <div class="col-sm-4">
                                <label class="form-label" for="finance_in_charge">Finance incharge</label>
                                <input type="text" id="finance_in_charge" name="finance_in_charge" class="form-control" placeholder="John" value="{{ $company_key_personnels->finance_in_charge }}">
                              </div>
                              <div class="col-sm-4">
                                <label class="form-label" for="finance_in_charge_email">Finance incharge Email</label>
                                <input type="text" id="finance_in_charge_email" name="finance_in_charge_email" class="form-control" placeholder="enter email" value="{{ $company_key_personnels->finance_in_charge_email }}">
                              </div>
                              <div class="col-sm-4">
                                <label class="form-label" for="finance_in_charge_contact">Finance incharge Contact</label>
                                <input type="text" id="finance_in_charge_contact" name="finance_in_charge_contact" class="form-control" placeholder="Contact" value="{{ $company_key_personnels->finance_in_charge_contact }}">
                              </div>

                              <div class="col-sm-4">
                                <label class="form-label" for="scm_in_charge">Scm Incharge</label>
                                <input type="text" id="scm_in_charge" name="scm_in_charge" class="form-control" placeholder="John" value="{{ $company_key_personnels->scm_in_charge }}">
                              </div>
                              <div class="col-sm-4">
                                <label class="form-label" for="scm_in_charge_email">Scm Incharge Email</label>
                                <input type="text" id="scm_in_charge_email" name="scm_in_charge_email" class="form-control" placeholder="enter email" value="{{ $company_key_personnels->scm_in_charge_email }}">
                              </div>
                              <div class="col-sm-4">
                                <label class="form-label" for="scm_in_charge_contact">Scm Incharge Contact</label>
                                <input type="text" id="scm_in_charge_contact" name="scm_in_charge_contact" class="form-control" placeholder="Contact" value="{{ $company_key_personnels->scm_in_charge_contact }}">
                              </div>

                              <div class="col-sm-4">
                                <label class="form-label" for="plant_in_charge">Plant Incharge</label>
                                <input type="text" id="plant_in_charge" name="plant_in_charge" class="form-control" placeholder="John" value="{{ $company_key_personnels->plant_in_charge }}">
                              </div>
                              <div class="col-sm-4">
                                <label class="form-label" for="plant_in_charge_email">Plant Incharge Email</label>
                                <input type="text" id="plant_in_charge_email" name="plant_in_charge_email" class="form-control" placeholder="enter email" value="{{ $company_key_personnels->plant_in_charge_email }}">
                              </div>
                              <div class="col-sm-4">
                                <label class="form-label" for="plant_in_charge_contact">Plant Incharge Contact</label>
                                <input type="text" id="plant_in_charge_contact" name="plant_in_charge_contact" class="form-control" placeholder="Contact" value="{{ $company_key_personnels->plant_in_charge_contact }}">
                              </div>

                              <!-- <div class="col-12 d-flex justify-content-between">
                                <button class="btn btn-primary btn-sm btn-prev">
                                  <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                  <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                </button>
                                <button class="btn btn-primary btn-sm btn-next">
                                  <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                  <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                                </button>
                              </div> -->
                            </div>
                          </div>
                        </div>

                        <div class="form-step">
                          <div id="business_details" class="form-card content">
                              <div class="row g-3">
                               
                                



                                {{-- ////////////New Excel fields added by AJ on 18 oct -2023////////////// --}}

                                <div class="col-sm-4">
                                  <label class="form-label" for="Responded">Responded</label>
                                  <input type="text" id="responded" name="responded" class="form-control" placeholder="" value="">
                                </div>
                                
                                <div class="col-sm-4">
                                  <label class="form-label" for="SerialNo">SerialNo</label>
                                  <input type="text" id="serial_no" name="serial_no" class="form-control" placeholder="" value="">
                                </div>
                                
                                <div class="col-sm-4">
                                  <label class="form-label" for="Update">Update</label>
                                  <input type="text" id="update" name="update" class="form-control" placeholder="" value="">
                                </div>
                                
                                <div class="col-sm-4">
                                  <label class="form-label" for="Update_Date">Update Date</label>
                                  <input type="text" id="update_date" name="update_date" class="form-control" placeholder="" value="">
                                </div>
                                
                                <div class="col-sm-4">
                                  <label class="form-label" for="REGION">Region</label>
                                  <input type="text" id="region" name="region" class="form-control" placeholder="" value="">
                                </div>
                                
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="OverseasPlant_1">Overseas Plant_1</label>
                                <input type="text" id="overseas_plant_1" name="overseas_plant_1" class="form-control" placeholder="" value="">
                              </div>


                              <div class="col-sm-4">
                                <label class="form-label" for="OverseasPlant_2">Overseas Plant_2</label>
                                <input type="text" id="overseas_plant_2" name="overseas_plant_2" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="OverseasPlant_3">Overseas Plant_3</label>
                                <input type="text" id="overseas_plant_3" name="overseas_plant_3" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="otheraddress">Other Address</label>
                                <input type="text" id="otheraddress" name="otheraddress" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="otheraddress_1">Other Address 1</label>
                                <input type="text" id="otheraddress_1" name="otheraddress_1" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="Otherplant_Address1">Other Plant Address 1</label>
                                <input type="text" id="otherplant_address1" name="otherplant_address1" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="Otherplant_Address2">Other Plant Address 2</label>
                                <input type="text" id="otherplant_address2" name="otherplant_address2" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="Otherplant_Address3">Other Plant Address 3</label>
                                <input type="text" id="otherplant_address3" name="otherplant_address3" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="MDirector">Managing Director</label>
                                <input type="text" id="managing_director" name="managing_director" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="chiefexecutive">Chief Executive</label>
                                <input type="text" id="chief_executive" name="chief_executive" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="salesincharge">Sales Incharge</label>
                                <input type="text" id="sales_incharge" name="sales_incharge" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="ExportIncharge">Export Incharge</label>
                                <input type="text" id="export_incharge" name="export_incharge" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="ProductionIncharge">Production Incharge</label>
                                <input type="text" id="production_incharge" name="production_incharge" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="QualityIncharge">Quality Incharge</label>
                                <input type="text" id="quality_incharge" name="quality_incharge" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="HRDIncharge">HRD Incharge</label>
                                <input type="text" id="hrd_incharge" name="hrd_incharge" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="R&DIncharge">R&D Incharge</label>
                                <input type="text" id="rnd_incharge" name="rnd_incharge" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="YearCommencing">Year Commencing</label>
                                <input type="text" id="year_commencing" name="year_commencing" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="ProductsManufactured">Products Manufactured</label>
                                <input type="text" id="products_manufactured" name="products_manufactured" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="Product2">Product 2</label>
                                <input type="text" id="product2" name="product2" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="Product3">Product 3</label>
                                <input type="text" id="product3" name="product3" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="Product4">Product 4</label>
                                <input type="text" id="product4" name="product4" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="Scale">Scale</label>
                                <input type="text" id="scale" name="scale" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="ssi_info">SSI Info</label>
                                <input type="text" id="ssi_info" name="ssi_info" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="Trademark">Trademark</label>
                                <input type="text" id="trademark" name="trademark" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="total_capital">Total Capital</label>
                                <input type="text" id="total_capital" name="total_capital" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="net_investment_plant">Net Investment Plant</label>
                                <input type="text" id="net_investment_plant" name="net_investment_plant" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="total_investment_plant">Total Investment Plant</label>
                                <input type="text" id="total_investment_plant" name="total_investment_plant" class="form-control" placeholder="" value="">
                              </div>

                              <div class="col-sm-4">
                                <label class="form-label" for="sales_turnover">Sales Turnover</label>
                                <input type="text" id="sales_turnover" name="sales_turnover" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="S_TURN">S_TURN(in $ Mln)</label>
                                <input type="text" id="s_turn_in" name="s_turn_in" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="export_turn-02-03">Export Turn-02-03</label>
                                <input type="text" id="export_turn_02_03" name="export_turn_02_03" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="Exports(in $ Mln)">Exports(in $ Mln)</label>
                                <input type="text" id="exports_in_mln" name="exports_in_mln" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="no_of_emps">Number of Employees</label>
                                <input type="text" id="number_of_employees" name="number_of_employees" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="Skilled">Skilled</label>
                                <input type="text" id="skilled" name="skilled" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="SemiSkilled">Semi Skilled</label>
                                <input type="text" id="semi_skilled" name="semi_skilled" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="UnSkilled">Un Skilled</label>
                                <input type="text" id="un_skilled" name="un_skilled" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="Contractual">Contractual</label>
                                <input type="text" id="contractual" name="contractual" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="Manage&Above">Management & Above</label>
                                <input type="text" id="management_above" name="management_above" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="F_COLLAB1">F_COLLAB1</label>
                                <input type="text" id="f_collab1" name="f_collab1" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="F_PROD1">F_PROD1</label>
                                <input type="text" id="f_prod1" name="f_prod1" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="NATURE1">NATURE1</label>
                                <input type="text" id="nature1" name="nature1" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="per1">Per1</label>
                                <input type="text" id="per1" name="per1" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="F_COLLAB2">F_COLLAB2</label>
                                <input type="text" id="f_collab2" name="f_collab2" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="F_PROD2">F_PROD2</label>
                                <input type="text" id="f_prod2" name="f_prod2" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="NATURE2">NATURE2</label>
                                <input type="text" id="nature2" name="nature2" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="per2">Per2</label>
                                <input type="text" id="per2" name="per2" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="F_COLLAB3">F_COLLAB3</label>
                                <input type="text" id="f_collab3" name="f_collab3" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="F_PROD3">F_PROD3</label>
                                <input type="text" id="f_prod3" name="f_prod3" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="NATURE3">NATURE3</label>
                                <input type="text" id="nature3" name="nature3" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="per3">Per3</label>
                                <input type="text" id="per3" name="per3" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="F_COLLAB4">F_COLLAB4</label>
                                <input type="text" id="f_collab4" name="f_collab4" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="F_PROD4">F_PROD4</label>
                                <input type="text" id="f_prod4" name="f_prod4" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="NATURE4">NATURE4</label>
                                <input type="text" id="nature4" name="nature4" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="per4">Per4</label>
                                <input type="text" id="per4" name="per4" class="form-control" placeholder="" value="">
                              </div>

                              <div class="col-sm-4">
                                <label class="form-label" for="F_COLLAB5">F_COLLAB5</label>
                                <input type="text" id="f_collab5" name="f_collab5" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="F_PROD5">F_PROD5</label>
                                <input type="text" id="f_prod5" name="f_prod5" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="NATURE5">NATURE5</label>
                                <input type="text" id="nature5" name="nature5" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="per5">Per5</label>
                                <input type="text" id="per5" name="per5" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="F_COLLAB6">F_COLLAB6</label>
                                <input type="text" id="f_collab6" name="f_collab6" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="F_PROD6">F_PROD6</label>
                                <input type="text" id="f_prod6" name="f_prod6" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="NATURE6">NATURE6</label>
                                <input type="text" id="nature6" name="nature6" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="per6">Per6</label>
                                <input type="text" id="per6" name="per6" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="F_COLLAB7">F_COLLAB7</label>
                                <input type="text" id="f_collab7" name="f_collab7" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="F_PROD7">F_PROD7</label>
                                <input type="text" id="f_prod7" name="f_prod7" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="NATURE7">NATURE7</label>
                                <input type="text" id="nature7" name="nature7" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="per7">Per7</label>
                                <input type="text" id="per7" name="per7" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="F_COLLAB8">F_COLLAB8</label>
                                <input type="text" id="f_collab8" name="f_collab8" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="F_PROD8">F_PROD8</label>
                                <input type="text" id="f_prod8" name="f_prod8" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="NATURE8">NATURE8</label>
                                <input type="text" id="nature8" name="nature8" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="per8">Per8</label>
                                <input type="text" id="per8" name="per8" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="F_COLLAB9">F_COLLAB9</label>
                                <input type="text" id="f_collab9" name="f_collab9" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="F_PROD9">F_PROD9</label>
                                <input type="text" id="f_prod9" name="f_prod9" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="NATURE9">NATURE9</label>
                                <input type="text" id="nature9" name="nature9" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="per9">Per9</label>
                                <input type="text" id="per9" name="per9" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="F_COLLAB10">F_COLLAB10</label>
                                <input type="text" id="f_collab10" name="f_collab10" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="F_PROD10">F_PROD10</label>
                                <input type="text" id="f_prod10" name="f_prod10" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="NATURE10">NATURE10</label>
                                <input type="text" id="nature10" name="nature10" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="per10">Per10</label>
                                <input type="text" id="per10" name="per10" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="MEMBER">Member</label>
                                <input type="text" id="member" name="member" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="iso">ISO</label>
                                <input type="text" id="iso" name="iso" class="form-control" placeholder="" value="">
                              </div>
                              
                              
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="isodate">ISO Date</label>
                                <input type="text" id="isodate" name="isodate" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="isoagency">ISO Agency</label>
                                <input type="text" id="isoagency" name="isoagency" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="qs">QS</label>
                                <input type="text" id="qs" name="qs" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="qsdate">QS Date</label>
                                <input type="text" id="qsdate" name="qsdate" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="qsagency">QS Agency</label>
                                <input type="text" id="qsagency" name="qsagency" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="iso14">ISO 14</label>
                                <input type="text" id="iso14" name="iso14" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="iso14date">ISO 14 Date</label>
                                <input type="text" id="iso14date" name="iso14date" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="iso14agency">ISO 14 Agency</label>
                                <input type="text" id="iso14agency" name="iso14agency" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="ts">TS</label>
                                <input type="text" id="ts" name="ts" class="form-control" placeholder="" value="">
                              </div>
                              
                                                            
                              
                                {{-- //////////// Above New Excel fields added by AJ on 18 oct -2023////////////// --}}

                                
                                <!-- <div class="col-12 d-flex justify-content-between">
                                  <button class="btn btn-label-secondary btn-sm btn-prev" disabled="">
                                    <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                  </button>
                                  <button class="btn btn-primary btn-sm btn-next">
                                    <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                    <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                                  </button>
                                </div> -->
                              </div>
                            </div>
                        </div>

                        <div class="form-step">
                          <div id="contact_details_of_key_personnel" class="form-card content">
                            <div class="row g-3">



                              <div class="col-sm-4">
                                <label class="form-label" for="tsdate">TS Date</label>
                                <input type="text" id="tsdate" name="tsdate" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="tsagency">TS Agency</label>
                                <input type="text" id="tsagency" name="tsagency" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="DemingAward">Deming Award</label>
                                <input type="text" id="deming_award" name="deming_award" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="JapanQualityMedal">Japan Quality Medal</label>
                                <input type="text" id="japan_quality_medal" name="japan_quality_medal" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="emark">E-Mark</label>
                                <input type="text" id="emark" name="emark" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="bismark">Bismark</label>
                                <input type="text" id="bismark" name="bismark" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="other_mark1">Other Mark 1</label>
                                <input type="text" id="other_mark1" name="other_mark1" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="other_mark2">Other Mark 2</label>
                                <input type="text" id="other_mark2" name="other_mark2" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="DOMesticOE">DOMesticOE</label>
                                <input type="text" id="domesticoe" name="domesticoe" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="DOMesticOE1">DOMesticOE1</label>
                                <input type="text" id="domesticoe1" name="domesticoe1" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="DOMesticOE2">DOMesticOE2</label>
                                <input type="text" id="domesticoe2" name="domesticoe2" class="form-control" placeholder="" value="">
                              </div>

                              <div class="col-sm-4">
                                <label class="form-label" for="DOMesticOE3">DOMesticOE3</label>
                                <input type="text" id="domesticoe3" name="domesticoe3" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="DOMesticOE4">DOMesticOE4</label>
                                <input type="text" id="domesticoe4" name="domesticoe4" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="DOMestic_tier_oe">DOMestic Tier OE</label>
                                <input type="text" id="domestic_tier_oe" name="domestic_tier_oe" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="DOMestic_tier_oe1">DOMestic Tier OE1</label>
                                <input type="text" id="domestic_tier_oe1" name="domestic_tier_oe1" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="DOMestic_tier_oe2">DOMestic Tier OE2</label>
                                <input type="text" id="domestic_tier_oe2" name="domestic_tier_oe2" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="DOMestic_tier_oe3">DOMestic Tier OE3</label>
                                <input type="text" id="domestic_tier_oe3" name="domestic_tier_oe3" class="form-control" placeholder="" value="">
                              </div>

                              <div class="col-sm-4">
                                <label class="form-label" for="CUSINT1">CUSINT1</label>
                                <input type="text" id="cusint1" name="cusint1" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="CUSINT2">CUSINT2</label>
                                <input type="text" id="cusint2" name="cusint2" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="CUSINT3">CUSINT3</label>
                                <input type="text" id="cusint3" name="cusint3" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="CUSINT_tier1">CUSINT_tier1</label>
                                <input type="text" id="cusint_tier1" name="cusint_tier1" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="CUSInt_tier2">CUSInt_tier2</label>
                                <input type="text" id="cusint_tier2" name="cusint_tier2" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="CUSInt_tier3">CUSInt_tier3</label>
                                <input type="text" id="cusint_tier3" name="cusint_tier3" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="AFMKT1">AFMKT1</label>
                                <input type="text" id="afmkt1" name="afmkt1" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="AFMKT2">AFMKT2</label>
                                <input type="text" id="afmkt2" name="afmkt2" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="AFMKT3">AFMKT3</label>
                                <input type="text" id="afmkt3" name="afmkt3" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="NetExciseDutyPaid">Net Excise Duty Paid</label>
                                <input type="text" id="net_excise_duty_paid" name="net_excise_duty_paid" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="TotalCustomDutyPaid">Total Custom Duty Paid</label>
                                <input type="text" id="total_custom_duty_paid" name="total_custom_duty_paid" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="list_of_product_exported1">List of Product Exported 1</label>
                                <input type="text" id="list_of_product_exported1" name="list_of_product_exported1" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="list_of_product_exported2">List of Product Exported 2</label>
                                <input type="text" id="list_of_product_exported2" name="list_of_product_exported2" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="Per_share_Export_Buy">Per Share Export Buy</label>
                                <input type="text" id="per_share_export_buy" name="per_share_export_buy" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="Per_share_Export_OEM">Per Share Export OEM</label>
                                <input type="text" id="per_share_export_oem" name="per_share_export_oem" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="Per_share_Export_Tier1">Per Share Export Tier 1</label>
                                <input type="text" id="per_share_export_tier1" name="per_share_export_tier1" class="form-control" placeholder="" value="">
                              </div>
                              
                             
                              <div class="col-sm-4">
                                <label class="form-label" for="Per_share_Export_AFM">Per Share Export AFM</label>
                                <input type="text" id="per_share_export_afm" name="per_share_export_afm" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="Per_share_Domestic_OEM">Per Share Domestic OEM</label>
                                <input type="text" id="per_share_domestic_oem" name="per_share_domestic_oem" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="Per_share_Domestic_tier1">Per Share Domestic Tier 1</label>
                                <input type="text" id="per_share_domestic_tier1" name="per_share_domestic_tier1" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="Per_share_Domestic_AFM">Per Share Domestic AFM</label>
                                <input type="text" id="per_share_domestic_afm" name="per_share_domestic_afm" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="product_patent">Product Patent</label>
                                <input type="text" id="product_patent" name="product_patent" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="share_spent_on_RnD">Share Spent on R&D</label>
                                <input type="text" id="share_spent_on_rnd" name="share_spent_on_rnd" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="DSIR">DSIR</label>
                                <input type="text" id="dsir" name="dsir" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="Expen_R&D">Expenditure on R&D</label>
                                <input type="text" id="expen_rd" name="expen_rd" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="Employee_R&D">Employee R&D</label>
                                <input type="text" id="employee_rd" name="employee_rd" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="person_name">Person Name</label>
                                <input type="text" id="person_name" name="person_name" class="form-control" placeholder="" value="">
                              </div>

                              <div class="col-sm-4">
                                <label class="form-label" for="person_Designation">Person Designation</label>
                                <input type="text" id="person_designation" name="person_designation" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="person_Email">Person Email</label>
                                <input type="text" id="person_email" name="person_email" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="Advertisement">Advertisement</label>
                                <input type="text" id="advertisement" name="advertisement" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="Field1">Field1</label>
                                <input type="text" id="field1" name="field1" class="form-control" placeholder="" value="">
                              </div>
                              
                              <div class="col-sm-4">
                                <label class="form-label" for="Field2">Field2</label>
                                <input type="text" id="field2" name="field2" class="form-control" placeholder="" value="">
                              </div>








                              <div class="col-md-12">
                                <label class="form-label" for="net_duty_paid">Net Excise duty paid to govt. in 2018-19</label>
                                <input type="text" id="net_duty_paid" name="net_duty_paid" class="form-control" placeholder="Net Excise duty paid to govt. in 2018-19" value="{{ $company_key_personnels->managing_director }}">
                              </div>
                              <div class="col-md-12">
                                <label class="form-label" for="custom_duty">Total Custom Duty paid in 2018-19 </label>
                                <input type="text" id="custom_duty" name="custom_duty" class="form-control" placeholder="Total Custom Duty paid in 2018-19 " value="{{ $company_key_personnels->managing_director_email }}">
                              </div>
                          
                            
                              <!-- <div class="col-12 d-flex justify-content-between">
                                <button class="btn btn-primary btn-sm btn-prev">
                                  <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                  <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                </button>
                                <button class="btn btn-primary btn-sm btn-next">
                                  <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                  <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                                </button>
                              </div> -->
                            </div>
                          </div>
                        </div>
                    
                    
                      <div class="form-navigation mt-3">
                        <button type="button" class="btn btn-primary" id="prev">Previous</button>
                        <button type="button" class="btn btn-primary" id="next">Next</button>
                        <button type="submit" class="btn btn-primary" id="submit" style="display: none;">Submit</button>
                      </div>
                  </form>
                </div>
              </div>
              <div class="col-md-2">
                <img src="http://dummyimage.com/700x500/" alt="placeholder" class="img-fluid img-placeholder">
              </div>
          </div>
        
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
  <footer class="sec-space-ft">
    <div class="container-xxl">
      <div class="footer-sec">
        <div class="row">
          <div class="col-md-6">
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
        <div class="row">
          <div class="col-md-6">
            <p class="mb-2 mb-sm-0 text-white">© Copyright 2022 ACMA India, All Right Reserved.</p>
          </div>
    
          <div class="col-md-6 text-end">
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

          
            let formData = new FormData($('#Multi-Steps-form')[0]);
            formData.append('_token', "{{ csrf_token() }}");
            $.ajax({
                url: "{{ route('company.fillUpDetailsStore') }}",
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                  
                  toastr.success(response.message);

                  setTimeout(function() {
                      window.location.href = "{{ route('company.dashboard') }}";
                  }, 2000); 
                    
                },
                error: function (response) {
                 
                    toastr.danger(response.message);
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

