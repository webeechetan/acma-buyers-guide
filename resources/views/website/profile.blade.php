@extends('website.layouts.app')
@section('title','My Profile')
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
                  <i class="bx bx-calendar-alt"></i> {{$company->created_at->format('d M-y')}}
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
          <li class="d-flex align-items-center mb-3"><i class="bx bx-flag"></i><span class="fw-medium mx-2">Location:</span> <span>{{$company_contact_details->state}}</span></li>
        </ul>
        <small class="text-muted text-uppercase">Contacts</small>
        <ul class="list-unstyled mb-4 mt-3">
          <li class="d-flex align-items-center mb-3"><i class="bx bx-phone"></i><span class="fw-medium mx-2">Contact:</span> <span>{{$company_contact_details->phone }}</span></li>
          <li class="d-flex align-items-center mb-3"><i class="bx bx-chat"></i><span class="fw-medium mx-2">Fax:</span> <span>{{$company_contact_details->fax}}</span></li>
          <li class="d-flex align-items-center mb-3"><i class="bx bx-envelope"></i><span class="fw-medium mx-2">Email:</span> <span>{{$company_contact_details->email}}</span></li>
          <li class="d-flex align-items-center mb-3"><i class="bx bx-globe"></i><span class="fw-medium mx-2">Website:</span> <span><a href="" class="text-primary">{{$company_contact_details->website}}</a></span></li>
        </ul>
        
      </div>
    </div>
    <!--/ About User -->
    <!-- Profile Overview -->
   
    <!--/ Profile Overview -->
  </div>
  <div class="col-xl-8 col-lg-7 col-md-7">
    <!-- Activity Timeline -->
    <div class="card card-action mb-4">
      <div class="card-header align-items-center">
        <h5 class="card-action-title mb-0"><i class="bx bx-list-ul me-2"></i>Company Profile Update Request Status</h5> 
      </div>
      
      @foreach ($CompanyUpdateRequests as $CompanyUpdateRequest)

      <div class="card-body p-4">
        <ul class="timeline ms-2">
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point-wrapper"><span class="timeline-point timeline-point-warning"></span></span>
            <div class="timeline-event">
              <div class="timeline-header mb-1">
                <h6 class="mb-0 text-warning">Request Sent</h6>
                <small class="text-muted">{{$CompanyUpdateRequest->created_at->format('d M-y')}}</small>
              </div>
              <p class="mb-2">update contact number,fax number, address and email</p>
            </div>
          </li>
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point-wrapper"><span class="timeline-point timeline-point-info"></span></span>
            <div class="timeline-event">
              <div class="timeline-header mb-1">
                <h6 class="mb-0 text-info">Request Received</h6>
                <small class="text-muted">{{$CompanyUpdateRequest->created_at->format('d M-y')}}</small>
              </div>
              <p class="mb-0">Your profile details update request received by admin</p>
            </div>
          </li>
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point-wrapper"><span class="timeline-point timeline-point-primary"></span></span>
            <div class="timeline-event">
              <div class="timeline-header mb-1">
                <h6 class="mb-0 text-primary">Request Status</h6>
                <small class="text-muted">{{ucfirst($CompanyUpdateRequest->status)}}</small>
              </div>
              <p class="mb-2">Your request for update company details are in progress</p>
            </div>
          </li>
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point-wrapper"><span class="timeline-point timeline-point-success"></span></span>
            <div class="timeline-event pb-0">
              <div class="timeline-header mb-1">
                <h6 class="mb-0">{{ucfirst($CompanyUpdateRequest->status)}}</h6>
              </div>
            </div>
          </li>
          <li class="timeline-end-indicator">
            <i class="bx bx-check-circle"></i>
          </li>
        </ul>

        <div class="view-btn mt-5">
          <button class="btn btn-primary btn-sm"  data-bs-toggle="modal" data-bs-target="#exampleModal">View Details</button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="text-primary mb-0" id="exampleModalLabel">Update Company Details</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                  </button>
              </div>
              <div class="modal-body pt-1">
              <ul class="list-unstyled mb-4 mt-3">

                @php

                $CompanyUpdateRequest = $CompanyUpdateRequest->data;
                $data=json_decode($CompanyUpdateRequest, true);

                    if (is_array($data)) {
                        $updating_data = '';

                        foreach ($data as $key => $value) {
                            $oldValue = isset($value['old']) ? $value['old'] : 'NULL';
                            $newValue = isset($value['new']) ? $value['new'] : 'NULL';

                            $updating_data .= $key . ' From ' . $value['old'] . ' to ' . $value['new'] . '<br>';
                            // $updating_data .= "<li class='d-flex align-items-center mb-3'><i class='bx bx-phone'></i><span class='fw-medium mx-2'>{$key}:</span> From {$oldValue} to {$newValue}</li>";
                        }
                    } else {
                        // Handle the case where $CompanyUpdateRequest is not a valid JSON string
                        $updating_data = 'Invalid data format';
                    }
                  @endphp

                  <ul>
                    {!! $updating_data !!}
                  </ul>


              </ul>
              </div>
              
            </div>
          </div>
        </div>
      </div>

      
      @endforeach
    </div>
    <!--/ Activity Timeline -->
  </div>
</div>
@endsection
@push('scripts')