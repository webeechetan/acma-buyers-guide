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
                           <h2 class="title mb-md-0">Buyers Guide Database</h2>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="custom_search_filter text-end">
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
                                                   <a class="nav-link" data-bs-toggle="pill" href="#location">Location</a>
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
                                                   <div class="row">
                                                      <h6 class="mb-0 text-justify text-dark">Companies Filter</h6>
                                                      @foreach($companies_name as $company)
                                                      <div class="col-md-4">
                                                         <div class="mt-4">
                                                            @if(isset($company['name']) && !empty($company['name']))
                                                          <div class="form-check form-check-inline mb-2">
                                                                  <input class="form-check-input" name="company_name[]" type="checkbox" id="{{ $company['name'] }}" value="{{ $company['name'] }}"  {{ in_array($company['name'], (array)request()->input('company_name')) ? 'checked' : '' }}>                                                                         
                                                                  <label class="form-check-label" for="">{{ $company['name'] }}</label>
                                                               </div>
                                                            @endif
                                                         </div>
                                                      </div>
                                                      @endforeach
                                                   </div>
                                                </div>
                                                <div class="tab-pane container fade" id="region">
                                                      <div class="row">
                                                         <h6 class="mb-0 text-justify text-dark">Region Filter</h6>
                                                         @foreach ($regions as $region)
                                                      
                                                         <div class="col-md-3">
                                                            <div class="mt-4">
                                                               @if(isset($region['region']) && !empty($region['region']))
                                                                  <div class="form-check form-check-inline mb-2">
                                                                     <input class="form-check-input" type="checkbox" name="regions[]" id="regions" value="{{ $region['region'] }}" {{ in_array($region['region'], (array)request()->input('regions')) ? 'checked' : '' }}>
                                                                     <label class="form-check-label" for="inlineCheckbox1">{{ $region['region'] }}</label>
                                                                  </div>
                                                               @endif
                                                            </div>
                                                         </div>
                                                         @endforeach
                                                      </div>
                                                      
                                                </div>
                                                <div class="tab-pane container fade" id="product">
                                                   
                                                      <div class="row">
                                                         <h6 class="mb-0 text-justify text-dark">Product Filter</h6>
                                                         @foreach ($products as $product)


                                                         <div class="col-md-4">
                                                            <div class="mt-4">
                                                               @if(isset($product['products_manufactured']) && !empty($product['products_manufactured']))
                                                               <div class="form-check form-check-inline mb-2">
                                                                  <input class="form-check-input" type="checkbox" name="products[]" id="products" value="{{ $product['products_manufactured'] }}" {{ in_array($product['products_manufactured'], (array)request()->input('products')) ? 'checked' : '' }}>
                                                                  <label class="form-check-label" for="inlineCheckbox1">{{ $product['products_manufactured'] }}</label>
                                                               </div>
                                                               @endif
                                                            </div>
                                                         </div>
                                                         
                                                         @endforeach
                                                      </div>
                                                      
                                                </div>
                                                <div class="tab-pane container fade" id="trademark">
                                                   
                                                      <div class="row">
                                                        <h6 class="mb-0 text-justify text-dark">Trademark Filter</h6>
                                                         @foreach ($trademarks as $trademark)

                                                         <div class="col-md-4">
                                                            <div class="mt-4">
                                                               @if(isset($trademark['trademark']) && !empty($trademark['trademark']))
                                                               <div class="form-check form-check-inline mb-2">
                                                                  <input class="form-check-input" type="checkbox" name="trademarks[]" id="trademarks" value="{{$trademark['trademark']}}" {{ in_array($trademark['trademark'], (array)request()->input('trademarks')) ? 'checked' : '' }}>
                                                                  <label class="form-check-label" for="inlineCheckbox1">{{$trademark['trademark']}}</label>
                                                               </div>
                                                               @endif
                                                            
                                                            </div>
                                                         </div>
                                                         @endforeach
                                                      </div>
                                                      
                                                </div>
                                                <div class="tab-pane container fade" id="salesTurnover">
                                                    <h6 class="mb-0 text-justify text-dark">Sales Turnover Filter</h6>
                                                      <div class="row mt-4">
                                                      <div class="form-check form-check-inline form-check-flex">
                                                         <input class="form-check-input" type="checkbox" name="range" value="0-5000" {{ request('range') == '0-5000' ? 'checked' : '' }}id="checkbox-one">
                                                         <label class="form-check-label" for="checkbox-one">
                                                            0 - 5000
                                                         </label>
                                                      </div>
                                                      <div class="form-check form-check-inline form-check-flex">
                                                         <input class="form-check-input" type="checkbox" name="range" value="5000-10000" {{ request('range') == '5000-10000' ? 'checked' : '' }}id="checkbox-one">
                                                         <label class="form-check-label" for="checkbox-one">
                                                            5000-10000
                                                         </label>
                                                      </div>
                                                      
                                                      <div class="form-check form-check-inline form-check-flex">
                                                         <input class="form-check-input" type="checkbox" name="range" value="5000-15000" {{ request('range') == '5000-15000' ? 'checked' : '' }}id="checkbox-one">
                                                         <label class="form-check-label" for="checkbox-one">
                                                             5000-15000
                                                         </label>
                                                      </div>
                                                      
                                                      </div>
                                                      
                                                </div>

                                                <div class="tab-pane container fade" id="location">
                                                   
                                                   <div class="row">
                                                      <h6 class="mb-0 text-justify text-dark">State Filter</h6>
                                                      @foreach ($states as $state)

                                                      <div class="col-md-4">
                                                         <div class="mt-4">
                                                            @if(isset($state['state']) && !empty($state['state']))
                                                            <div class="form-check form-check-inline mb-2">
                                                               <input class="form-check-input" type="checkbox" name="state[]" id="states" value="{{ $state['state'] }}" {{ in_array($state['state'], (array)request()->input('state')) ? 'checked' : '' }}>
                                                               <label class="form-check-label" for="inlineCheckbox1">{{ $state['state'] }}</label>
                                                            </div>
                                                            @endif
                                                         </div>
                                                      </div>
                                                      
                                                      @endforeach
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
                        <div class="col-md-3 mb-3">
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
                                                
                                                @if($company && $company->email)
                                                <a href={{$company->email}}>  {{$company->email}}</a>
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
                                {{-- {{ $companies->links }} --}}
                           
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
@endpush