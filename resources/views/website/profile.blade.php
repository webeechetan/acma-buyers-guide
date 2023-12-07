@extends('website.layouts.app')
@section('title','Profile')
@push('styles')

@endpush
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card mb-4 p-0">
      <div class="user-profile-header-banner">
        <img src="{{ asset('admin/') }}/assets/img/pages/profile-banner.png" alt="Banner image" class="rounded-top">
      </div>
      <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
        <div class="flex-grow-1 mt-3 mt-sm-5">
          <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
            <div class="user-profile-info">
              <h4>Webeesocial</h4>
              <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                <li class="list-inline-item fw-medium">
                  <i class="bx bx-map"></i> New Delhi
                </li>
                <li class="list-inline-item fw-medium">
                  <i class="bx bx-calendar-alt"></i> Joined April 2021
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
          <li class="d-flex align-items-center mb-3"><i class="bx bx-user"></i><span class="fw-medium mx-2">Company Name:</span> <span>Webeesocial</span></li>
          <li class="d-flex align-items-center mb-3"><i class="bx bx-check"></i><span class="fw-medium mx-2">Status:</span> <span>Active</span></li>
          <li class="d-flex align-items-center mb-3"><i class="bx bx-flag"></i><span class="fw-medium mx-2">Location:</span> <span>New Delhi</span></li>
        </ul>
        <small class="text-muted text-uppercase">Contacts</small>
        <ul class="list-unstyled mb-4 mt-3">
          <li class="d-flex align-items-center mb-3"><i class="bx bx-phone"></i><span class="fw-medium mx-2">Contact:</span> <span>(123) 456-7890</span></li>
          <li class="d-flex align-items-center mb-3"><i class="bx bx-chat"></i><span class="fw-medium mx-2">Fax:</span> <span>090-987807</span></li>
          <li class="d-flex align-items-center mb-3"><i class="bx bx-envelope"></i><span class="fw-medium mx-2">Email:</span> <span>admin@gmail.com</span></li>
          <li class="d-flex align-items-center mb-3"><i class="bx bx-globe"></i><span class="fw-medium mx-2">Website:</span> <span><a href="" class="text-primary">Webeesocial.com</a></span></li>
          <li class="d-flex align-items-center mb-3"><i class="bx bx-location-plus"></i><span class="fw-medium mx-2">Address:</span> <span><a href="" class="text-primary">New Delhi</a></span></li>
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
        <h5 class="card-action-title mb-0"><i class="bx bx-list-ul me-2"></i>Company Details Update Request Status</h5>
        
      </div>
      <div class="card-body p-4">
        <ul class="timeline ms-2">
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point-wrapper"><span class="timeline-point timeline-point-warning"></span></span>
            <div class="timeline-event">
              <div class="timeline-header mb-1">
                <h6 class="mb-0">Request Send</h6>
                <small class="text-muted">Today</small>
              </div>
              <p class="mb-2">update contact number,fax number, address and email</p>
            </div>
          </li>
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point-wrapper"><span class="timeline-point timeline-point-info"></span></span>
            <div class="timeline-event">
              <div class="timeline-header mb-1">
                <h6 class="mb-0">Request Received</h6>
                <small class="text-muted">2 Day Ago</small>
              </div>
              <p class="mb-0">Your profile details update request received by admin</p>
            </div>
          </li>
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point-wrapper"><span class="timeline-point timeline-point-primary"></span></span>
            <div class="timeline-event">
              <div class="timeline-header mb-1">
                <h6 class="mb-0">Request Progress</h6>
                <small class="text-muted">1 Day Ago</small>
              </div>
              <p class="mb-2">Your request for update company details are progress</p>
            </div>
          </li>
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point-wrapper"><span class="timeline-point timeline-point-success"></span></span>
            <div class="timeline-event pb-0">
              <div class="timeline-header mb-1">
                <h6 class="mb-0">Request status updated</h6>
                <small class="text-muted">1 Day Ago</small>
              </div>
              <p class="mb-0">Your profile details update</p>
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
                  <li class="d-flex align-items-center mb-3"><i class="bx bx-phone"></i><span class="fw-medium mx-2">Contact:</span> <span>(123) 456-7809</span></li>
                  <li class="d-flex align-items-center mb-3"><i class="bx bx-chat"></i><span class="fw-medium mx-2">Fax:</span> <span>0922-987807</span></li>
                  <li class="d-flex align-items-center mb-3"><i class="bx bx-envelope"></i><span class="fw-medium mx-2">Email:</span> <span>yahoo@gmail.com</span></li>
                  <li class="d-flex align-items-center mb-3"><i class='bx bx-globe' ></i><span class="fw-medium mx-2">Website:</span> <span><a href="" class="text-primary">Webeesocial.ca</a></span></li>
                  <li class="d-flex align-items-center mb-3"><i class='bx bx-location-plus'></i><span class="fw-medium mx-2">Address:</span> <span>Dubai</span></li>
                </ul>
                </div>
               
              </div>
            </div>
          </div>
      </div>
    </div>
    <!--/ Activity Timeline -->
  </div>
</div>
@endsection
@push('scripts')