@extends('website.layouts.app')
@section('title','Dashboard')
@push('styles')
<link rel="stylesheet" href=" {{ asset('admin/') }}/assets/vendor/libs/select2/select2.css " />
  <!-- Add Slick Carousel CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add Slick Carousel theme CSS (optional) -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
@endpush
@section('content')
<!-- Content -->
<section class="sec-space">
   <div>
      <!--- Search Filter ---->
      <div class="card dashboard-header">
               <div class="card-body">
                  <div class="row">
                     <div class="col-md-6">
                        <div>
                           <h2 class="title mb-md-0 text-center text-md-start">Buyers Guide Database</h2>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="custom_search_filter text-center text-md-end">
                           <!-- <form action="/" method="GET">
                              <input type="text" data-bs-toggle="modal" data-bs-target="#static"  data-bs-target="#static" class="form-control"
                                 id="filter_category" name="filter_category" placeholder="Filter By Category" value="">
                              <div class="custom_search_filter_inputMask">
                                 <i class="bx bx-search"></i>
                              </div>
                           </form> -->
                           <button data-bs-toggle="modal" data-bs-target="#static"  data-bs-target="#static" class="btn btn-primary btn-sm"id="filter_category" name="filter_category">Filter<span class='bx bx-filter ms-2'></span></button>
                           
                           <!-- Modal -->
                           <div class="modal fade" id="static"  data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
                              <div class="modal-dialog modal-lg" role="document">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                       <div class="row">
                                          <div class="col-md-3">
                                             <ul class="nav nav-pills custom-tab  d-block mb-4">
                                                <li  class="filter-name nav-item mb-2" data-filter="name">
                                                   <a class="nav-link text-capitalize active" data-bs-toggle="pill" href="#company"> <i class='bx bx-building-house me-2' ></i> Company</a>
                                                </li>
                                               
                                                <li  class="filter-name mb-2" data-filter="region">
                                                   <a class="nav-link text-capitalize" data-bs-toggle="pill" href="#region"><i class='bx bx-globe me-2'></i> Region</a>
                                                </li>
                                                <li  class="filter-name mb-2" data-filter="product">
                                                   <a class="nav-link text-capitalize" data-bs-toggle="pill" href="#product"> <i class='bx bx-cart-alt me-2' ></i> Product</a>
                                                </li>
                                                <li class="filter-name mb-2" data-filter="trademark" >
                                                   <a class="nav-link text-capitalize" data-bs-toggle="pill" href="#trademark"><i class='bx bx-store-alt me-2' ></i> Trademark</a>
                                                </li>
                                                <li class="filter-name mb-2" data-filter="salesTurnover" >
                                                   <a class="nav-link text-capitalize" data-bs-toggle="pill" href="#salesTurnover"><i class='bx bx-money-withdraw me-2' ></i> Sales Turnover</a>
                                                </li>
                                                {{-- <li class="filter-name mb-2" data-filter="exportTurnover" >
                                                   <a class="nav-link text-capitalize" data-bs-toggle="pill" href="#exportTurnover">Export Turnover</a>
                                                </li> --}}

                                                <li  class="filter-name" data-filter="location">
                                                   <a class="nav-link text-capitalize" data-bs-toggle="pill" href="#location"><i class='bx bx-world me-2'></i> States & City</a>
                                                </li>

                                              
                                                {{-- <li class="filter-name mb-2" data-filter="OverseasAftermarket" >
                                                   <a class="nav-link" data-bs-toggle="pill" href="#OverseasAftermarket">Overseas Aftermarket</a>
                                                </li>
                                                <li class="filter-name mb-2" data-filter="ForeignCollaboration" >
                                                   <a class="nav-link" data-bs-toggle="pill" href="#ForeignCollaboration">Foreign Collaboration</a> 
                                                </li> --}}
                                                <!-- Add more options here -->
                                             </ul>
                                          </div>
                                          <div class="col-md-9">
                                            <form action="" class="advance-filter">
                                             <div class="tab-content">
                                                <div class="tab-pane container active" id="company">
                                                  <div class="tab-pane-header">
                                                     <h5 class=" mb-md-0 text-justify fw-semibold text-dark">Company Filter</h5>
                                                     <div class="custom_search_filter">
                                                       <input type="text"  id="searchCompanies" class="form-control" placeholder="Search companies...">
                                                       <div class="custom_search_filter_inputMask">
                                                        <i class="bx bx-search"></i>
                                                       </div>
                                                     </div>
                                                    
                                                  </div>
                                                  <div class="row scroll-content">
                                                     @foreach($companies_name as $company)
                                                         <div class="col-md-6">
                                                            <div class="mt-2">
                                                               @if(isset($company['name']) && !empty($company['name']))
                                                            <div class="form-check form-check-inline mb-2">
                                                               <input class="form-check-input company_checkbox_in_modal company_id_in_modal_{{$company['id']}}" data-id="{{ $company['id'] }}"  class="active-check" name="company_name[]" type="checkbox" id="{{ $company['name'] }}" value="{{ $company['name'] }}"  {{ in_array($company['name'], (array)request()->input('company_name')) ? 'checked' : '' }}>    
                                                               <label class="form-check-label company-item" data-name="{{ $company['name'] }}" for="">{{ $company['name'] }}</label>
                                                                  </div>
                                                               @endif
                                                            </div>
                                                         </div>
                                                       @endforeach
                                                  </div>
                                                     <div class="pagination-container">
                                                         <ul class="pagination alphabet-filter">
                                                            @for($i = 65; $i <= 90; $i++) {{-- ASCII values for A to Z --}}
                                                               <li class="page-item mb-1">
                                                                     <a class="page-link" href="javascript:void(0);" onclick="filterCompanies('{{ chr($i) }}')">{{ chr($i) }}</a>
                                                               </li>
                                                            @endfor
                                                         </ul>
                                                      </div>
                                                   
                                                </div>
                          
                                                
                                               
                          
                                             <div class="tab-pane container fade" id="region">
                                                   <div class="tab-pane-header">
                                                       <h5 class="mb-0 fw-semibold text-justify text-dark">Region Filter</h5>
                                                   </div>
                                                   <div class="row scroll-content">
                                                      @foreach ($regions as $region)
                                                      <div class="col-md-2">
                                                         <div class="mt-2">
                                                            @if(isset($region['region']) && !empty($region['region']))
                                                               <div class="form-check form-check-inline mb-2">
                                                                  <input class="form-check-input"  class="active-check" type="checkbox" name="regions[]" id="regions" value="{{ $region['region'] }}" {{ in_array($region['region'], (array)request()->input('regions')) ? 'checked' : '' }}>
                                                                  <label class="form-check-label" for="inlineCheckbox1">{{ $region['region'] }}</label>
                                                               </div>
                                                            @endif
                                                         </div>
                                                      </div>
                                                      @endforeach
                                                   </div>
                                                </div>
                                                <div class="tab-pane container fade" id="product">
                                                  <div class="tab-pane-header">
                                                    <h5 class="mb-md-0 text-justify fw-semibold  text-dark">Product Filter</h5>
                                                    <div class="custom_search_filter">
                                                       <input type="text" class="form-control" id="searchProducts" placeholder="Search products...">
                                                       <div class="custom_search_filter_inputMask">
                                                        <i class="bx bx-search"></i>
                                                       </div>
                                                    </div>
                                                  </div>
                                                   <!-- <div class="row mb-3">
                                                      <div class="col-md-6">
                                                          <input type="text" class="form-control" id="searchProducts" placeholder="Search products...">
                                                      </div>
                                                  </div> -->
                                                <div class="row scroll-content">
                                                  @foreach ($products as $product)
                                                      <div class="col-md-12 product-item">
                                                         <div class="mt-2">
                                                            @if(isset($product['products_manufactured']) && !empty($product['products_manufactured']))
                                                            <div class="form-check form-check-inline mb-2">
                                                               <input class="form-check-input" class="active-check" type="checkbox" name="products[]" id="products" value="{{ $product['products_manufactured'] }}" {{ in_array($product['products_manufactured'], (array)request()->input('products')) ? 'checked' : '' }}>
                                                               <label class="form-check-label" for="inlineCheckbox1">{{ $product['products_manufactured'] }}</label>
                                                            </div>
                                                            @endif
                                                         </div>
                                                      </div>
                                                   @endforeach
                                                </div>
                                                   <div class="pagination-container">
                                                      <ul class="pagination alphabet-filter">
                                                         @for($i = 65; $i <= 90; $i++) {{-- ASCII values for A to Z --}}
                                                            <li class="page-item mb-1">
                                                                  <a class="page-link" href="#" onclick="filterProducts('{{ chr($i) }}')">{{ chr($i) }}</a>
                                                            </li>
                                                         @endfor
                                                      </ul>
                                                   </div>
                                                </div>
                                                <div class="tab-pane container fade" id="trademark">
                                                   <div class="tab-pane-header">
                                                     <h5 class="mb-0 text-justify fw-semibold text-dark">Trademark Filter</h5>
                                                   </div>
                                                   <div class="row scroll-content">
                                                      @foreach ($trademarks as $trademark)
                                                         <div class="col-md-4">
                                                            <div class="mt-2">
                                                               @if(isset($trademark['trademark']) && !empty($trademark['trademark']))
                                                               <div class="form-check form-check-inline mb-2">
                                                                  <input class="form-check-input"  class="active-check" type="checkbox" name="trademarks[]" id="trademarks" value="{{$trademark['trademark']}}" {{ in_array($trademark['trademark'], (array)request()->input('trademarks')) ? 'checked' : '' }}>
                                                                  <label class="form-check-label" for="inlineCheckbox1">{{$trademark['trademark']}}</label>
                                                               </div>
                                                               @endif
                                                            </div>
                                                         </div>
                                                      @endforeach
                                                   </div>
                                                </div>
                                                <div class="tab-pane container fade" id="salesTurnover">
                                                  <div class="tab-pane-header">
                                                    <h5 class="mb-0 text-justify fw-semibold  text-dark">Sales Turnover Filter</h5>
                                                   </div>
                                                   <div class="row scroll-content mt-2">
                                                      <div class="col-md-4">
                                                         <div class="form-check form-check-inline form-check-flex">
                                                            <input class="form-check-input"  class="active-check" type="checkbox" name="range" value="0-5000" {{ request('range') == '0-5000' ? 'checked' : '' }}id="checkbox-one">
                                                            <label class="form-check-label" for="checkbox-one">
                                                               0 - 5000
                                                            </label>
                                                         </div>
                                                      </div>
                                                      <div class="col-md-4">
                                                         <div class="form-check form-check-inline form-check-flex">
                                                            <input class="form-check-input"  class="active-check" type="checkbox" name="range" value="5000-10000" {{ request('range') == '5000-10000' ? 'checked' : '' }}id="checkbox-one">
                                                            <label class="form-check-label" for="checkbox-one">
                                                               5000-10000
                                                            </label>
                                                         </div>
                                                      </div>
                                                      <div class="col-md-4">
                                                         <div class="form-check form-check-inline form-check-flex">
                                                               <input class="form-check-input"  class="active-check" type="checkbox" name="range" value="5000-15000" {{ request('range') == '5000-15000' ? 'checked' : '' }}id="checkbox-one">
                                                               <label class="form-check-label" for="checkbox-one">
                                                                  5000-15000
                                                               </label>
                                                            </div>
                                                      </div>
                                                   
                                                   </div>
                                                </div>
                                                {{-- <div class="tab-pane container fade" id="location">
                                                   <h6 class="mb-2 text-justify text-dark">State Filter</h6>
                                                   <div class="row scroll-content">
                                                    
                                                      @foreach ($states as $state)

                                                      <div class="col-md-4">
                                                         <div class="mt-2">
                                                            @if(isset($state['state']) && !empty($state['state']))
                                                            <div class="form-check form-check-inline mb-2">
                                                               <input class="form-check-input"  class="active-check" type="checkbox" name="location[]" id="locations" value="{{ $state['state'] }}" {{ in_array($state['state'], (array)request()->input('state')) ? 'checked' : '' }}>
                                                               <label class="form-check-label" for="inlineCheckbox1">{{ $state['state'] }}</label>
                                                            </div>
                                                            @endif
                                                         </div>
                                                      </div>
                                                      @endforeach
                                                   </div>         
                                                   
                                                   <hr>
                                                   <h6 class="mb-2 text-justify text-dark">City</h6>
                                                   <div class="row scroll-content">
                                                    
                                                      @foreach ($states as $state)

                                                      <div class="col-md-4">
                                                         <div class="mt-2">
                                                            @if(isset($state['state']) && !empty($state['state']))
                                                            <div class="form-check form-check-inline mb-2">
                                                               <input class="form-check-input"  class="active-check" type="checkbox" name="state[]" id="states" value="{{ $state['state'] }}" {{ in_array($state['state'], (array)request()->input('state')) ? 'checked' : '' }}>
                                                               <label class="form-check-label" for="inlineCheckbox1">{{ $state['state'] }}</label>
                                                            </div>
                                                            @endif
                                                         </div>
                                                      </div>
                                                      @endforeach
                                                   </div>        
                                                </div> --}}


                                                <div class="tab-pane container fade" id="location">
                                                   <div class="tab-pane-header">
                                                    <h5 class="mb-md-0 text-justify fw-semibold  text-dark">States & City</h5>
                                                    <div class="custom_search_filter">
                                                      <input type="text"  id="searchLocations" class="form-control" placeholder="Search States & City">
                                                      <div class="custom_search_filter_inputMask">
                                                        <i class="bx bx-search"></i>
                                                       </div>
                                                    </div>
                                                   </div>

                                                   <!-- Add a text box next to the heading -->
                                                   <!-- <div class="row mb-3">
                                                      <div class="col-md-6">
                                                         <input type="text"  id="searchLocations" class="form-control" placeholder="Search States & City">
                                                      </div>
                                                   </div> -->
                                                   <div class="row scroll-content">
                                                    
                                                      @foreach ($combinedLocations as $combinedLocation)
                                                         <div class="col-md-4 location-items">
                                                            <div class="mt-2">
                                                               @if(isset($combinedLocation) && !empty($combinedLocation))
                                                               <div class="form-check form-check-inline mb-2">
                                                                  <input class="form-check-input"  class="active-check" type="checkbox" name="location[]" id="locations" value="{{ $combinedLocation }}">
                                                                  <label class="form-check-label" for="inlineCheckbox1">{{ $combinedLocation }}</label>
                                                               </div>
                                                               @endif
                                                            </div>
                                                         </div>
                                                      @endforeach
                                                   </div>         

                                                   <div class="pagination-container">
                                                      <ul class="pagination alphabet-filter">
                                                          @for($i = 65; $i <= 90; $i++) {{-- ASCII values for A to Z --}}
                                                              <li class="page-item">
                                                                  <a class="page-link" href="javascript:void(0);" onclick="filterLocations('{{ chr($i) }}')">{{ chr($i) }}</a>
                                                              </li>
                                                          @endfor
                                                      </ul>
                                                  </div>
                                                   
                                                   
                                                  
                                                </div>
                                                

                                             </div>
                                                <div class="mt-3 text-end">
                                                      <button class="btn btn-success border-success">Apply</button>
                                                      <a href="{{ url()->current() }}" class="btn btn-danger border-danger">Reset</a>
                                                </div>
                                            </form>
                                          </div>
                                       </div>
                                       
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!--- Advance Filter Form---->
                           <!-- <div class="modal fade" id="advance-filter-modal" tabindex="-1" aria-hidden="true">
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
                              </div> -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                  <div class="checked_company_info mb-3"> 
                     <span class="total_companies badge bg-primary text-capitalize"></span>
                     <span class="checked_companies badge bg-secondary text-capitalize"></span>
                     <span class="clear_checked badge bg-danger text-capitalize pe-auto" onclick="clear_checked()">Clear</span>
                  </div>
               </div>
            </div>
            <!--- Company Card --->
            <div class="company-card">

               <div>
                  <form action="{{ route('dashboard.company.export') }}">                 
                  
                     <div class="row">
                     @foreach ($companies as $company)   
                           <div class="col-md-4 mb-3">
                                 <div class="card card-data">
                                    <div class="company-title">
                                    <h4 class="sub-title mb-0"> <a target="_blank" class="text-dark" href="{{ route('company.view_company',$company->id) }}"> {{ $company->name }}</a></h4>
                                       <span> <input type="checkbox" class="check company_checkbox" id="company_checkbox_{{$company->id}}" data-id="{{$company->id}}" name="company_ids[]" id="" value="{{ $company->id }}"> <i class='bx bx-check check-icon' ></i> </span>
                                    </div>
                                    <div class="card-body">
                                       <div class="information-list">
                                          <ul>
                                             <li>
                                                <div>
                                                   <i class="fa fa-map-marker" aria-hidden="true"></i><span>Address</span>
                                                </div>

                                                <div>
                                                   @if($company && $company->contact_details)
                                                      <span>{{ $company->contact_details->company_address }}</span>
                                                   @else
                                                   <span>NA</span>
                                                   @endif
                                                </div>
                                             </li>
                                             <li>
                                                <div>
                                                   <i class="fa fa-phone"></i><span>Phone</span>
                                                </div>
                                                <div>

                                                   @if($company && $company->contact_details)
                                                   
                                                         <span>{{$company->contact_details->phone}}</span>
                                                   @else 
                                                   <span>NA</span>
                                                   @endif
                                             
                                                </div>
                                             </li>
                                             <li>
                                                <div>
                                                   <i class="fa fa-fax"></i><span>Fax</span>
                                                </div>
                                                <div>
                                                
                                                   @if($company && $company->contact_details)
                                                      <span>{{$company->contact_details->fax}}</span> 
                                                      @else 
                                                      <span>NA</span>
                                                      @endif
                                             
                                                </div>
                                             </li>
                                             <li>
                                                <div>
                                                   <i class="fa fa-envelope"></i><span>E-mail</span>
                                                </div>
                                                <div>
                                                   
                                                   @if($company && $company->contact_details)
                                                   <a href="{{$company->email}}">{{$company->email}}</a>
                                                   @else 
                                                   <span>NA</span>
                                                   @endif
                                                
                                                </div>
                                             </li>
                                             <li>
                                                <div>
                                                   <i class="fa fa-globe"></i><span>Website</span>
                                                </div>
                                                <div>
                                                   @if($company && $company->website)
                                                   <a href="http://www.acma.in">{{$company->website}}</a>
                                                   @else 
                                                   <span>NA</span>
                                                @endif
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              
                           </div>
                        @endforeach

                     
                     {{ $companies->withQueryString()->links() }}
                     <input type="hidden" name="" id="total_companies" value="{{ $companies->total() }}">
                     <div class="row">
                        <div class="col-md-12 text-center">
                           <div class="border-bottom pb-4 mb-3"></div>
                          <div class="checked_company_info mb-3"> 
                              <span class="total_companies badge bg-primary text-capitalize"></span>

                              <span class="checked_companies badge bg-secondary text-capitalize"></span>
                              <span class="clear_checked badge bg-danger text-capitalize pe-auto" onclick="clear_checked()">Clear</span>
                           </div>
                           <button type="submit" class="btn btn-primary btn-lg" class="download-button">Download Data</button>
                          <p class="mb-0 pt-2 text-success">Download the data in csv format</p>
                           <!-- <div class="checked_company_info">
                              <span class="total_companies"></span>
                              <span class="checked_companies"></span>
                              <br>
                              <span class="clear_checked" onclick="clear_checked()">Clear</span>
                           </div> -->
                        </div>
                     </div>
                  </form>
               </div>
            </div>
   </div>
