@extends('website.layouts.app')
@section('title','Dashboard')
@push('styles')
<link rel="stylesheet" href=" {{ asset('admin/') }}/assets/vendor/libs/select2/select2.css " />
@endpush
@section('content')
<!-- Content -->
<section class="sec-space">
   <div class="container-xxl">
      <div class="row">
         <div class="col-md-12">
            <!--- Search Filter ---->
            <div class="card mb-3">
               <div class="card-body">
                  <div class="row">
                     <div class="col-md-8">
                        <div>
                           <h2 class="title mb-md-0 text-center text-md-start">Buyers Guide Database</h2>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="custom_search_filter text-md-end text-center">
                           <!-- <form action="/" method="GET">
                              <input type="text" data-bs-toggle="modal" data-bs-target="#static"  data-bs-target="#static" class="form-control"
                                 id="filter_category" name="filter_category" placeholder="Filter By Category" value="">
                              <div class="custom_search_filter_inputMask">
                                 <i class="bx bx-search"></i>
                              </div>
                           </form> -->
                           <button data-bs-toggle="modal" data-bs-target="#static"  data-bs-target="#static" class="btn btn-primary"id="filter_category" name="filter_category">Filter By Category</button>
                           <!-- Modal -->
                           <div class="modal fade" id="static"  data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
                              <div class="modal-dialog modal-lg" role="document">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h2 class="modal-title title text-center" id="exampleModalLabel1">Advance Filter</h2>
                                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                       <div class="row">
                                       
                                          <div class="col-md-3">
                                             <ul class="nav nav-pills flex-column">
                                                <li  class="filter-name nav-item mb-2" data-filter="name">
                                                   <a class="nav-link active" data-bs-toggle="pill" href="#company">Company</a>
                                                </li>
                                               
                                                <li  class="filter-name mb-2" data-filter="region">
                                                   <a class="nav-link" data-bs-toggle="pill" href="#region">Region</a>
                                                </li>
                                                <li  class="filter-name mb-2" data-filter="product">
                                                   <a class="nav-link" data-bs-toggle="pill" href="#product">Product</a>
                                                </li>
                                                <li class="filter-name mb-2" data-filter="trademark" >
                                                   <a class="nav-link" data-bs-toggle="pill" href="#trademark">Trademark</a>
                                                </li>
                                                <li class="filter-name mb-2" data-filter="salesTurnover" >
                                                   <a class="nav-link" data-bs-toggle="pill" href="#salesTurnover">Sales Turnover</a>
                                                </li>
                                                {{-- <li class="filter-name mb-2" data-filter="exportTurnover" >
                                                   <a class="nav-link" data-bs-toggle="pill" href="#exportTurnover">Export Turnover</a>
                                                </li> --}}

                                                <li  class="filter-name mb-2" data-filter="location">
                                                   <a class="nav-link" data-bs-toggle="pill" href="#location">States & City</a>
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
                                                  <h6 class="mb-2 text-justify text-dark">Company Filter</h6>
                                                 <!-- Add a text box next to the heading -->
                                                   <div class="row mb-3">
                                                      <div class="col-md-6">
                                                         <input type="text"  id="searchCompanies" class="form-control" placeholder="Search companies...">
                                                      </div>
                                                   </div>
                                                   <div class="row scroll-content">
                                                      @foreach($companies_name as $company)
                                                      <div class="col-md-4 company-item">
                                                         <div class="mt-2">
                                                            @if(isset($company['name']) && !empty($company['name']))
                                                          <div class="form-check form-check-inline mb-2">
                                                                  <input class="form-check-input"  class="active-check" name="company_name[]" type="checkbox" id="{{ $company['name'] }}" value="{{ $company['name'] }}"  {{ in_array($company['name'], (array)request()->input('company_name')) ? 'checked' : '' }}>                                                                         
                                                                  <label class="form-check-label" for="">{{ $company['name'] }}</label>
                                                               </div>
                                                            @endif
                                                         </div>
                                                      </div>
                                                      @endforeach
                                                   </div>
                                                   <div class="pagination">
                                                      <ul class="pagination">
                                                          @for($i = 65; $i <= 90; $i++) {{-- ASCII values for A to Z --}}
                                                              <li class="page-item">
                                                                  <a class="page-link" href="#" onclick="filterCompanies('{{ chr($i) }}')">{{ chr($i) }}</a>
                                                              </li>
                                                          @endfor
                                                      </ul>
                                                  </div>
                                                   
                                                </div>
                          
                                                
                                               
                          
                                             <div class="tab-pane container fade" id="region">
                                                   <h6 class="mb-2 text-justify text-dark">Region Filter</h6>
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
                                                   <h6 class="mb-2 text-justify text-dark">Product Filter</h6>
                                                   <div class="row mb-3">
                                                      <div class="col-md-6">
                                                          <input type="text" class="form-control" id="searchProducts" placeholder="Search products...">
                                                      </div>
                                                  </div>
                                                   <div class="row scroll-content">
                                                      @foreach ($products as $product)
                                                      <div class="col-md-6 product-item">
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
                                                   <div class="pagination">
                                                      <ul class="pagination">
                                                          @for($i = 65; $i <= 90; $i++) {{-- ASCII values for A to Z --}}
                                                              <li class="page-item">
                                                                  <a class="page-link" href="#" onclick="filterProducts('{{ chr($i) }}')">{{ chr($i) }}</a>
                                                              </li>
                                                          @endfor
                                                      </ul>
                                                  </div>
                                                </div>
                                                <div class="tab-pane container fade" id="trademark">
                                                   <h6 class="mb-2 text-justify text-dark">Trademark Filter</h6>
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
                                                   <h6 class="mb-2 text-justify text-dark">Sales Turnover Filter</h6>
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
                                                   <h6 class="mb-2 text-justify text-dark">States & City</h6>

                                                   <!-- Add a text box next to the heading -->
                                                   <div class="row mb-3">
                                                      <div class="col-md-6">
                                                         <input type="text"  id="searchLocations" class="form-control" placeholder="Search States & City">
                                                      </div>
                                                   </div>
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

                                                   <div class="pagination">
                                                      <ul class="pagination">
                                                          @for($i = 65; $i <= 90; $i++) {{-- ASCII values for A to Z --}}
                                                              <li class="page-item">
                                                                  <a class="page-link" href="#" onclick="filterLocations('{{ chr($i) }}')">{{ chr($i) }}</a>
                                                              </li>
                                                          @endfor
                                                      </ul>
                                                  </div>
                                                   
                                                   
                                                  
                                                </div>
                                                

                                             </div>
                                                <div class="mt-3">
                                                      <button class="btn btn-primary btn-sm">Apply</button>
                                                      <a href="{{ url()->current() }}" class="btn btn-primary btn-sm">Reset</a>
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
            <!--- Company Card --->
            <div class="company-card">
               <div>
                  <form action="{{ route('dashboard.company.export') }}">                 
                  
                     <div class="row">
                     @foreach ($companies as $company)   
                           <div class="col-md-4 mb-3">
                                 <div class="card card-data">
                                    <div class="company-title">
                                       <a target="_blank" href="{{ route('company.view_company',$company->id) }}"><h4 class="sub-title mb-0 text-secondary"> {{ $company->name }}</h4></a>
                                       <input type="checkbox" class="check" name="company_ids[]" id="" value="{{ $company->id }}">
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
                                                   <p>NA</P>
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
                                                   <p>NA</p>
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
                                                      <p>NA</p>
                                                      @endif
                                             
                                                </div>
                                             </li>
                                             <li>
                                                <div>
                                                   <i class="fa fa-envelope"></i><span>E-mail</span>
                                                </div>
                                                <div>
                                                   
                                                   @if($company && $company->contact_details)
                                                   <a href={{$company->email}}>{{$company->email}}</a>
                                                   @else 
                                                   <p>NA</p>
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
                                                   <p>NA</P>
                                                @endif
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              
                           </div>
                        @endforeach

                     
                     </div>

                     {{ $companies->links() }}
                     <div class="row">
                        <div class="col-md-12 text-center mt-2">
                           <button type="submit" class="btn btn-primary" class="download-button">Download CSV</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection
