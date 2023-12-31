@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row">
  <div class="region col-md-12">
    <h3 class="text-primary"><b>Region</b></h3>
    <div class="row">
    @foreach ($regionsCount as $region)
        <?php
            $regionName = $region->region;
            $count = $region->count;
        ?>

            <div class="col-md-3 mb-3">
              <div class="card">
                <div>
                  <div class=" d-flex justify-content-between align-items-center">
                    <span class="mb-1 badge bg-primary">{{ $regionName }}</span>
                      <p class="mb-0">{{$count}} </p>
                  </div>
                  
                </div>
              </div>
              <hr class="d-none d-sm-block d-lg-none me-4">
            </div>

        
    @endforeach
    </div>
  
  </div>
  </div>

<div class="row">
     <div class="col-md-4 mb-3">
      <div class="card">
          <div class="d-flex justify-content-between align-items-start card-widget-1 pb-3 pb-sm-0">
            <div>
              <h3 class="mb-1 text-primary"><b>{{ $totalCompanyCount }}</b></h3>
              <h5 class="mb-0">Total Companies</h5>
            </div>
            <span class="badge bg-label-secondary rounded p-2 me-sm-4">
              <i class='bx bx-chart bx-sm text-primary'></i>
            </span>
          </div>
          <hr class="d-none d-sm-block d-lg-none me-4">
        </div>
     </div>
      {{-- Pending Request --}}
      <div class="col-md-4">
        <div class="card">
          <div class="d-flex justify-content-between align-items-start card-widget-1 pb-3 pb-sm-0">
            <div>
              <h3 class="mb-1 text-secondary"><b>{{ $ProfilependingCount }}</b></h3>
              <h5 class="mb-0">Pending Request </h5>
            </div>
            <span class="badge bg-label-secondary rounded p-2 me-sm-4">
              <i class='bx bx-chart bx-sm text-secondary'></i>
            </span>
          </div>
        </div>
        <hr class="d-none d-sm-block d-lg-none me-4">
      </div>

      {{-- Approved Request --}}
      <div class="col-md-4">
        <div class="card">
          <div class="d-flex justify-content-between align-items-start card-widget-1 pb-3 pb-sm-0">
            <div>
              <h3 class="mb-1 text-success"><b>{{ $ProfileapprovedCount }}</b></h3>
              <h5 class="mb-0">Approved Request</h5>
            </div>
            <span class="badge bg-label-secondary rounded p-2 me-sm-4">
            <i class='bx bx-git-pull-request text-success'></i>
            </span>
          </div>
        </div>
        <hr class="d-none d-sm-block d-lg-none me-4">
      </div>
</div>   
     
<div class="row">
<div class="col-md-12">
        <div class="card h-100">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h3 class="card-title m-0 me-2 text-primary"><b>Recently Added Company</b> </h3>
          </div>

          @foreach($lastestFiveCompanies as $latestCompany)
          <div class="card-body">
            <ul class="p-0 m-0">
              <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                  <img src="{{ asset('admin/') }}/assets/img/icons/unicons/briefcase-round.png" alt="User" class="rounded">
                </div>
                <div class="d-flex w-100 align-items-start gap-2" style="position: relative;">
                  <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                    <div>
                        <h6 class="mb-0 text-primary">{{$latestCompany->name}}</h6>
                        <small class="text-muted"> Joined on - {{$latestCompany->created_at->format('d- M - Y') }}</small>
                        <p> Email : <span> {{$latestCompany->email}}</span> </p>
                    </div>
                  </div>
                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 284px; height: 40px;"></div></div><div class="contract-trigger"></div></div></div>
              </li>
            </ul>
          </div>
          @endforeach
          
        </div>
      </div>
</div>
@endsection