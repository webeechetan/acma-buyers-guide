@extends('website.layouts.app')
@section('title','My Profile')
@push('styles')

@endpush
@section('content')
<div class="row mt-5 mb-4 border-bottom pb-3">
  <div class="col-12">
     <div class="d-flex align-items-center justify-content-between flex-wrap  profile-card">
        <div class="d-flex align-items-center mb-3 mb-md-0">
          <div>
            
            @if($company_contact_details->image)
              <img src="{{ asset('storage/'. $company_contact_details->image) }}" alt="Company_logo" class="d-block h-auto ms-0 rounded user-profile-img">
            @else
              <img src="{{ asset('admin/') }}/assets/img/avatars/place.png" alt="user image" class="d-block h-auto ms-0 rounded user-profile-img">
            @endif

          </div>
          <div>
            <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
              <div class="user-profile-info">
                <h4 class="text-dark mb-2">{{$company->name}}</h4>
                <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                  
                  @if($company_contact_details->state)
                  <li class="list-inline-item fw-medium">
                    <i class="bx bx-map"></i> {{$company_contact_details->state}}
                  </li>
                  @endif
                  <li class="list-inline-item fw-medium">
                    <i class="bx bx-calendar-alt"></i> <span class="text-primary">{{$company->created_at->format('d M-y')}}</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mb-0">
              <li class="breadcrumb-item">
                <a href="{{route('company.dashboard')}}">Dashboard</a>
              </li>
              <li class="breadcrumb-item active"> My Profile</li>
            </ol>
          </nav>
      </div>
      </div>
  </div>
</div>
<div class="row">
   <div class="col-md-5 mb-md-0 mb-4 border-end">
    <!-- About User -->
    <div class="inner-profile-card">
        <!-- <div class="information-list profile-list mb-4">
          <h5 class="text-primary fw-medium">About</h5>
          <ul>
              <li>
                <div>
                  <i class='bx bx-buildings'></i><span>Company</span>
                </div>

                @if($company->name)
                <div>
                    <span>{{ ucfirst($company->name)}}</span>
                </div>
                @else 
                <span>NA</span>
                @endif
              </li>
          </ul>
        </div> -->
          <div class="information-list profile-list">
             <div class="d-flex justify-content-between mb-2">
                <h5 class="text-primary fw-medium mb-0">Contact</h5>
                <a href="{{ route('company.fillUpDetails') }}"  data-bs-custom-class="tooltip-primary" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="Edit"><i class='bx bxs-edit'></i></a>
             </div>
            <ul>
                <li>
                  <div>
                      <i class="bx bx-phone"></i><span>Contact</span>
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
                      <span>{{$company->website}}</span>
                  </div>
                  @else 
                  <span>NA</span>
                  @endif
                </li>
            </ul>
          </div>
    </div>
    <!--/ About User -->
    <!-- Profile Overview -->
   
    <!--/ Profile Overview -->
  </div> 
  <div class="col-md-7">
    <!-- Activity Timeline -->
    <div class="card-action mb-4">
      <div class="align-items-center">
        <h5 class="card-action-title mb-0 text-primary fw-semibold d-flex"><i class="bx bx-list-ul me-2 text-primary"></i>Company Profile Update Request Status</h5> 
      </div>
   
      @foreach ($CompanyUpdateRequests as $CompanyUpdateRequest)

    
      <div class="py-4">
        <ul class="timeline ms-2">
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point-wrapper"><span class="timeline-point timeline-point-warning"></span></span>
            <div class="timeline-event">
              <div class="timeline-header mb-1">
                <h6 class="mb-0 text-warning">Request Sent</h6>
                <small class="text-muted text-warning">{{$CompanyUpdateRequest->created_at->format('d M-y')}}</small>
              </div>
            </div>
          </li>
         
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point-wrapper"><span class="timeline-point {{ $CompanyUpdateRequest->status === 'approved' ? 'timeline-point-success' : 'timeline-point-primary' }}"></span></span>
            <div class="timeline-event">
              <div class="timeline-header mb-1">
                <h6 class="mb-0 text-primary">Request Status</h6>
                <small class="text-muted">{{ucfirst($CompanyUpdateRequest->status)}}</small>
              </div>
              <p class="mb-0">{{ucfirst($CompanyUpdateRequest->status)}}</span>
            </div>
          </li>
        
        </ul>

        <div class="view-btn mt-1">
          <button class="btn btn-primary btn-sm" id="view_details_{{$CompanyUpdateRequest->id}}"  data-bs-toggle="modal" data-bs-target="#exampleModal_{{$CompanyUpdateRequest->id}}">View Details</button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal_{{ $CompanyUpdateRequest->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="text-primary mb-0" id="exampleModalLabel">Profile Update Request<span class="text-primary mb-0">( {{ $CompanyUpdateRequest->updated_at->format('d-M-y')}})</span></h4>
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
                            $oldValue = isset($value['old']) ? $value['old'] : '-Blank-';
                            $newValue = isset($value['new']) ? $value['new'] : '-Blank-';

                            // $updating_data .= '<strong>' .ucfirst(str_replace('_', ' ', $key)) .'</strong>  From ' . $oldValue . ' to ' .$newValue. '<br>';
                            $updating_data .= '<li><strong>' . ucfirst(str_replace('_', ' ', $key)) .'</strong>  From ' . $oldValue . ' to ' .$newValue. '</li>';


                        }
                    } else {
                        // Handle the case where $CompanyUpdateRequest is not a valid JSON string
                        $updating_data = 'Invalid data format';
                    }
                  @endphp

                  {!! $updating_data !!}

                 
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
<script>
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
  var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
    return new Tooltip(tooltipTriggerEl);
  });
</script>

@endpush