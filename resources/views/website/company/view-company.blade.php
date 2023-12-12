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
  <div class="col-xl-4 col-lg-5 col-md-5">
    <!-- About User -->
    <div class="card mb-4">
      <div class="card-body">
        <small class="text-muted text-uppercase">About</small>
        <ul class="list-unstyled mb-4 mt-3">
          <li class="d-flex align-items-center mb-3"><i class="bx bx-user"></i><span class="fw-medium mx-2">Company Name:</span> <span>{{$company->name}}</span></li>
          <li class="d-flex align-items-center mb-3"><i class="bx bx-flag"></i><span class="fw-medium mx-2">Address:</span> <span>{{$company_contact_details->company_address}}</span></li>
          <li class="d-flex align-items-center mb-3"><i class="bx bx-map-pin"></i><span class="fw-medium mx-2">Pin:</span> <span>{{$company_contact_details->pin}}</span></li>
          <li class="d-flex align-items-center mb-3"><i class="bx bx-buildings"></i><span class="fw-medium mx-2">City:</span> <span>{{$company_contact_details->city}}</span></li>
          <li class="d-flex align-items-center mb-3"><i class="bx bx-map"></i><span class="fw-medium mx-2">State:</span> <span>{{$company_contact_details->state}}</span></li>
        </ul>
        <small class="text-muted text-uppercase">Contacts</small>
        <ul class="list-unstyled mb-4 mt-3">
          <li class="d-flex align-items-center mb-3"><i class="bx bx-phone"></i><span class="fw-medium mx-2">Contact:</span> <span>{{$company_contact_details->phone }}</span></li>
          <li class="d-flex align-items-center mb-3"><i class="bx bx-chat"></i><span class="fw-medium mx-2">Fax:</span> <span>{{$company_contact_details->fax}}</span></li>
          <li class="d-flex align-items-center mb-3"><i class="bx bx-envelope"></i><span class="fw-medium mx-2">Email:</span> <span>{{$company->email}}</span></li>
          <li class="d-flex align-items-center mb-3"><i class="bx bx-world"></i><span class="fw-medium mx-2">Website:</span> <span>{{$company->website}}</span></li>
        </ul>
        
      </div>
    </div>
   
  </div>

  <div class="col-xl-4 col-lg-5 col-md-5">
    <!-- About User -->
    <div class="card mb-4">
      <div class="card-body">
        <small class="text-muted text-uppercase">Key Personnels</small>
        <ul class="list-unstyled mb-4 mt-3">
          <li class="d-flex align-items-center mb-3"><i class="bx bx-user"></i><span class="fw-medium mx-2">Managing Director:</span> <span>{{$company_key_personnels->managing_director}}</span></li>
          <li class="d-flex align-items-center mb-3"><i class="bx bx-user"></i><span class="fw-medium mx-2">Chief Executive:</span> <span>{{$company_key_personnels->chief_executive}}</span></li>
        {{-- </ul>
        <small class="text-muted text-uppercase">Contacts</small>
        <ul class="list-unstyled mb-4 mt-3"> --}}
          <li class="d-flex align-items-center mb-3"><i class="bx bx-user"></i><span class="fw-medium mx-2">Sales Inchrage:</span> <span>{{$company_key_personnels->sales_in_charge}}</span></li>
          <li class="d-flex align-items-center mb-3"><i class="bx bx-user"></i><span class="fw-medium mx-2">Export Incharge:</span> <span>{{$company_key_personnels->export_in_charge}}</span></li>
          <li class="d-flex align-items-center mb-3"><i class="bx bx-user"></i><span class="fw-medium mx-2">Production Incharge:</span> <span>{{$company_key_personnels->production_in_charge}}</span></li>
        </ul>
        
      </div>
    </div>
   
  </div>


  <div class="col-xl-4 col-lg-5 col-md-5">
    <!-- About User -->
    <div class="card mb-4">
      <div class="card-body">
        <small class="text-muted text-uppercase">Products Manufactured</small>
        <ul class="list-unstyled mb-4 mt-3">
          <li class="d-flex align-items-center mb-3"><i class="bx bx-package"></i><span class="fw-medium mx-2">Products:</span> <span>{{$company_product_details->products_manufactured}}</span></li>
       

          <li class="d-flex align-items-center mb-3"><i class="bx bx-package"></i><span class="fw-medium mx-2">Product 2:</span> <span>{{$company_product_details->product2}}</span></li>
        </ul>        
      </div>
    </div>
   
  </div>

</div>


@endsection
@push('scripts')