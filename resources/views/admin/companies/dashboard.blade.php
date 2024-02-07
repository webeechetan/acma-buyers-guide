@extends('website.layouts.app')
@section('title','Dashboard')
@push('styles')
<link rel="stylesheet" href=" {{ asset('admin/') }}/assets/vendor/libs/select2/select2.css " />
  <!-- Add Slick Carousel CSS -->
{{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> --}}
    <!-- Add Slick Carousel theme CSS (optional) -->
{{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/> --}}
@endpush
@section('content')
<!-- Content -->

<section class="sec-space pb-0">
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
                           <button data-bs-toggle="modal" data-bs-target="#static"  data-bs-target="#static" class="btn btn-primary"id="filter_category" name="filter_category">Filter by Category<span class='bx bx-filter ms-2'></span></button>           
                           <!-- Modal -->
                           <div class="modal fade" id="static"  data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
                              <div class="modal-dialog modal-lg" role="document">
                                 <div class="modal-content">
                                    <div class="modal-header p-0">
                                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                       <div class="row">
                                          <div class="col-md-4 border-end">
                                             <ul class="nav nav-pills custom-tab  d-block mb-4">
                                                <li  class="filter-name nav-item mb-2" data-filter="name">
                                                   <a class="nav-link text-capitalize active" data-bs-toggle="pill" href="#company"><i class='bx bx-building-house me-2'></i>                                                                               
                                                      <div class="filter-tab"><span>Company </span>  <span id="companyBadge" class="badge bg-primary rounded-circle badge-count">
                                                         @php echo isset($_GET['company_name']) ? count($_GET['company_name']) : 0; 
                                                         @endphp 
                                                         </span>
                                                      </div> 
                                                   </a>
                                                </li>
                                               
                                                <li  class="filter-name mb-2" data-filter="region">
                                                   <a class="nav-link text-capitalize" data-bs-toggle="pill" href="#region"><i class='bx bx-globe me-2'></i><div class="filter-tab"><span>Region</span>  <span id="regionBadge" class="badge bg-primary rounded-circle badge-count">
                                                   
                                                      @php echo isset($_GET['regions']) ? count($_GET['regions']) : 0; 
                                                         @endphp 
                                                   </span></div></a>
                                                </li>
                                                <li  class="filter-name mb-2" data-filter="product">
                                                   <a class="nav-link text-capitalize" data-bs-toggle="pill" href="#product"> <i class='bx bx-cart-alt me-2' ></i><div class="filter-tab"><span>Products</span>  <span id="productBadge" class="badge bg-primary rounded-circle badge-count">
                                                      @php echo isset($_GET['products']) ? count($_GET['products']) : 0; 
                                                      @endphp 
                                                   </span></div></a>
                                                </li>
                                                <li class="filter-name mb-2" data-filter="trademark" >
                                                   <a class="nav-link text-capitalize" data-bs-toggle="pill" href="#trademark"><i class='bx bx-store-alt me-2' ></i><div class="filter-tab"><span>Trademark</span>  <span id="trademarkBadge" class="badge bg-primary rounded-circle badge-count">
                                                      @php echo isset($_GET['trademarks']) ? count($_GET['trademarks']) : 0; 
                                                      @endphp 
                                                      </span></div></a>
                                                </li>
                                              

                                                <li class="filter-name mb-2" data-filter="salesTurnover">
                                                   <a class="nav-link text-capitalize" data-bs-toggle="pill" href="#salesTurnover">
                                                       <i class='bx bx-money-withdraw me-2'></i>
                                                       <div class="filter-tab">
                                                           <span>Sales Turnover</span>
                                                           <span id="saleBadge" class="badge bg-primary rounded-circle badge-count">
                                                               @php
                                                                   $range = request('range', []);
                                                                   echo is_array($range) ? count($range) : 0;
                                                               @endphp
                                                           </span>
                                                       </div>
                                                   </a>
                                               </li>

                                                <li class="filter-name mb-2" data-filter="exportTurnover" >
                                                   <a class="nav-link text-capitalize" data-bs-toggle="pill" href="#exportTurnover">
                                                      <i class='bx bx-money-withdraw me-2' ></i>
                                                      <div class="filter-tab">
                                                         <span>Export Turnover</span> 
                                                         <span id="exportBadge" class="badge bg-primary rounded-circle badge-count">
                                                            @php
                                                            $range = request('ranges', []);
                                                            echo is_array($range) ? count($range) : 0;
                                                        @endphp
                                                         </span>
                                                      </div>
                                                   </a>
                                                </li>

                                                <li  class="filter-name mb-2" data-filter="">
                                                   <a class="nav-link text-capitalize" data-bs-toggle="pill" href="#no_of_employees">
                                                      <i class='bx bx-user-plus me-2'></i>
                                                      <div class="filter-tab">
                                                         <span>No of Emp</span> 
                                                         <span id="noofempBadge" class="badge bg-primary rounded-circle badge-count">
                                                            @php
                                                            $noof_emp = request('no_ofEmp', []);
                                                            echo is_array($noof_emp) ? count($noof_emp) : 0;
                                                        @endphp
                                                         </span>
                                                      </div>
                                                   </a>
                                                </li>

                                                <li  class="filter-name" data-filter="location">
                                                   <a class="nav-link text-capitalize" data-bs-toggle="pill" href="#location"><i class='bx bx-globe me-2'></i><div class="filter-tab"><span>State & City</span>  <span id="cityBadge" class="badge bg-primary rounded-circle badge-count">
                                                   
                                                      @php echo isset($_GET['location']) ? count($_GET['location']) : 0; 
                                                      @endphp 
                                                   </span></div></a>
                                                </li>
                                                <li  class="filter-name" data-filter="quality">
                                                   <a class="nav-link text-capitalize" data-bs-toggle="pill" href="#quality">
                                                      <i class='bx bx-equalizer me-2'></i>
                                                      <div class="filter-tab">
                                                         <span>QS Standard</span>
                                                         <span id="qualityBadge" class="badge bg-primary rounded-circle badge-count">
                                                            @php
                                                            echo isset($_GET['quality']) ? count($_GET['quality']) : 0; 
                                                            @endphp
                                                         </span>
                                                      </div>
                                                   </a>
                                                </li>
                                             </ul>
                                          </div>
                                          <div class="col-md-8">
                                            <form action="" class="advance-filter">
                                             <div class="tab-content">
                                                <div class="tab-pane active" id="company">
                                                  <div class="tab-pane-header">
                                                     <h5 class=" mb-lg-0 mb-2 text-justify fw-semibold text-dark">Company Filter</h5>
                                                     <div class="custom_search_filter">
                                                       <input type="text"  id="searchCompanies" class="form-control" placeholder="Type 2 characters to search...">
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
                                                      <div class="col-md-12">
                                                      <div class="mt-2">
                                                         <div class="no-results-found text-danger text-center">No Results found</div>
                                                      </div>
                                                   </div>   
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
                                                <div class="tab-pane fade" id="region">
                                                   <div class="tab-pane-header-new">
                                                         <h5 class="mb-0 fw-semibold text-justify text-dark">Region Filter</h5>
                                                   </div>
                                                <div class="row">
                                                   @foreach ($regions as $region)
                                                   <div class="col-md-3 col-sm-3 col-3">
                                                      <div class="mt-2">
                                                         @if(isset($region['region']) && $region['region'] !== null && $region['region'] !== '')
                                                            <div class="form-check form-check-inline mb-2">
                                                               <input class="form-check-input active-check" type="checkbox" name="regions[]" id="regions" value="{{ $region['region'] }}" {{ in_array($region['region'], (array)request()->input('regions')) ? 'checked' : '' }}>           
                                                               {{-- Map region code to label --}}
                                                               @php
                                                                     $regionLabels = [
                                                                        'E' => 'East',
                                                                        'W' => 'West',
                                                                        'N' => 'North',
                                                                        'S' => 'South',
                                                                     ];

                                                                     $labelText = $regionLabels[$region['region']] ?? $region['region'];
                                                               @endphp
                                                               <label class="form-check-label" for="inlineCheckbox1">{{ $labelText }}</label>
                                                            </div>
                                                         @endif
                                                      </div>
                                                   </div>
                                                   @endforeach
                                                </div>
                                                </div>
                                                <div class="tab-pane fade" id="product">
                                                   <div class="tab-pane-header">
                                                      <h5 class="mb-lg-0 mb-2 text-justify fw-semibold  text-dark">Product Filter</h5>
                                                      <div class="custom_search_filter">
                                                         <input type="text" class="form-control" id="searchProducts" placeholder="Search products...">
                                                         <div class="custom_search_filter_inputMask">
                                                         <i class="bx bx-search"></i>
                                                         </div>
                                                      </div>
                                                   </div>
                                                <div class="row scroll-content">
                                                        
                                                      @foreach ($combinedProducts as $productDetail)                                                   
                                                         @php

                                                            $productNames = array_filter([
                                                               $productDetail->products_manufactured,
                                                               $productDetail->product2,
                                                               $productDetail->product3,
                                                               $productDetail->product4,
                                                            ]);
                                                         @endphp
                                                   
                                                         @if (!empty($productNames))
                                                            <div class="col-md-12">
                                                               <div class="mt-2">
                                                                     <div class="form-check form-check-inline mb-2">
                                                                        <input class="form-check-input active-check" type="checkbox" name="products[]" id="" value="{{ $productDetail->id }}" {{ in_array($productDetail->id, (array)request()->input('products',[])) ? 'checked' : '' }}>
                                                                        <label class="form-check-label product-item" data-name="{{ implode(', ', $productNames) }}" for="">
                                                                           {{ implode(', ', $productNames) }}
                                                                        </label>
                                                                     </div>
                                                               </div>
                                                            </div>
                                                         @endif
                                                      @endforeach
                                                
                                                   
                                                   <div class="col-md-12">
                                                      <div class="mt-2">
                                                         <div class="no-results-found text-danger">No Results found</div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="pagination-container">
                                                   <ul class="pagination alphabet-filter">
                                                      @for($i = 65; $i <= 90; $i++) {{-- ASCII values for A to Z --}}
                                                         <li class="page-item mb-1">
                                                               <a class="page-link" href="javascript:void(0);" onclick="filterProducts('{{ chr($i) }}')">{{ chr($i) }}</a>
                                                         </li>
                                                      @endfor
                                                   </ul>
                                                </div>
                                                </div>
                                                <div class="tab-pane fade" id="trademark">
                                                   <div class="tab-pane-header-new">
                                                      <h5 class="mb-0 text-justify fw-semibold text-dark">Trademark Filter</h5>
                                                   </div>
                                                   <div class="row scroll-content">
                                                      @foreach ($trademarks as $trademark)
                                                         <div class="col-md-4">
                                                            <div class="mt-2">
                                                               @if(isset($trademark['trademark']) && !empty($trademark['trademark']))
                                                               <div class="form-check form-check-inline mb-2">
                                                                  <input class="form-check-input active-check"  type="checkbox" name="trademarks[]" id="trademarks" value="{{$trademark['trademark']}}" {{ in_array($trademark['trademark'], (array)request()->input('trademarks')) ? 'checked' : '' }}>
                                                                  <label class="form-check-label" for="inlineCheckbox1">{{$trademark['trademark']}}</label>
                                                               </div>
                                                               @endif
                                                            </div>
                                                         </div>
                                                      @endforeach
                                                   </div>
                                                </div>

                                                <div class="tab-pane fade" id="salesTurnover">
                                                   <div class="tab-pane-header-new">
                                                      <h5 class="mb-0 text-justify fw-semibold  text-dark">Sales Turnover Filter(In Lakh)</h5>
                                                   </div>
                                                   <div class="row mt-2">
                                                      <div class="col-md-4 col-sm-6 col-6">
                                                         <div class="form-check form-check-inline form-check-flex">
                                                            <input class="form-check-input active-check" type="checkbox" name="range[]" value="0-5000" {{ in_array('0-5000', request('range', [])) ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="checkbox-one">
                                                               0 - 5000
                                                            </label>
                                                         </div>
                                                      </div>
                                                      <div class="col-md-4 col-sm-6 col-6">
                                                         <div class="form-check form-check-inline form-check-flex">
                                                            <input class="form-check-input active-check" type="checkbox" name="range[]" value="5001-10000"{{ in_array('5001-10000', request('range', [])) ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="checkbox-one">
                                                               5001-10000
                                                            </label>
                                                         </div>
                                                      </div>
                                                      <div class="col-md-4 col-sm-6 col-6">
                                                         <div class="form-check form-check-inline form-check-flex">
                                                               <input class="form-check-input active-check" type="checkbox" name="range[]" value="10001-50000" {{ in_array('10001-50000', request('range', [])) ? 'checked' : '' }}>
                                                               <label class="form-check-label" for="checkbox-one">
                                                                  10001-50000
                                                               </label>
                                                            </div>
                                                      </div>                                                  
                                                   </div>
                                                  
                                                </div>


                                                <div class="tab-pane fade" id="exportTurnover">
                                                   <div class="tab-pane-header-new">
                                                      <h5 class="mb-0 text-start fw-semibold  text-dark">Export Turnover Filter(In Lakh)</h5>
                                                   </div>

                                                   <div class="row mt-2">
                                                      <div class="col-md-4 col-sm-6 col-6">
                                                         <div class="form-check form-check-inline form-check-flex">
                                                            <input class="form-check-input active-check"  type="checkbox" name="ranges[]" value="0-5000" {{ in_array('0-5000', request('ranges', [])) ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="checkbox-one">
                                                               0 - 5000
                                                            </label>
                                                         </div>
                                                      </div>
                                                      <div class="col-md-4 col-sm-6 col-6">
                                                         <div class="form-check form-check-inline form-check-flex">
                                                            <input class="form-check-input active-check" type="checkbox" name="ranges[]" value="5001-10000" {{ in_array('5001-10000', request('ranges', [])) ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="checkbox-one">
                                                               5001-10000
                                                            </label>
                                                         </div>
                                                      </div>
                                                      <div class="col-md-4 col-sm-6 col-6">
                                                         <div class="form-check form-check-inline form-check-flex">
                                                               <input class="form-check-input active-check" type="checkbox" name="ranges[]" value="10001-50000" {{ in_array('10001-50000', request('ranges', [])) ? 'checked' : '' }}>
                                                               <label class="form-check-label" for="checkbox-one">
                                                                  10001-50000
                                                               </label>
                                                            </div>
                                                      </div>                                   
                                                   </div>

                                                   {{-- /////// --}}



                                                </div>
                                         
                                                <div class="tab-pane fade" id="location">
                                                   <div class="tab-pane-header">
                                                      <h5 class="mb-lg-0 mb-2 text-justify fw-semibold  text-dark">States & City</h5>
                                                      <div class="custom_search_filter">
                                                      <input type="text"  id="searchLocations" class="form-control" placeholder="Search States & City">
                                                      <div class="custom_search_filter_inputMask">
                                                         <i class="bx bx-search"></i>
                                                         </div>
                                                      </div>
                                                   </div>

                                                   <div class="row scroll-content">                                                   
                                                      @foreach ($combinedLocations as $combinedLocation)
                                                         <div class="col-md-4">
                                                            <div class="mt-2">
                                                                  @if(isset($combinedLocation) && !empty($combinedLocation))
                                                                     <div class="form-check form-check-inline mb-2">
                                                                        <input class="form-check-input active-check" type="checkbox" name="location[]" id="locations_{{ $combinedLocation }}" value="{{ $combinedLocation }}" {{ in_array($combinedLocation, (array)request()->input('location', [])) ? 'checked' : '' }}>
                                                                        <label class="form-check-label location-items" data-name="{{ $combinedLocation }}" for="locations_{{ $combinedLocation }}">{{ $combinedLocation }}</label>
                                                                     </div>
                                                                  @endif
                                                            </div>
                                                         </div>
                                                      @endforeach

                                                      <div class="col-md-12">
                                                         <div class="mt-2">
                                                            <div class="no-results-found text-danger">No Results found</div>
                                                         </div>
                                                      </div>
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

                                                <div class="tab-pane fade" id="no_of_employees">
                                                   <div class="tab-pane-header-new">
                                                      <h5 class="mb-0 text-justify fw-semibold text-dark">No of Employees</h5>
                                                   </div>
                                                   <div class="row mt-2">
                                                      <div class="col-md-4 col-6 mb-2">
                                                         <div class="form-check form-check-inline form-check-flex">
                                                            <input class="form-check-input active-check" type="checkbox" name="no_ofEmp[]" value="0-100" {{ in_array('0-100', request('no_ofEmp', [])) ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="checkbox-one">
                                                               0 - 100
                                                            </label>
                                                         </div>
                                                      </div>
                                                      <div class="col-md-4 col-6 mb-2">
                                                         <div class="form-check form-check-inline form-check-flex">
                                                            <input class="form-check-input active-check" type="checkbox" name="no_ofEmp[]" value="101-200" {{ in_array('101-200', request('no_ofEmp', [])) ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="checkbox-one">
                                                               101-200
                                                            </label>
                                                         </div>
                                                      </div>
                                                      <div class="col-md-4 col-6 mb-2">
                                                         <div class="form-check form-check-inline form-check-flex">
                                                               <input class="form-check-input active-check"  type="checkbox" name="no_ofEmp[]" value="201-500" {{ in_array('201-500', request('no_ofEmp', [])) ? 'checked' : '' }}>
                                                               <label class="form-check-label" for="checkbox-one">
                                                                  201-500
                                                               </label>
                                                            </div>
                                                      </div>
                                                      <div class="col-md-4 col-6 mb-2">
                                                         <div class="form-check form-check-inline form-check-flex">
                                                               <input class="form-check-input active-check"  type="checkbox" name="no_ofEmp[]" value="501-12000" {{ in_array('501-12000', request('no_ofEmp', [])) ? 'checked' : '' }}>
                                                               <label class="form-check-label" for="checkbox-one">
                                                                  501-12000
                                                               </label>
                                                            </div>
                                                      </div>
                                                   </div>
                                                </div>

                                                {{-- //quality standard --}} 

                                                <div class="tab-pane fade" id="quality">
                                                   <div class="tab-pane-header">
                                                       <h5 class="mb-0 text-justify fw-semibold  text-dark">Quality System Standard</h5>
                                                   </div>
                                                   <div class="row mt-2">
                                                      <div class="col-md-4 col-6 mb-2">
                                                         <div class="form-check form-check-inline form-check-flex">
                                                            <input class="form-check-input" type="checkbox" name="quality[]" value="bismark" {{ in_array('bismark', request('quality', [])) ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="checkbox-one">
                                                               Bismark
                                                            </label>
                                                         </div>
                                                      </div>
                                                      <div class="col-md-4 col-6 mb-2">
                                                         <div class="form-check form-check-inline form-check-flex">
                                                            <input class="form-check-input" type="checkbox" name="quality[]" value="emark" {{ in_array('emark', request('quality', [])) ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="checkbox-one">
                                                               Emark
                                                            </label>
                                                         </div>
                                                      </div>
                                                      <div class="col-md-4 col-6 mb-2">
                                                         <div class="form-check form-check-inline form-check-flex">
                                                            <input class="form-check-input" type="checkbox" name="quality[]" value="japan_quality_medal" {{ in_array('japan_quality_medal', request('quality', [])) ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="checkbox-one">
                                                               Japan Quality Metal
                                                            </label>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                              {{-- /////quality standard --}}
                                             </div>
                                                <div class="mt-3 d-flex align-items-center justify-content-between">
                                                      <a href="{{ url()->current() }}" id="resetButton" class="btn btn-danger border-danger btn-sm btn_reset">Reset</a>
                                                      <button class="btn btn-success btn-sm">Apply</button>
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
            </div>
            <div class="row">
              <div class="col-md-12">
                  <div class="checked_company_info mb-3"> 
                     <span class="total_companies badge bg-dark text-capitalize"></span>
                     <span class="checked_companies badge bg-primary text-capitalize"></span>

                     @if(!empty(request()->query()))
                        <a href="{{ url()->current() }}" class="badge bg-info text-capitalize p-3 view-all-button">View All</a>
                     @endif

                     {{-- <a href="{{ url()->current() }}"  class="badge bg-info text-capitalize p-3 view-all-button">View All</a>     --}}
                     <span class="clear_checked badge bg-danger text-capitalize pe-auto" onclick="clear_checked()">Clear <i class="fa fa-times text-white" aria-hidden="true"></i></span>
                     
                  </div>
               </div>
            </div>
               <!-- Your modified HTML code with a styled button -->
               

            

            <div class="d-flex gap-2 mb-4">
               <button type="button" class="btn btn-primary toggle_allcheckbox" data-check="true">Check All</button>
               <a href="{{ route('dashboard.company.exportAll') }}" class="btn btn-danger">Download All Data</a>
              
            </div>

            <!--- Company Card --->
            <div class="company-card">
               <div>
                  <form action="{{ route('dashboard.company.export') }}" class="export-data-form">     
                       <div class="row">
                          <span class="appended_checkboxes_for_download" style="display: none"></span>
                              @forelse($companies as $company)

                                 <div class="col-md-6 col-lg-4 mb-3">
                                       <div class="card card-data">
                                          <div class="company-title">
                                          <h4 class="sub-title mb-0"> <a target="_blank" class="text-dark" href="{{ route('company.view_company',$company->id) }}"> {{ $company->name }}</a></h4>
                                             <span> <input type="checkbox" class="check company_checkbox" id="company_checkbox_{{$company->id}}" data-id="{{$company->id}}" name="company_ids[]" value="{{ $company->id }}"  data-bs-custom-class="tooltip-primary" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="Select"> <i class='bx bx-check check-icon' ></i> </span>
                                          </div>
                                          <div class="card-body">
                                             <div class="information-list">
                                                <ul>
                                                   <li>
                                                      <div>
                                                         <i class="fa fa-map-marker" aria-hidden="true"></i><span>State</span>
                                                      </div>
                                                      <div>
                                                         @if($company && $company->contact_details->state)
                                                            <span>{{ucfirst($company->contact_details->state)}}</span>
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

                                                         @if($company && $company->contact_details->phone)
                                                         
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
                                                      
                                                         @if($company && $company->contact_details->fax)
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
                                                         
                                                         @if($company && $company->email)
                                                         <a href="">{{ucfirst($company->email)}}</a>
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
                                                         <a href="">{{$company->website}}</a>
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
                              @empty
                              <h2 class="text-center text-danger">No Result</h2>
                              @endforelse

                           
                           {{ $companies->onEachSide(1)->withQueryString()->links() }}
                           <input type="hidden" name="" id="total_companies" value="{{ $companies->total() }}">
                       </div>
                       <div class="row">
                        <div class="col-md-12 text-center">
                           <div class="border-bottom pb-4 mb-3"></div>
                           <div class="checked_company_info mb-3">
                              <span class="total_companies badge bg-dark text-capitalize"></span>
                              <span class="checked_companies badge bg-primary text-capitalize"></span>

                              @if(!empty(request()->query()))
                                 <a href="{{ url()->current() }}" class="badge bg-info text-capitalize p-3 view-all-button">View All</a>
                              @endif
                              {{-- <a href="{{ url()->current() }}" class="badge bg-info text-capitalize p-3 view-all-button">View All</a> --}}
                              <span class="clear_checked badge bg-danger text-capitalize pe-auto" onclick="clear_checked()">Clear <i
                                    class="fa fa-times text-white" aria-hidden="true"></i></span>                                     
                           </div>
                           <div class="checked_company_download">
                              <button type="submit" class="btn btn-primary">Download Data <i
                                    class='bx bx-download ms-2 text-white fw-medium'></i></button>
                              <p class="mb-0 pt-2 text-dark fw-medium">Download the data in PDF format</p>
                           </div>
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

   // hanlde download form submit 

   $(".export-data-form").submit(function (e) {
      e.preventDefault();
      var checked_companies_on_other_pages = localStorage.getItem('checked_companies');
      checked_companies_on_other_pages = JSON.parse(checked_companies_on_other_pages);
      checked_companies_on_other_pages.forEach(function (company_id) {
         $(".appended_checkboxes_for_download").append('<input type="checkbox" name="company_ids[]" value="' + company_id + '" checked>');
      });
      $(this).unbind('submit').submit();
   });


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
   var productItems = '';
   var states_city = '';
   document.addEventListener("DOMContentLoaded", function () {
      var checkboxes = document.querySelectorAll('.form-check-inline input[type="checkbox"]');
      var tabs = document.querySelectorAll('.nav-pills .nav-link');
      companyItems = document.querySelectorAll('.company-item');
      productItems = document.querySelectorAll('.product-item');
      states_city  = document.querySelectorAll('.location-items');

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
        
         $(item).parent().parent().parent().css('display', 'block');
      } else {
         $(item).parent().parent().parent().css('display', 'none');
      }
   });
   }

   document.getElementById('searchCompanies').addEventListener('input', function () {
   filterCompanies('all');
   var searchTerm = this.value.toLowerCase();
      if(searchTerm.length  <= 1){
         $(".highlighted_text").removeClass('text-warning');
      }
      if(searchTerm.length < 2){
         return false;
      }
   
   var no_results_found = false;
      companyItems.forEach(function (item) {
         var companyName = item.dataset.name;
         companyName = companyName.toLowerCase();

         if (companyName.includes(searchTerm)) {
            no_results_found = true;
            $(item).parent().parent().parent().css('display', 'block');
            // highlight search term
            var regex = new RegExp(searchTerm, 'gi');
            var highlighted = companyName.replace(regex, function (str) {
               return '<span class="text-warning highlighted_text">' + str + '</span>';
            });
            item.innerHTML = highlighted;
         } else {
            $(item).parent().parent().parent().css('display', 'none');
         }
      });

      if (no_results_found) {
         $('.no-results-found').css('display', 'none');
      } else {
         $('.no-results-found').css('display', 'block');
      }

   });

   function filterProducts(letter) {

      productItems.forEach(function (item) {

         var productName = item.dataset.name;

         console.log(productName);

         if (letter === 'all' || productName.charAt(0).toUpperCase() === letter) {
            $(item).parent().parent().parent().css('display', 'block');
            } else {
               $(item).parent().parent().parent().css('display', 'none');
            }
      });

   }

   // // Add event listener to the search input
   document.getElementById('searchProducts').addEventListener('input', function () {
      filterProducts('all'); // Show all items
      var searchTerm = this.value.toLowerCase();

      if(searchTerm.length  <= 1){
      $(".highlighted_text").removeClass('text-warning');
   }

   if(searchTerm.length < 2){
      return false;
   }


   var no_results_found = false;
   productItems.forEach(function(item) {
      var productName = item.dataset.name;
       productName = productName.toLowerCase();

      if (productName.includes(searchTerm)) {
         no_results_found = true;
         $(item).parent().parent().parent().css('display', 'block');
         var regex = new RegExp(searchTerm, 'gi');
         var highlighted = productName.replace(regex, function (str) {

            console.log(productName);
            return '<span class = "text-warning highligted_text">' + str + '</span>';
         });
         item.innerHTML = highlighted; 
         // console.log(highlighted);
      }else {
         $(item).parent().parent().parent().css('display', 'none');
      }
   });


   if (no_results_found) {
         $('.no-results-found').css('display', 'none');
      } else {
         $('.no-results-found').css('display', 'block');
      }
          
   });

   function filterLocations(letter) {

      states_city.forEach(function (item) {
        
       var  state_city =  item.dataset.name;

            if (letter === 'all' || state_city.charAt(0).toUpperCase() === letter) {
                  $(item).parent().parent().parent().css('display', 'block');
            } else {
               $(item).parent().parent().parent().css('display', 'none');
            }
         });
      }
      

   // Add event listener to the search input
   document.getElementById('searchLocations').addEventListener('input', function () {
      filterLocations('all'); 
      var searchTerm = this.value.toLowerCase();

      if(searchTerm.length  <= 1){
      $(".highlighted_text").removeClass('text-warning');
   }
   if(searchTerm.length < 2){
      return false;
   }
   var no_results_found = false;

    states_city.forEach(function (item) {
         var state_city  = item.dataset.name;
         state_city = state_city.toLowerCase();

         if (state_city.includes(searchTerm)) {
            no_results_found = true;
            $(item).parent().parent().parent().css('display', 'block');
            // highlight search term
            var regex = new RegExp(searchTerm, 'gi');
            var highlighted = state_city.replace(regex, function (str) {
               return '<span class="text-warning highlighted_text">' + str + '</span>';
            });
            item.innerHTML = highlighted;
         } else {
            $(item).parent().parent().parent().css('display', 'none');
         }
      });

      if (no_results_found) {
         $('.no-results-found').css('display', 'none');
      } else {
         $('.no-results-found').css('display', 'block');
      }

   });


   $(document).ready(function () {
      $('.tab-content .pagination .page-link').click(function () {
         $('.page-link').removeClass('active');
         $(this).toggleClass('active');
      });
   });

</script>
<script>
  function updateBadgeCount(tabId, count) {
    document.getElementById(tabId + 'Badge').textContent = count;
  }

  function resetBadgeCounts(tabId, storageKey) {

    localStorage.setItem(storageKey, 0);
    updateBadgeCount(tabId, 0);
  }

  function handleCheckboxChange(tabId, checkboxSelector, storageKey) {
    function update() {
      var checkboxes = document.querySelectorAll(checkboxSelector);
      var selectedCount = Array.from(checkboxes).filter(checkbox => checkbox.checked).length;
      updateBadgeCount(tabId, selectedCount);

      localStorage.setItem(storageKey, selectedCount);
    }

    var checkboxes = document.querySelectorAll(checkboxSelector);
    checkboxes.forEach(function (checkbox) {
      checkbox.addEventListener('change', update);
    });

    document.addEventListener('DOMContentLoaded', function () {
      var savedCount = localStorage.getItem(storageKey) || 0;
     // updateBadgeCount(tabId, savedCount);
    });
  }

  function initializeResetButton(tabId, storageKey) {
    var resetButton = document.getElementById('resetButton');
    if (resetButton) {
      resetButton.addEventListener('click', function () {
        resetBadgeCounts(tabId, storageKey);
      });
    }
  }

  function handleCardCheckboxChange(tabId, checkboxSelector, storageKey) {
    function update() {
      var checkboxes = document.querySelectorAll(checkboxSelector);
      var selectedCount = Array.from(checkboxes).filter(checkbox => checkbox.checked).length;
      updateBadgeCount(tabId, selectedCount);

      localStorage.setItem(storageKey, selectedCount);
    }

    var checkboxes = document.querySelectorAll(checkboxSelector);
    checkboxes.forEach(function (checkbox) {
      checkbox.addEventListener('change', update);
    });

    document.addEventListener('DOMContentLoaded', function () {
      var savedCount = localStorage.getItem(storageKey) || 0;
      //updateBadgeCount(tabId, savedCount);
    });
  }

  function clearCheckboxes(tabId, checkboxSelector) {
    var checkboxes = document.querySelectorAll(checkboxSelector);
    checkboxes.forEach(function (checkbox) {
      checkbox.checked = false;
    });

    resetBadgeCounts(tabId, 'selectedCompanyCount');
  }

  function updateBadgeCountsOutsideModal() {
    var totalCompaniesBadge = document.querySelector('.total_companies');
    var checkedCompaniesBadge = document.querySelector('.checked_companies');

    totalCompaniesBadge.textContent = 'Total Companies: 846';
    checkedCompaniesBadge.textContent = 'Selected Companies: 0';
  }

  handleCheckboxChange('company', '.company_checkbox_in_modal', 'selectedCompanyCount');
  handleCheckboxChange('region', 'input[name="regions[]"]', 'selectedRegionCount');
  handleCheckboxChange('product', 'input[name="products[]"]', 'selectedProductCount');
  handleCheckboxChange('trademark', 'input[name="trademarks[]"]', 'selectedTrademarkCount');
  handleCheckboxChange('sale', 'input[name="range[]"]', 'selectedSaleCount');
  handleCheckboxChange('city', 'input[name="location[]"]', 'selectedCityCount');
  handleCheckboxChange('export', 'input[name="ranges[]"]', 'selectedExportCount');
  handleCheckboxChange('noofemp', 'input[name="no_ofEmp[]"]', 'selectedNoOfEmpCount');
  handleCheckboxChange('quality', 'input[name="quality[]"]', 'selectedQualityCount');

  initializeResetButton('company', 'selectedCompanyCount');
  initializeResetButton('region', 'selectedRegionCount');
  initializeResetButton('product', 'selectedProductCount');
  initializeResetButton('trademark', 'selectedTrademarkCount');
  initializeResetButton('sale', 'selectedSaleCount');
  initializeResetButton('city', 'selectedCityCount');
  initializeResetButton('export', 'selectedExportCount');
  initializeResetButton('noofemp', 'selectedNoOfEmpCount');
  handleCheckboxChange('quality', 'selectedQualityCount');

  handleCardCheckboxChange('company', '.company_checkbox', 'selectedCompanyCountCard');

  document.getElementById('clearCheckedButton').addEventListener('click', function () {
    clearCheckboxes('company', '.company_checkbox');
    updateBadgeCountsOutsideModal();
  });
</script>


<script>
   var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {

});


//code to reset local storage from browser by ajay
var viewAllButtons = document.querySelectorAll('.view-all-button');

    // Add a click event listener to each 'View All' button
    viewAllButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            // Clear the entire local storage
            localStorage.clear();

            // Redirect to the 'company.dashboard' route or any other desired route
            window.location.href = '{{ route("company.dashboard") }}';
        });
    });


   $(document).ready(function(){
      $('.toggle_allcheckbox').click(function(){

         var check = $(this).attr("data-check");
         
         if(check == 'true'){
            
            $('.company_checkbox').parent().parent().parent().addClass('card-border');
            $('.company_checkbox').prop('checked', true);
            $(this).attr("data-check", false);
            $(this).text('Uncheck All');

            $(".checked_company_download").fadeIn('slow');
            var checkedCount = $('.company_checkbox:checked').length;
            $(".checked_companies").html("Selected Companies: " + checkedCount);
           
             $('#companyBadge').html(checkedCount);
            var id = [];
            $('.company_checkbox:checked').each(function() {
               var companyId = $(this).val();
               id.push(parseInt(companyId));
            });

            id.forEach(function(companyId) {
               $(".company_id_in_modal_" + companyId).prop('checked', true);
            });

            var already_checked_on_other_pages = localStorage.getItem('checked_companies');
            already_checked_on_other_pages = JSON.parse(already_checked_on_other_pages);
            if(already_checked_on_other_pages == null){
               already_checked_on_other_pages = [];
            }
            already_checked_on_other_pages.push(...id);
            localStorage.setItem('checked_companies', JSON.stringify(already_checked_on_other_pages));
                        
         }else{

            $('.company_checkbox').parent().parent().parent().removeClass('card-border');
            $('.company_checkbox').prop('checked', false);
            $(this).attr("data-check", true);
            $(this).text('Check All');
            $(".checked_company_download").fadeOut('slow');
            var checkedCount = $('.company_checkbox:checked').length;
            $(".checked_companies").html("Selected Companies: " + checkedCount);
            $('#companyBadge').html(checkedCount);
            //this line to is uncheck the modalcheckbox 
            $(".company_checkbox_in_modal").prop('checked', false);
            
            localStorage.setItem('checked_companies', JSON.stringify([]));

         }
      });
   });

   


</script>

@endpush