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
                    <form action="data.php" id="Multi-Steps-form" method="post" class="multi-steps-form">
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
                                <label class="form-label" for="r_d_in_charge">Rd incharge</label>
                                <input type="text" id="r_d_in_charge" name="r_d_in_charge" class="form-control" placeholder="John" value="{{ $company_key_personnels->r_d_in_charge }}">
                              </div>
                              <div class="col-sm-4">
                                <label class="form-label" for="r_d_in_charge_email">Rd incharge Email</label>
                                <input type="text" id="r_d_in_charge_email" name="r_d_in_charge_email" class="form-control" placeholder="enter email" value="{{ $company_key_personnels->r_d_in_charge_email }}">
                              </div>
                              <div class="col-sm-4">
                                <label class="form-label" for="r_d_in_charge_contact">Rd incharge Contact</label>
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
                                <div class="col-sm-6">
                                <label class="form-label" for="year_of_commencing_production">Year of Commencing Production</label>
                                <input type="text" id="year_of_commencing_production" name="year_of_commencing_production" class="form-control" placeholder="Year of commencing production" value="{{ $company_contact_details->company_name }}">
                                </div>

                                <div class="col-sm-6">
                                <label class="form-label" for="iec_code">IEC Code</label>
                                <textarea id="iec_code" name="iec_code" class="form-control" placeholder="ICE Code" rows="1" >{{ $company_contact_details->company_address }}</textarea>
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

                        <div class="form-step">
                          <div id="contact_details_of_key_personnel" class="form-card content">
                            <div class="row g-3">
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
                        <button type="button" class="btn btn-primary ms-auto" id="next">Next</button>
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

