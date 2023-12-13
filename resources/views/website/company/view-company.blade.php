@extends('website.layouts.app')
@section('title','View Company')
@push('styles')

@endpush
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card mb-4 p-0">
      <div class="user-profile-header-banner">
        <img src="{{ asset('admin/') }}/assets/img/pages/bg_banner.jpg" alt="Banner image" class="rounded-top">
      </div>
      <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
        <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
          <img src="{{ asset('admin/') }}/assets/img/icons/unicons/briefcase.png" alt="user image" class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img">
        </div>
        <div class="flex-grow-1 mt-3 mt-sm-5">
          <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
            <div class="user-profile-info">
              <h4>{{$company->name}}</h4>
              <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                
                <li class="list-inline-item fw-medium">
                  <i class="bx bx-map"></i> {{$company_contact_details->state}}
                </li>
                <li class="list-inline-item fw-medium">
                  <i class="bx bx-calendar-alt"></i> Joined {{$company->created_at->format('d- M-y') }}
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    <!-- About User -->
    <div class="card inner-profile-card">
      <div class="card-body">
        <p>About</p>
        <div class="information-list profile-list mb-3">
          <ul>
              <li>
                <div>
                    <i class="bx bx-user"></i><span>Company Name:</span>
                </div>

                <div>
                    <span>{{$company->name}}</span>
                </div>
              </li>
              <li>
                <div>
                    <i class="bx bx-map"></i><span>Address</span>
                </div>
                <div>


                    <span>{{$company_contact_details->company_address}}</span>

                </div>
              </li>
              <li>
                <div>
                    <i class="bx bx-map-pin"></i><span>Pin</span>
                </div>
                <div>

                    <span>{{$company_contact_details->pin}}</span>

                </div>
              </li>
              <li>
                <div>
                    <i class="bx bx-buildings"></i><span>City</span>
                </div>
                <div>
                    <span>{{$company_contact_details->city}}</span>
                </div>
              </li>
              <li>
                <div>
                    <i class="bx bx-map"></i><span>State</span>
                </div>
                <div>
                    <span>{{$company_contact_details->state}}</span>
                </div>
              </li>
          </ul>
        </div>
          <p>Contacts</p>
          <div class="information-list profile-list">
            <ul>
                <li>
                  <div>
                      <i class="bx bx-user"></i><span>Contact</span>
                  </div>

                  <div>
                      <span>{{$company_contact_details->phone }}</span>
                  </div>
                </li>
                <li>
                  <div>
                      <i class="bx bx-chat"></i><span>Fax</span> 
                  </div>
                  <div>


                      <span>{{$company_contact_details->fax}}</span>

                  </div>
                </li>
                <li>
                  <div>
                      <i class="bx bx-map-pin"></i><span>Pin</span>
                  </div>
                  <div>

                      <span>{{$company->email}}</span>

                  </div>
                </li>
                <li>
                  <div>
                      <i class="bx bx-envelope"></i><span>Email</span>
                  </div>
                  <div>
                      <span>{{$company->email}}</span>
                  </div>
                </li>
                <li>
                  <div>
                      <i class="bx bx-globe"></i><span>Website</span>
                  </div>
                  <div>
                      <span>{{$company->website}}</span>
                  </div>
                </li>
            </ul>
          </div>
      </div>
    </div>
   
  </div>

  <div class="col-md-4">
    <!-- About User -->
    <div class="card inner-profile-card">
      <div class="card-body">
        <p>Key Personnels</p>
        <div class="information-list profile-list">
          <ul>
              <li>
                <div>
                    <i class="bx bx-user"></i><span>Managing Director</span>
                </div>

                <div>
                    <span>{{$company_key_personnels->managing_director}}</span>
                </div>
              </li>
              <li>
                <div>
                    <i class="bx bx-user"></i><span>Chief Executive</span>
                </div>
                <div>


                    <span>{{$company_key_personnels->chief_executive}}</span>

                </div>
              </li>
              <li>
                <div>
                    <i class="bx bx-user"></i><span>Sales Inchrage</span>
                </div>
                <div>
                    <span>{{$company_key_personnels->sales_in_charge}}</span>
                </div>
              </li>
              <li>
                <div>
                    <i class="bx bx-user"></i><span>Export Incharge</span>
                </div>
                <div>
                    <span>{{$company_key_personnels->export_in_charge}}</span>
                </div>
              </li>
              <li>
                <div>
                    <i class="bx bx-user"></i><span>Production Incharge</span>
                </div>
                <div>
                    <span>{{$company_key_personnels->production_in_charge}}</span>
                </div>
              </li>
          </ul>
        </div>
      </div>
    </div>
   
  </div>


  <div class="col-md-4">
    <!-- About User -->
    <div class="card inner-profile-card">
      <div class="card-body">
        <p>Products Manufactured</p>
        <div class="information-list profile-list ">
          <ul>
              <li>
                <div>
                    <i class="bx bx-package"></i><span>Products</span>
                </div>
                <div>
                    <span>{{$company_product_details->products_manufactured}}</span>
                </div>
              </li>
              <li>
                <div>
                    <i class="bx bx-package"></i><span>Product 2</span>
                </div>
                <div>
                    <span>{{$company_product_details->product2}}</span>
                </div>
              </li>
          </ul>
        </div>        
      </div>
    </div>
   
  </div>

</div>


@endsection
@push('scripts')