</section>
@endsection
@push('scripts')


<script src="{{ asset('admin/') }}/assets/vendor/libs/select2/select2.js"></script>
<script src="{{ asset('admin/') }}/assets/vendor/libs/bootstrap-select/bootstrap-select.js"></script>
<script src="{{ asset('website/') }}/checkbox-recheck.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>

$(document).ready(function () {


   $(".filter-name").click(function (e) {
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
      $(".advance-filter-input").attr('placeholder', 'Search By ' + filter_name);
   });

   $(".check").click(function () {
      // Find the closest ancestor with the class 'card' and toggle the class 'card-border'
      $(this).closest('.card').toggleClass('card-border');
   });
});


   var companyItems = '';
   document.addEventListener("DOMContentLoaded", function () {
      var checkboxes = document.querySelectorAll('.form-check-inline input[type="checkbox"]');
      var tabs = document.querySelectorAll('.nav-pills .nav-link');
      companyItems = document.querySelectorAll('.company-item');

      checkboxes.forEach(function (checkbox, index) {
         checkbox.addEventListener('change', function () {
            updateTabs();
         });
   });

   function updateTabs() {
      tabs.forEach(function (tab, tabIndex) {
         var tabCheckboxes = document.querySelectorAll(tab.getAttribute('href') + ' input[type="checkbox"]');
         var anyChecked = Array.from(tabCheckboxes).some(function (cb) {
               return cb.checked;
         });

         if (anyChecked) {
               tab.classList.add('tab-active');
         } else {
               tab.classList.remove('tab-active');
         }
      });
   }

   tabs.forEach(function (tab) {
      tab.addEventListener('shown.bs.tab', function () {
         updateTabs();
      });
   });
   updateTabs();
   });


   function filterCompanies(letter) {
   companyItems.forEach(function (item) {
      var companyName = item.dataset.name;

      if (letter === 'all' || companyName.charAt(0).toUpperCase() === letter) {
         $(item).parent().parent().css('display', 'block');
      } else {
         $(item).parent().parent().css('display', 'none');
      }
   });
   }

   document.getElementById('searchCompanies').addEventListener('input', function () {
   filterCompanies('all');
   var searchTerm = this.value.toLowerCase();
      companyItems.forEach(function (item) {
         var companyName = item.dataset.name;
         companyName = companyName.toLowerCase();

         if (companyName.includes(searchTerm)) {
            $(item).parent().parent().css('display', 'block');
         } else {
            $(item).parent().parent().css('display', 'none');
         }
      });
   });

   function filterProducts(letter) {
   // Get all product items
      var productItems = document.querySelectorAll('.product-item');
      // Iterate through each product item and show/hide based on the selected letter
      productItems.forEach(function (item) {
         var labelElement = item.querySelector('.form-check-label');

         // Check if label element exists
         if (labelElement) {
            var productName = labelElement.innerText;

            if (letter === 'all' || productName.charAt(0).toUpperCase() === letter) {
                  item.style.display = 'block';
            } else {
                  item.style.display = 'none';
            }
         }
      });
   }


   // // Add event listener to the search input
   document.getElementById('searchProducts').addEventListener('input', function () {
      filterProducts('all'); // Show all items
      var searchTerm = this.value.toLowerCase();

      // Get all product items
      var productItems = document.querySelectorAll('.product-item');

      // Iterate through each product item and show/hide based on the search term
      productItems.forEach(function (item) {
         var labelElement = item.querySelector('.form-check-label');

         // Check if label element exists
         if (labelElement) {
            var productName = labelElement.innerText.toLowerCase();
            if (productName.includes(searchTerm)) {
                  item.style.display = 'block';
            } else {
                  item.style.display = 'none';
            }
         }
      });
   });


   function filterLocations(letter) {
      // Get all product items
      var states_city = document.querySelectorAll('.location-items');
      // Iterate through each product item and show/hide based on the selected letter
      states_city.forEach(function (item) {
         var labelElement = item.querySelector('.form-check-label');

         // Check if label element exists
         if (labelElement) {
            var states_city = labelElement.innerText;

            if (letter === 'all' || states_city.charAt(0).toUpperCase() === letter) {
                  item.style.display = 'block';
            } else {
                  item.style.display = 'none';
            }
         }
      });
   }

   // Add event listener to the search input
   document.getElementById('searchLocations').addEventListener('input', function () {
      filterLocations('all'); // Show all items
      var searchTerm = this.value.toLowerCase();

      // Get all product items
      var location_items = document.querySelectorAll('.location-items');

      // Iterate through each product item and show/hide based on the search term
      location_items.forEach(function (item) {
         var labelElement = item.querySelector('.form-check-label');

         // Check if label element exists
         if (labelElement) {
            var location_items = labelElement.innerText.toLowerCase();
            if (location_items.includes(searchTerm)) {
                  item.style.display = 'block';
            } else {
                  item.style.display = 'none';
            }
         }
      });
   });

   $(document).ready(function () {
      $('.tab-content .pagination .page-link').click(function () {
         $('.page-link').removeClass('active');
         $(this).toggleClass('active');
      });
   });
</script>
@endpush