@push('scripts')


<script src="{{ asset('admin/') }}/assets/vendor/libs/select2/select2.js"></script>
<script src="{{ asset('admin/') }}/assets/vendor/libs/bootstrap-select/bootstrap-select.js"></script>
<script>
   $(document).ready(function () {

      $(".filter-name").click(function(e) {
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

      $(".check").click(function() {
        // Find the closest ancestor with the class 'card' and toggle the class 'card-border'
        $(this).closest('.card').toggleClass('card-border');
    });
  });
</script>

<!-- Include this script in your HTML file -->
<script>
 document.addEventListener("DOMContentLoaded", function () {
    var checkboxes = document.querySelectorAll('.form-check-inline input[type="checkbox"]');
    var tabs = document.querySelectorAll('.nav-pills .nav-link');

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


</script>

<script>
   function filterCompanies(letter) {
       // Get all company items
       var companyItems = document.querySelectorAll('.company-item');

       // Iterate through each company item and show/hide based on the selected letter
       companyItems.forEach(function(item) {
           var companyName = item.querySelector('.form-check-label').innerText;

           if (letter === 'all' || companyName.charAt(0).toUpperCase() === letter) {
               item.style.display = 'block';
           } else {
               item.style.display = 'none';
           }
       });
   }

   // Add event listener to the search input
   document.getElementById('searchCompanies').addEventListener('input', function() {
       filterCompanies('all'); // Show all items
       var searchTerm = this.value.toLowerCase();

       // Get all company items
       var companyItems = document.querySelectorAll('.company-item');

       // Iterate through each company item and show/hide based on the search term
       companyItems.forEach(function(item) {
           var companyName = item.querySelector('.form-check-label').innerText.toLowerCase();
           if (companyName.includes(searchTerm)) {
               item.style.display = 'block';
           } else {
               item.style.display = 'none';
           }
       });
   });

</script>

<script>

   function filterProducts(letter) {
       // Get all product items
       var productItems = document.querySelectorAll('.product-item');
       // Iterate through each product item and show/hide based on the selected letter
       productItems.forEach(function(item) {
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

   // Add event listener to the search input
   document.getElementById('searchProducts').addEventListener('input', function() {
       filterProducts('all'); // Show all items
       var searchTerm = this.value.toLowerCase();

       // Get all product items
       var productItems = document.querySelectorAll('.product-item');

       // Iterate through each product item and show/hide based on the search term
       productItems.forEach(function(item) {
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


 
</script>



<script>

   function filterLocations(letter) {
       // Get all product items
       var states_city = document.querySelectorAll('.location-items');
       // Iterate through each product item and show/hide based on the selected letter
       states_city.forEach(function(item) {
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
   document.getElementById('searchLocations').addEventListener('input', function() {
      filterLocations('all'); // Show all items
       var searchTerm = this.value.toLowerCase();

       // Get all product items
       var location_items = document.querySelectorAll('.location-items');

       // Iterate through each product item and show/hide based on the search term
       location_items.forEach(function(item) {
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


 
</script>


@endpush