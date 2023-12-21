@extends('website.layouts.app')
@section('title','View Company')
@push('styles')

@endpush
@section('content')
<div class="row mt-5 mb-4">
  <div class="col-12 border-bottom pb-3">
     <div class="d-flex justify-content-between align-items-center">
      @if ($company_contact_details->image)
      <img src="{{ asset('storage/'. $company_contact_details->image) }}" alt="Company_logo" class="d-block h-auto ms-0 rounded user-profile-img">
    @else
      <img src="{{ asset('admin/') }}/assets/img/icons/unicons/briefcase.png" alt="user image" class="d-block h-auto ms-0 rounded user-profile-img">
    @endif
        
        <div>
          <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
            <div class="user-profile-info">
              <h4>{{$company->name}}</h4>
              <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                
                @if($company_contact_details->state)
                <li class="list-inline-item fw-medium">
                  <i class="bx bx-map"></i> {{$company_contact_details->state}}
                </li>
                @endif
                
              </ul>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
<div class="row mb-4 border-bottom pb-3">
  <div class="col-md-6 mb-4 mb-md-0">
    <!-- About User -->
      <div class="inner-profile-card">
        <div class="information-list profile-list">
          <h5 class="text-primary fw-semibold">About</h5>
          <ul>
              <li>
                <div>
                    <i class="bx bx-user"></i><span>Company</span>
                </div>
                  @if($company && $company->name)
                  <div>
                      <span>{{$company->name}}</span>
                  </div>
                  @else
                  <span>NA</span>
                  @endif
              </li>
              <li>
                <div>
                    <i class="bx bx-map"></i><span>Address</span>
                </div>
                @if($company_contact_details->company_address)
                <div>
                    <span>{{$company_contact_details->company_address}}</span>
                </div>
                @else
                <span>NA</span>
                @endif
              </li>
              <li>
                <div>
                    <i class="bx bx-map-pin"></i><span>Pin</span>
                </div>
                @if($company_contact_details->pin)
                <div>
                    <span>{{$company_contact_details->pin}}</span>
                </div>
                @else 
                <span>NA</span>
                @endif
              </li>
              <li>
                <div>
                    <i class="bx bx-buildings"></i><span>City</span>
                </div>
                @if($company_contact_details->city)
                <div>
                    <span>{{$company_contact_details->city}}</span>
                </div>
                @else 
                <span>NA</span>
                @endif
              </li>
              <li>
                <div>
                <i class='bx bx-world'></i><span>State</span>
                </div>
                @if($company_contact_details->state)
                <div>
                    <span>{{$company_contact_details->state}}</span>
                </div>
                @else 
                <span>NA</span>
                @endif 
              </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-6">
     <div class="inner-profile-card">
        <div class="information-list profile-list">
            <h5 class="text-primary fw-semibold">Contact</h5>
            <ul>
                <li>
                  <div>
                      <i class="bx bx-user"></i><span>Contact</span>
                  </div>

                  @if($company_contact_details->phone)
                  <div>
                      <span>{{$company_contact_details->phone }}</span>
                  </div>
                  @else 
                  <span>NA</span>
                  @endif 
                </li>
                <li>
                  <div>
                      <i class="bx bx-chat"></i><span>Fax</span> 
                  </div>
                  @if($company_contact_details->fax)
                  <div>


                      <span>{{$company_contact_details->fax}}</span>

                  </div>
                  @else 
                  <span>NA</span>
                  @endif 
                </li>
                <li>
                  <div>
                      <i class="bx bx-map-pin"></i><span>Pin</span>
                  </div>
                  @if($company_contact_details->pin)
                  <div>

                      <span>{{$company_contact_details->pin}}</span>

                  </div>
                  @else 
                  <span>NA</span>
                  @endif
                </li>
                <li>
                  <div>
                      <i class="bx bx-envelope"></i><span>Email</span>
                  </div>
                  @if($company->email)
                  <div>
                      <span>{{ucfirst($company->email)}}</span>
                  </div>
                  @else 
                  <span>NA</span>
                  
                  @endif
                </li>
                <li>
                  <div>
                      <i class="bx bx-globe"></i><span>Website</span>
                  </div>
                  @if($company->website)
                  <div>
                      <span>{{ucfirst($company->website)}}</span>
                  </div>
                  @else
                  <span>NA</span>
                  @endif
                </li>
            </ul>
        </div>
    </div>
  </div>
  </div>

