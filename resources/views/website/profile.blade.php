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
          
          @if ($company_contact_details->image)
            <img src="{{ asset('storage/'. $company_contact_details->image) }}" alt="Company_logo" class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img">
          @else
            <img src="{{ asset('admin/') }}/assets/img/icons/unicons/briefcase.png" alt="user image" class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img">
          @endif

        </div>
        <div class="flex-grow-1 mt-3 mt-sm-5">
          <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
            <div class="user-profile-info">
              <h4>{{$company->name}}</h4>
              <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                
                @if($company_contact_details->state)
                <li class="list-inline-item fw-medium">
                  <i class="bx bx-map"></i> {{$company_contact_details->state}}
                </li>
                @endif
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

                @if($company->name)
                <div>
                    <span>{{$company->name}}</span>
                </div>
                @else 
                <p>NA</p>
                @endif
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

                  @if($company_contact_details->phone)
                  <div>
                      <span>{{$company_contact_details->phone }}</span>
                  </div>
                  @else  
                  <p>NA</p>
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
                  <p>NA</p>
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
                  <p>NA</p>
                  @endif
                </li>
                <li>
                  <div>
                      <i class="bx bx-envelope"></i><span>Email</span>
                  </div>
                  @if($company->email)
                  <div>
                      <span>{{$company->email}}</span>
                  </div>
                  @else 
                  <p>NA</p> 
                  @endif
                </li>
                <li>
                  <div>
                      <i class="bx bx-globe"></i><span>Website</span>
                  </div>
                  @if($company->website)
                  <div>
                      <span>{{$company->website}}</span>
                  </div>
                  @else 
                  <p>NA</p>
                  @endif
                </li>
            </ul>
          </div>
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
              <p class="mb-2">List</p>
            </div>
          </li>
         
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point-wrapper"><span class="timeline-point {{ $CompanyUpdateRequest->status === 'approved' ? 'timeline-point-success' : 'timeline-point-primary' }}"></span></span>
            <div class="timeline-event">
              <div class="timeline-header mb-1">
                <h6 class="mb-0 text-primary">Request Status</h6>
                <small class="text-muted">{{ucfirst($CompanyUpdateRequest->status)}}</small>
              </div>
              <p class="mb-2">{{ucfirst($CompanyUpdateRequest->status)}}</p>
            </div>
          </li>
        
        </ul>

        <div class="view-btn mt-5">
          <button class="btn btn-primary btn-sm"  data-bs-toggle="modal" data-bs-target="#exampleModal_{{$CompanyUpdateRequest->id}}">View Details</button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal_{{ $CompanyUpdateRequest->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="text-primary mb-0" id="exampleModalLabel">Updates Companies Details</h4>
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
                            $oldValue = isset($value['old']) ? $value['old'] : 'N/A';
                            $newValue = isset($value['new']) ? $value['new'] : 'N/A';

                            // $updating_data .= ucfirst(str_replace('_', ' ', $key)) . ' From ' . $value['old'] . ' to ' . $value['new'] . '<br>';

                            $updating_data .= ucfirst(str_replace('_', ' ', $key)) . ' From ' . $oldValue . ' to ' .$newValue. '<br>';

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