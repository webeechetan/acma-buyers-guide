@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
          <div class="card-widget-separator-wrapper">
            <div class="card-body card-widget-separator">
              <div class="row gy-4 gy-sm-1">
                <div class="col-sm-6 col-lg-3">
                  <div class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0">
                    <div>
                      <h3 class="mb-1">{{ $totalCompanyCount }}</h3>
                      <p class="mb-0">Total Companies</p>
                    </div>
                    <span class="badge bg-label-secondary rounded p-2 me-sm-4">
                      <i class='bx bx-chart bx-sm'></i>
                    </span>
                  </div>
                  <hr class="d-none d-sm-block d-lg-none me-4">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <div class="col-md-12">
        <div class="card h-100">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title m-0 me-2">Recently Added Company </h5>
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
                        <h6 class="mb-0">{{$latestCompany->name}}</h6>
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