<div class="row">
  <div class="col-md-6 mb-4 mb-md-0">
      <div class="inner-profile-card">
        <div class="information-list profile-list">
          <h5 class="text- fw-semibold">Key Personal</h5>
                <ul>
                    <li>
                      <div>
                          <i class="bx bx-user"></i><span>Managing Director</span>
                      </div>
                      @if($company_key_personnels->managing_director)
                      <div>
                          <span>{{ucfirst($company_key_personnels->managing_director)}}</span>
                      </div>
                      @else
                      <span>NA</span>
                      @endif
                    </li>
                    <li>
                      <div>
                          <i class="bx bx-user"></i><span>Chief Executive</span>
                      </div>
                      @if($company_key_personnels->chief_executive)
                      <div>
                          <span>{{ucfirst($company_key_personnels->chief_executive)}}</span>
                      </div>
                      @else 
                      <span>NA</span>
                      @endif
                    </li>
                    <li>
                      <div>
                          <i class="bx bx-user"></i><span>Sales Inchrage</span>
                      </div>
                      @if($company_key_personnels->sales_in_charge)
                      <div>
                          <span>{{ucfirst($company_key_personnels->sales_in_charge)}}</span>
                      </div>
                      @else 
                      <span>NA</span>
                      @endif
                    </li>
                    <li>
                      <div>
                          <i class="bx bx-user"></i><span>Export Incharge</span>
                      </div>
                      @if($company_key_personnels->export_in_charge)
                      <div>
                          <span>{{ucfirst($company_key_personnels->export_in_charge)}}</span>
                      </div>
                      @else 
                      <span>NA</span>
                      @endif
                    </li>
                    <li>
                      <div>
                          <i class="bx bx-user"></i><span>Production Incharge</span>
                      </div>

                      @if($company_key_personnels->production_in_charge)
                      <div>
                          <span>{{ucfirst($company_key_personnels->production_in_charge)}}</span>
                      </div>
                      @else 
                      <span>NA</span>
                      @endif
                    </li>
                </ul>
              </div>
        </div>
      </div>
  <div class="col-md-6">
        <div class="inner-profile-card">
          <div class="information-list profile-list ">
            <h5 class="text-primary fw-semibold">Products Manufactured</h5>
            <ul>
                <li>
                  <div>
                      <i class="bx bx-package"></i><span>Products</span>
                  </div>
                  @if($company_product_details->products_manufactured)
                  <div>
                      <span>{{ucfirst($company_product_details->products_manufactured)}}</span>
                  </div>
                  @else 
                  <span>NA</span>
                  @endif
                </li>
                <li>
                  <div>
                      <i class="bx bx-package"></i><span>Product 2</span>
                  </div>
                  @if($company_product_details->product2)
                  <div>
                      <span>{{ucfirst($company_product_details->product2)}}</span>
                  </div>
                  @else 
                  <span>NA</span>
                  @endif
                </li>
                <li>
                  <div>
                      <i class="bx bx-package"></i><span>Product 3</span>
                  </div>
                  @if($company_product_details->product3)
                  <div>
                      <span>{{ucfirst($company_product_details->product3)}}</span>
                  </div>
                  @else
                  <span>NA</span> 
                  @endif
                </li> 
                <li>
                  <div>
                      <i class="bx bx-package"></i><span>Product 4</span>
                  </div>
                  @if($company_product_details->product4)
                  <div>
                      <span>{{ucfirst($company_product_details->product4)}}</span>
                  </div>
                  @else
                  <span>NA</span> 
                  @endif
                </li> 
            </ul>
          </div>
        </div>
  </div>
</div>

</div>

@endsection
@push('scripts')
